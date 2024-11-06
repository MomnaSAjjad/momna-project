<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contract;
use Carbon\Carbon;
use DB;
use App\Models\Company;
use App\Models\Category;
use App\Models\Subcategory;
use App\Constants;

class ContractController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // if(\Auth::user()->hasanyrole('Admin|Manager|SuperUser')){
        //     $user_type = 1;
        // }else{
        //     $user_type = 0;
        // }
        return view('general.home');
    }
    public function register()
    {

        $categories = Category::with('subcategories')->orderBy('sort')->get();
        // dd($categories);
        // foreach ($categories as $category) {
        //     dump("Category: " . $category->name, $category->subcategories);
        // }
        $categories_total = Category::count();
        $subcategory = Subcategory::all();
        // dd($subcategory);
        return view('contract.register', ['folders' => $categories, 'folders_total' => $categories_total,'subcategory'  ]);
        // return view('contract.register');
    }
    public function registerSteps(Request $request, $id)
    {
        // $payment_periods = Constants::PAYMENT_PERIODS;
        $payment_periods = collect(Constants::PAYMENT_PERIODS)->mapWithKeys(function ($value, $key) {
            return [$key => __($value)];
        });
        // $notice_periods = Constants::NOTICE_PERIODS;
        $notice_periods = collect(Constants::NOTICE_PERIODS)->mapWithKeys(function ($value, $key) {
            return [$key => __($value)];
        });
        // $reminder_types = Constants::REMINDER_TYPES;
        $reminder_types = collect(Constants::REMINDER_TYPES)->mapWithKeys(function ($value, $key) {
            return [$key => __($value)];
        });
        // $notice_days = Constants::NOTICE_DAYS;
        $notice_days = collect(Constants::NOTICE_DAYS)->mapWithKeys(function ($value, $key) {
            return [$key => __($value)];
        });
        // $file_types = Constants::ATTACH_FILE_TYPES;
        $file_types = collect(Constants::ATTACH_FILE_TYPES)->mapWithKeys(function ($value, $key) {
            return [$key => __($value)];
        });
        $currencies = Constants::CURRENCIES;


        $category = Category::with('subcategories')->find($id);
        return view('contract.register-steps', ['folder' => $category, 'payment_periods' => $payment_periods, 'notice_periods' => $notice_periods, 'reminder_types' => $reminder_types, 'notice_days' => $notice_days, 'file_types' => $file_types, 'currencies' => $currencies]);
    }
    public function list()
    {
        if(\Auth::user()->hasanyrole('Demo')){
            $file_types = Constants::ATTACH_FILE_TYPES;
            return view('demo.contract.list', compact('file_types'));
        }else{
            // $payment_periods = Constants::PAYMENT_PERIODS;
            $payment_periods = collect(Constants::PAYMENT_PERIODS)->mapWithKeys(function ($value, $key) {
                return [$key => __($value)];
            });
            $file_types = Constants::ATTACH_FILE_TYPES;
            $folders = Category::all();
            $user = auth()->user();
            $regions = Constants::REGIONS;
            $companies = Company::all();
            $contractsadd = Contract::all();
            $companyId = $user->company_id;
            $contracts = Contract::where('company_id', $companyId)->where('status', 1)->get();
            $contracts_all = Contract::where('company_id', $companyId)->where('status', 1)->with(['contractFolder', 'contractType'])->paginate(10);
            $totalContracts = Contract::where('company_id', $companyId)->where('status', 1)->count();
            $contracts_total = Contract::where('company_id', $companyId)->where('status', 1)->count();

            $contractTypes = DB::table('contracts')
                ->join('subcategory', 'contracts.contract_type_id', '=', 'subcategory.id')
                ->where('contracts.company_id', $companyId)
                ->select('contracts.contract_type_id', 'subcategory.name as type_name')
                ->distinct()
                ->get();

            $total_contracts_title = __('contracts.total_contracts_title', ['contracts' => $totalContracts]);
            $folder_id = request()->query('folder_id');
            $show_full_details = isset($folder_id);
            $folder_name = null;
            if ($folder_id) {
                $folder = Category::find($folder_id);
                if ($folder) {
                    $folder_name = app()->getLocale() === 'en' ? $folder->name : $folder->name_sv;
                }
            }
            return view('contract.list', compact('folders', 'contracts',
            'contracts_all', 'payment_periods','total_contracts_title',
            'file_types', 'contractTypes','regions','contractsadd','show_full_details','folder_name'));
        }

    }

    public function ending($color)
    {
        if(\Auth::user()->hasanyrole('Demo')){
            if (!in_array($color, ['red', 'orange', 'gray', 'green'])) {
                abort(404);
            }

            $payment_periods = Constants::PAYMENT_PERIODS;
            $notice_periods = Constants::NOTICE_PERIODS;
            $reminder_types = Constants::REMINDER_TYPES;
            $notice_days = Constants::NOTICE_DAYS;
            $file_types = Constants::ATTACH_FILE_TYPES;
            $currencies = Constants::CURRENCIES;

            return view('demo.contract.show', ['payment_periods' => $payment_periods, 'notice_periods' => $notice_periods, 'reminder_types' => $reminder_types, 'notice_days' => $notice_days, 'file_types' => $file_types,'currencies' => $currencies, 'status' => $color]);
        }else{
            abort(404);
        }
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'contract_folder_id' => 'required|exists:category,id',
            'contract_type_id' => 'required|exists:subcategory,id',
            'contract_name' => 'required|string|max:255',
            'contract_owner' => 'required|string|max:255',
            'contract_telephone' => 'nullable|string|max:255',
            'contract_email' => 'nullable|string|email|max:255',
            'contract_type_optional' => 'nullable|string|max:255',
            'amount_type' => 'required|integer',
            'amount_value' => 'required|numeric',
            'amount_payment_period' => 'required|integer',
            'duration_start_date' => 'required|string',
            'duration_end_date' => 'required|string',
            // 'duration_auto_renew' => 'required|integer',
            'duration_notice_period' => 'required|integer',
            // 'set_reminder' => 'required|integer',
            'reminder_notice_date' => 'nullable|integer',
            'reminder_repeat_yearly' => 'nullable|integer',
            // 'reminder_emails' => 'nullable|string|max:255',
            'reminder_emails' => 'nullable|array',
            'reminder_emails.*' => 'string|email|max:255',
            'reminder_date' => 'nullable|string|max:255',
            'reminder_type' => 'nullable|string|max:255',
            'counterparty_company_name' => 'required|string|max:255',
            'counterparty_person_name' => 'nullable|string|max:255',
            'counterparty_telephone' => 'nullable|string|max:255',
            'counterparty_email' => 'nullable|string|email|max:255',
            'attach_document_link' => 'nullable|string|max:255',
            'attach_document_type' => 'nullable|string|max:255',
            'attach_document_file' => 'nullable|string|max:255',
            'comment_area' => 'nullable|string',
        ]);

        if (isset($validated['reminder_emails'])) {
            // Convert the array to JSON
            $validated['reminder_emails'] = json_encode($validated['reminder_emails']);
        }

        // Passing company_id and internal contract number
        $user = auth()->user();
        $companyId = $user->company_id;
        $maxContractNumber = Contract::where('company_id', $companyId)->max('contract_number');
        $nextContractNumber = $maxContractNumber ? $maxContractNumber + 1 : 1;
        $validated['contract_number'] = $nextContractNumber;
        $validated['company_id'] = $companyId;

        // $contract = Contract::create($validated);

        //////// return response()->json(['success' => 'Contract created successfully.']);
        // return response()->json(['message' => 'Contract saved successfully', 'id' => $contract->contract_number]);
        //////// return redirect()->route('contracts.index')->with('success', 'Contract created successfully.');
    }

    public function show($contractNumber)
    {
        if(\Auth::user()->hasanyrole('Demo')){
            $payment_periods = Constants::PAYMENT_PERIODS;
            $notice_periods = Constants::NOTICE_PERIODS;
            $reminder_types = Constants::REMINDER_TYPES;
            $notice_days = Constants::NOTICE_DAYS;
            $file_types = Constants::ATTACH_FILE_TYPES;
            $currencies = Constants::CURRENCIES;

            return view('demo.contract.show', ['payment_periods' => $payment_periods, 'notice_periods' => $notice_periods, 'reminder_types' => $reminder_types, 'notice_days' => $notice_days, 'file_types' => $file_types,'currencies' => $currencies]);
        }else{
            $user = auth()->user();
            // $contract = Contract::findOrFail($id);
            // $payment_periods = Constants::PAYMENT_PERIODS;
            // $notice_periods = Constants::NOTICE_PERIODS;
            // $reminder_types = Constants::REMINDER_TYPES;
            // $notice_days = Constants::NOTICE_DAYS;
            // $file_types = Constants::ATTACH_FILE_TYPES;
            // $contract_folder_name = $contract->contractFolder ? $contract->contractFolder->name : '---';
            // $contract_type_name = $contract->contractType ? $contract->contractType->name : '---';

            // $category = Category::with('subcategories')->find($id);
            // return view('contract.show', ['contract' => $contract, 'folder' => $category, 'payment_periods' => $payment_periods, 'notice_periods' => $notice_periods, 'reminder_types' => $reminder_types, 'notice_days' => $notice_days, 'file_types' => $file_types, 'contract_folder_name' => $contract_folder_name, 'contract_type_name' => $contract_type_name]);
            // Find the contract by contract_number and company_id
            $contract = Contract::where('contract_number', $contractNumber)
                ->where('company_id', $user->company_id)
                ->firstOrFail();

            $payment_periods = Constants::PAYMENT_PERIODS;
            $notice_periods = Constants::NOTICE_PERIODS;
            $reminder_types = Constants::REMINDER_TYPES;
            $notice_days = Constants::NOTICE_DAYS;
            $file_types = Constants::ATTACH_FILE_TYPES;
            $currencies = Constants::CURRENCIES;
            $contract_folder_name = $contract->contractFolder ? $contract->contractFolder->name : '---';
            $contract_type_name = $contract->contractType ? $contract->contractType->name : '---';

            $category = Category::with('subcategories')->find($contract->category_id);
            return view('contract.show', [
                'contract' => $contract,
                'folder' => $category,
                'payment_periods' => $payment_periods,
                'notice_periods' => $notice_periods,
                'reminder_types' => $reminder_types,
                'notice_days' => $notice_days,
                'file_types' => $file_types,
                'contract_folder_name' => $contract_folder_name,
                'contract_type_name' => $contract_type_name,
                'currencies' => $currencies
            ]);
        }
    }

    public function registerImport()
    {
        if(\Auth::user()->hasanyrole('Demo')){
            // $file_types = Constants::ATTACH_FILE_TYPES;
            return view('demo.contract.register-import');
        }else{

            return view('contract.register-import');
        }
    }

    public function saveStep(Request $request)
    {
        $data = $request->validate([
            'contract_data' => 'required|array',
            // Add more validation rules as per your requirements
        ]);

        // Logic to save the contract data
        $contract = Contract::create($data['contract_data']);

        return response()->json([
            'success' => true,
            'contract_id' => $contract->id,
        ]);
    }

    public function sendAttachEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'file_path' => 'required|string',
        ]);

        $filePath = public_path($request->file_path);
        $fileName = basename($filePath);

        if (!file_exists($filePath)) {
            return response()->json(['error' => 'File not found.'], 404);
        }

        Mail::send('emails.attachment', [], function($message) use ($request, $filePath, $fileName) {
            $message->to($request->email);
            $message->subject('Here is your attachment');
            $message->attach($filePath, [
                'as' => $fileName,
                'mime' => mime_content_type($filePath),
            ]);
        });

        return response()->json(['success' => 'Email sent successfully!']);
    }
    // public function registerHr()
    // {

    //     return view('Contract.register-hr');
    // }
    // public function registerSupplierSubscription()
    // {

    //     return view('Contract.register-supplier-subscription');
    // }
}
