<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Certificates;
use App\Models\Contract;
use Carbon\Carbon;
use DB;
use App\Models\Category;
use App\Models\Subcategory;
use App\Constants;

class HomeController extends Controller
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
         $file_types = Constants::ATTACH_FILE_TYPES;
        $payment_periods = collect(Constants::PAYMENT_PERIODS)->mapWithKeys(function ($value, $key) {
            return [$key => __($value)];
        });


        if(\Auth::user()->hasanyrole('Demo')){
            $file_types = Constants::ATTACH_FILE_TYPES;
            return view('demo.general.home', compact('file_types'));
        }else{
            $user = auth()->user();
            $companyId = $user->company_id;

            $total_contracts_active = Contract::where('company_id', $companyId)
                                ->where('status', 1) // Assuming 1 represents 'active'
                                ->count();
            $total_contracts_archived = Contract::where('company_id', $companyId)
                                ->where('status', 0) // Assuming 1 represents 'active'
                                ->count();
            $total_contracts_costs = Contract::where('company_id', $companyId)
                                       ->where('amount_type', 0)
                                       ->sum('amount_value');

            $totalContracts = Contract::where('company_id', $companyId)->where('status', 1)->count();

            $totalFolders = Category::count();
            $total_contracts_costs = number_format($total_contracts_costs, 0, ',', ' ') . ' SEK';
            $total_contracts_title = __('general.total_contracts_title', ['contracts' => $totalContracts, 'folders' => $totalFolders]);
            $total_contracts_alerts = 0;

             $folders = Category::all();
            // Fetch the count of contracts for each folder
            $foldersWithContractCounts = $folders->map(function ($folder) use ($companyId) {
                $folder->contract_count = Contract::where('company_id', $companyId)
                                                   ->where('contract_folder_id', $folder->id)
                                                   ->count();
                return $folder;
            });

            // Getting contracts with alerts
            $now = Carbon::now();
            $thirtyDaysFromNow = $now->copy()->addDays(30);

            // Fetch the contracts with duration_end_date less than 30 days from now
            // and sort them from the soonest to the latest end date
            $expiringContracts = Contract::where('company_id', $companyId)
                ->where('duration_end_date', '>=', $now)
                ->where('duration_end_date', '<=', $thirtyDaysFromNow)
                ->orderBy('duration_end_date', 'asc')
                ->get();


            $foldersWithContractData = $folders->map(function ($folder) use ($companyId) {

                $folder->total_costs = Contract::where('company_id', $companyId)
                                                ->where('contract_folder_id', $folder->id)
                                                ->where('amount_type', 0)
                                                ->sum('amount_value');

                $folder->total_income = Contract::where('company_id', $companyId)
                                                 ->where('contract_folder_id', $folder->id)
                                                 ->where('amount_type', 1)
                                                 ->sum('amount_value');
                return $folder;
            });

              return view('general.home', compact('file_types', 'total_contracts_active',
             'total_contracts_alerts', 'total_contracts_archived' ,'total_contracts_costs',
              'total_contracts_title', 'foldersWithContractCounts', 'expiringContracts',
              'payment_periods', 'foldersWithContractData'));

        }

        // return view('general.home');
    }


}
