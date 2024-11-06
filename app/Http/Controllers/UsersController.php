<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Company;
use App\Models\Subscription;
use Illuminate\Support\Facades\Mail;
use App\Mail\TwoFactorCodeMail;
use Spatie\Permission\Models\Permission;
use App\Constants;
use DB;

class UsersController extends Controller
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
    // public function index()
    // {
    //     if(\Auth::user()->hasanyrole('Demo')){
    //         return view('demo.users.index');
    //     }else{
    //         return view('users.index');
    //     }
    // }
    // public function index()
    // {

    //     if (\Auth::user()->hasanyrole('Demo')) {

    //         return view('demo.users.index');
    //     } else {

    //         $users = User::all();
    //         return view('users.index', compact('users'));
    //     }
    // }

     public function index()
    {
        $authUser = \Auth::user();
        if ($authUser->hasAnyRole('superuser')) {
            $users = User::all();
            return view('users.index', compact('users'));
        } else {
            return view('users.index', ['users' => []]);
            // return redirect()->route('home')->with('error', 'You do not have permission to view users.');
        }
    }



    public function list()
    {

        return view('users.index');
    }

    public function create()
    {
        $regions = Constants::REGIONS;
        $companies = Company::all();

        if(\Auth::user()->hasanyrole('Demo')){
            return view('demo.users.create', compact('regions', 'companies'));
        }else{
            return view('users.create', compact('regions', 'companies'));
        }

    }



    public function addUser(Request $request)
    {
        $user = User::create([
            'company' => $request->company,
            'name' => $request->name,
            'username' => $request->username,
            'two_factor_auth' => 0,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'position' => $request->position,
            'region' => $request->region,
            'user_type'=> $request->user_type == 'admin' ? 2 : 0,
            'status'=> 1,
            // 'password' => Hash::make('1234566'),
            'password' => Hash::make($request->password),

        ]);


        // Permission::create(['name' => 'see-new-contracts']);

        if($request->user_type == 'admin'){
            $user->assignRole('admin');
        }

        if($request->user_type == 'user'){

           $selected_option = $request->selected_options;

           if($selected_option[0] && $selected_option[0] == 'yes'){
                $user->givePermissionTo('user-create');
           }
           if($selected_option[0] && $selected_option[1] == 'yes'){
                $user->givePermissionTo('user-delete');
           }
           if($selected_option[0] && $selected_option[2] == 'yes'){
                $user->givePermissionTo('see-all-categories');
           }
           if($selected_option[0] && $selected_option[3] == 'yes'){
                $user->givePermissionTo('upload-information-and-contracts-to-kontroll');
           }
           if($selected_option[0] && $selected_option[4] == 'yes'){
                $user->givePermissionTo('contract-edit');
           }
           if($selected_option[0] && $selected_option[5] == 'yes'){
                $user->givePermissionTo('contract-delete');
           }
           if($selected_option[0] && $selected_option[6] == 'yes'){
                $user->givePermissionTo('see-archived-contracts');
           }
           if($selected_option[0] && $selected_option[7] == 'yes'){
                $user->givePermissionTo('contract-costs');
           }
        }
        // return $user;
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    // public function addUser(Request $request)
    // {

    //     $user = User::create([
    //         'company' => $request->company,
    //         'name' => $request->name,
    //         'username' => $request->username,
    //         'two_factor_auth' => 0,
    //         'email' => $request->email,
    //         'telephone' => $request->telephone,
    //         'position' => $request->position,
    //         'region' => $request->region,
    //         'user_type'=> $request->user_type == 'admin' ? 2 : 0,
    //         'status'=> 1,
    //         // 'password' => Hash::make('1234566'),
    //         'password' => Hash::make($request->password),

    //     ]);


    //     // Permission::create(['name' => 'see-new-contracts']);

    //     if($request->user_type == 'admin'){
    //         $user->assignRole('admin');
    //     }

    //     // if($request->user_type == 'user'){

    //     //    $selected_option = $request->selected_options;

    //     //    if($selected_option[0] && $selected_option[0] == 'yes'){
    //     //         $user->givePermissionTo('user-create');
    //     //    }
    //     //    if($selected_option[0] && $selected_option[1] == 'yes'){
    //     //         $user->givePermissionTo('user-delete');
    //     //    }
    //     //    if($selected_option[0] && $selected_option[2] == 'yes'){
    //     //         $user->givePermissionTo('see-all-categories');
    //     //    }
    //     //    if($selected_option[0] && $selected_option[3] == 'yes'){
    //     //         $user->givePermissionTo('upload-information-and-contracts-to-kontroll');
    //     //    }
    //     //    if($selected_option[0] && $selected_option[4] == 'yes'){
    //     //         $user->givePermissionTo('contract-edit');
    //     //    }
    //     //    if($selected_option[0] && $selected_option[5] == 'yes'){
    //     //         $user->givePermissionTo('contract-delete');
    //     //    }
    //     //    if($selected_option[0] && $selected_option[5] == 'yes'){
    //     //         $user->givePermissionTo('see-archived-contracts');
    //     //    }
    //     //    if($selected_option[0] && $selected_option[6] == 'yes'){
    //     //         $user->givePermissionTo('contract-costs');
    //     //    }
    //     //    if($selected_option[0] && $selected_option[6] == 'yes'){
    //     //     $user->givePermissionTo('see-new-contracts');
    //     //    }
    //     //    if($selected_option[0] && $selected_option[7] == 'yes'){
    //     //    $user->givePermissionTo('user-edit');
    //     //    }
    //     // }
    //      // Fetch permissions from the permissions table
    //     $permissions = DB::table('permissions')->select('name', 'group_name')->get();
    //     // dd($permissions);
    //     // Optionally, you can pass the permissions to the session or view
    //     return redirect()->route('users.index', compact('permissions'))->with('success', 'User created successfully.');
    //     // return $user;
    //     // return redirect()->route('users.index')->with('success', 'User created successfully.');
    // }


    public function customers()
    {
        // 1 - Company Owner - Customer
        $user_type = 1;
        // customers
        // $company = Company::find($id);
        $customers_total = User::where('user_type', $user_type)->count();
        $customers = User::where('user_type', $user_type)->get();

        return view('users.customers', compact('customers', 'customers_total'));
    }

    public function customerShow($id)
    {
        $regions = Constants::REGIONS;
        $employees = Constants::EMPLOYEES;
        $revenue = Constants::REVENUE;
        $packages = Constants::PACKAGES;
        $customer = User::with('ownedCompany')->findOrFail($id);
        if(isset($customer->ownedCompany)){
            $usersInCompany = User::where('company_id', $customer->ownedCompany->id)->get();
        // $subscription = Subscription::where('company_id', $customer->ownedCompany->id)->get();
            $subscription = Subscription::where('company_id', $customer->ownedCompany->id)->latest()->first();
        }else{
            $usersInCompany = '';
            $subscription = '';
        }
        $companies = Company::all();
        // $company = Company::where('owner_id', $id)->get();
        return view('users.show_customers', compact('customer','companies','regions','employees', 'revenue', 'packages','subscription','usersInCompany'));
    }

    public function customerCreate()
    {
        $regions = Constants::REGIONS;
        $employees = Constants::EMPLOYEES;
        $revenue = Constants::REVENUE;
        $packages = Constants::PACKAGES;
        $companies = Company::all();
        return view('users.create_customers', compact('regions', 'companies', 'employees', 'revenue', 'packages'));
    }

    public function edit()
    {
        return view('users.edit');
    }

    public function search(Request $request)
    {
        $search = $request->input('q');
        $companies = Company::where('name', 'LIKE', "%{$search}%")
                            ->get();
        return response()->json($companies);
    }

    public function customerStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'org_num' => 'nullable|string|max:255',
            'employees' => 'nullable|string|max:255',
            'revenue' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'postcode' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'region' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'user_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'position' => 'nullable|string|max:255',
            'mobile' => 'nullable|string|max:255',
            'work' => 'nullable|string|max:255',
            'package' => 'nullable|string|max:255',
            'price' => 'nullable|string|max:255',
            'start_date' => 'nullable|string|max:255',
            'end_date' => 'nullable|string|max:255',
            'notes' => 'nullable|string|max:255',
        ]);

        $password = Str::random(12);
        // $company = Company::findOrFail($request->company_id);

        $company = Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'org_num' => $request->org_num,
            'employees' => $request->employees,
            'revenue' => $request->revenue,
            'address' => $request->address,
            'postcode' => $request->postcode,
            'city' => $request->city,
            'region' => $request->region,
            'country' => $request->country,
            'owner_id' => null,
        ]);

        $user = User::create([
            'name' => $request->user_name,
            'email' => $request->email,
            'username' => $request->user_name,
            'region' => $request->region,
            'position' => $request->position,
            'status' => 1,
            'user_type' => 1,
            'company_id' => $company->id,
            'telephone' => $request->mobile,
            'work_phone' => $request->work,
            'company' => $company->name,
            'password' => Hash::make($password),
        ]);
        $company->update(['owner_id' => $user->id]);

        if(!isset($request->package)){
            $package = 1;
        }else{
            $package = 1;
        }
        // $subscription = Subscription::create([
        //     'company_id' => $company->id,
        //     'package' => $package,
        //     'price' => $request->price,
        //     'start_date' => $request->start_date,
        //     'end_date' => $request->end_date,
        //     'notes' => $request->notes,
        //     'status' => 1,
        // ]);

        return redirect()->route('customers')
            ->with('success', 'Customer created successfully.');
    }

    public function customerUpdate(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            // 'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'email' => 'required|string|email|max:255',
            'position' => 'nullable|string|max:255',
            'telephone' => 'nullable|string|max:255',
            'region' => 'nullable|string|max:255',
            'company_id' => 'required|exists:companies,id',
            'password' => 'nullable|string|min:8',
        ]);

        // dd($request->all());

        $company = Company::findOrFail($request->company_id);


        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->name;
        $user->position = $request->position;
        $user->region = $request->region;
        $user->status = 1;
        $user->user_type = 1;
        $user->company_id = $request->company_id;
        $user->status = $request->status;
        $user->company = $company->name;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }


        $updateStatus = $user->save();
        if (!$updateStatus) {
            return redirect()->back()->with('error', 'Failed to update user.');
        }

        return redirect()->route('customers.show', ['id' => $id])->with('success', 'Customer updated successfully!');
    }

            // for verification form

            // for toggle button
            public function two_factor_auth(Request $request)
            {

                // $status = $request->input('two_factor_auth', false) ? true : false;
                $user = auth()->user();
                $user->two_factor_auth = $request->two_factor_auth??0;
                $user->save();
                // dd($request->all(),auth()->user());

                return redirect()->back()->with('success', 'Two Factor Authentication status updated successfully.');
            }

            public function user_settings(Request $request)
            {
                $user_settings = User::where('id' , auth()->user()->id)->first();
                app()->setLocale(locale: $user_settings->language);
                // dd($user_settings);
                return view('users.settings' ,compact('user_settings'));
            }
            public function changePassword(Request $request)
            {
                $request->validate([
                    'old_password' => 'required',
                    'new_password' => 'required|min:6|confirmed',
                ], [
                    'new_password.confirmed' => trans('setting.password_mismatch'),
                ]);

                $user = \Auth::user();

                if (!\Hash::check($request->old_password, $user->password)) {
                    return back()->withErrors(['old_password' => trans('setting.old_password_incorrect')]);
                }

                $user->password = \Hash::make($request->new_password);
                $user->save();
                try {
                    $data = ['user'=>$user];
                    Helper::processEmail($user->email, 'emails.passwordNotification', 'Password changed successfully!', $data);
                    return back()->with('status', trans('setting.password_changed'));
                } catch (\Throwable $th) {
                    return back()->with('status', $th->getMessage());
                }

            }

            public function saveLanguage(Request $request)
            {
                $request->validate([
                    'language' => 'required|in:en,sv',
                ]);
                $user = auth()->user();
                $user->language = $request->language;
                $user->save();
                app()->setLocale($request->language);

                return redirect()->back()->with('success', __('messages.Language updated successfully.'));
            }
            public function destroy($id)
        {
            $user = User::findOrFail($id);
            try {
                $user->delete();
                return redirect()->route('users.index')->with('success', 'User deleted successfully.');
            } catch (\Exception $e) {
                return redirect()->route('users.index')->with('error', 'Failed to delete the user.');
            }
        }
        public function createPermission()
        {
            return view('permission.add');
        }
        public function storePermission(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255|unique:permissions,name',
                'group_name' => 'required|string',
                'lang'=> 'required|string',
            ]);
            Permission::create([
                'name' => $request->name,
                'group_name' => $request->group_name,
                'lang' => $request->lang,
            ]);

            return redirect()->route('permissions.index')->with('success', 'Permission created successfully.');
        }


        public function showPermissions()
        {
            $permissions = Permission::all();
            return view('permission.index', compact('permissions'));
        }

        public function destroyperm($id)
        {
            $permissions = Permission::findOrFail($id);

            try {
                $permission->delete();
                return redirect()->route('permissions.index')->with('success', 'Permission deleted successfully.');
            } catch (\Exception $e) {
                return redirect()->route('permissions.index')->with('error', 'Failed to delete the permission.');
            }
        }
}
