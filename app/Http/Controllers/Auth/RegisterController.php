<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Str;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function show()
    {
        $intent = null;
        return view('auth.registration' , compact('intent'));
    }

    public function customerStore(Request $request)
    {
        // dd($request->all());
        try {
            $request->validate([
                'company' => 'required|string|max:255',
                'org_num' => 'required|nullable|string|max:255',
                'employees' => 'nullable|string|max:255',
                'revenue' => 'nullable|string|max:255',
                'address' => 'required|nullable|string|max:255',
                'postcode' => 'required|nullable|string|max:255',
                'city' => 'required|nullable|string|max:255',
                'region' => 'nullable|string|max:255',
                'country' => 'required|nullable|string|max:255',
                'username' => 'required|string|max:255',
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'fullName' => 'required|string|max:255',
                'com_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'position' => 'nullable|string|max:255',
                'mobile' => 'nullable|string|max:255',
                'work' => 'nullable|string|max:255',
                'package' => 'nullable|string|max:255',
                'price' => 'nullable|string|max:255',
                'start_date' => 'nullable|string|max:255',
                'end_date' => 'nullable|string|max:255',
                'notes' => 'nullable|string|max:255',
            ], [
                'company.required' => 'Please enter your name.',
                'email.required' => 'An email address is required.',
                'org_num.required' => 'Please enter your Organization Number.',
                'address.required' => 'Please enter your Address.',
                'postcode.required' => 'Enter your PostalCode',
                'city.required' => 'Please enter your city.',
                'country.required' => 'Please enter your country.',
                'username.required' => 'Please enter your Username.',
                'first_name.required' => 'Please enter your First name.',
                'last_name.required' => 'Please enter your Last name.',
                'mobile.required'=> 'Please enter your Mobile Number.'
            ]);

            $password = Str::random(12);
            $company = Company::create([
                'company' => $request->name,
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
                'com_name' => $request->username,
                'email' => $request->email,
                'username' => $request->username,
                'region' => $request->region,
                'position' => $request->position,
                'status' => 1,
                'user_type' => 1,
                'company_id' => $company->id,
                'telephone' => $request->mobile,
                'work_phone' => $request->work,
                'company' => $company->name,
                'password' => Hash::make($password),
                'two_factor_auth'=>0,
                'role_id'=>5
            ]);
            Auth::login($user);
            $company->update(['owner_id' => $user->id]);

            if(!isset($request->package)){
                $package = 1;
            }else{
                $package = 1;
            }
            return redirect()->route('subscription.show')
            ->with('success', 'Customer created successfully.');

        } catch (ValidationException $e) {
            return back()
                ->withErrors($e->validator)
                ->withInput();
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
    }


}
