<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\App;
use Session;
use App\Models\User;
use Carbon\Carbon;
use Hash;

class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $type = false;
        // demo
        if(!empty($request->get('type'))){
            $type = true;
        }
        return view('auth.login')->with('type',$type);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.registration');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function postLogin(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);

    //     $credentials = $request->only('email', 'password');
    //     if (Auth::attempt($credentials)) {

    //         return redirect()->intended('dashboard')
    //                     ->withSuccess('You have Successfully loggedin');
    //     }

    //     return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    // }

    // public function postLogin(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required',
    //         'password' => 'required',
    //     ]);
    //     $credentials = $request->only('username', 'password');
    //     if (Auth::attempt($credentials)) {
    //         $user = Auth::user();
    //         if ($user->two_factor_auth == 1) {
    //             $verificationCode = rand(100000, 999999);
    //             $user->verification_code =$verificationCode;
    //             $user->save();
    //             try {
    //                 Mail::send('emails.verification_code', ['code' => $verificationCode], function ($message) use ($user) {
    //                     $message->to($user->email);
    //                     $message->subject('Your Two-Factor Authentication Code');
    //                 });
    //                 \Log::info('Verification code email sent to: ' . $user->email);
    //                 return redirect()->route('2_fa_form')->withSuccess('Verification code sent to your email.');
    //             } catch (\Exception $e) {
    //                 \Log::error('Mail sending failed: ' . $e->getMessage());
    //                 return redirect()->route('2_fa_form')->withError('Failed to send verification code. Please try again.');
    //             }
    //         }
    //         return redirect()->intended('login')->withSuccess('You have successfully logged in');
    //     }
    //     \Log::error('Authentication failed for username: ' . $request->username);
    //     return redirect("login")->withError('Oops! You have entered invalid credentials');
    // }

    // public function postLogin(Request $request)
    // {
    //     // Validate the request input
    //     $request->validate([
    //         'username' => 'required',
    //         'password' => 'required',
    //         'set_lang' => 'required|string|in:en,sv',
    //     ]);
    //     $credentials = $request->only('username', 'password');
    //     if (Auth::attempt($credentials)) {
    //         $user = Auth::user();
    //         $user->language = $request->set_lang;
    //         $user->save();
    //         App::setLocale($user->set_lang);
    //         Session::put('applocale', $user->set_lang);
    //         if ($user->two_factor_auth == 1) {
    //             $verificationCode = rand(100000, 999999);
    //             $user->verification_code = $verificationCode;
    //             $user->save();

    //             try {
    //                 Mail::send('emails.verification_code', ['code' => $verificationCode], function ($message) use ($user) {
    //                     $message->to($user->email);
    //                     $message->subject('Your Two-Factor Authentication Code');
    //                 });

    //                 \Log::info('Verification code email sent to: ' . $user->email);
    //                 // Redirect to the 2FA form
    //                 return redirect()->route('2_fa_form')->withSuccess('Verification code sent to your email.');
    //             } catch (\Exception $e) {
    //                 \Log::error('Mail sending failed: ' . $e->getMessage());
    //                 return redirect()->route('2_fa_form')->withError('Failed to send verification code. Please try again.');
    //             }
    //         }

    //         // Redirect to the intended dashboard if no 2FA is needed
    //         return redirect()->intended('/')->withSuccess('You have successfully logged in');
    //     }

    //     // Log authentication failure and redirect back to login
    //     \Log::error('Authentication failed for username: ' . $request->username);
    //     return redirect("login")->withError('Oops! You have entered invalid credentials');
    // }

        public function postLogin(Request $request)
        {
            $request->validate([
                'username' => 'required',
                'password' => 'required',
                'set_lang' => 'required|string|in:en,sv',
            ]);
            $credentials = $request->only('username', 'password');
            $locale = app()->getLocale();
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                $user->language = $request->set_lang;
                $user->save();
                App::setLocale($user->language);
                Session::put('applocale', $user->language);
                if ($user->two_factor_auth == 1) {
                    $verificationCode = rand(100000, 999999);
                    $user->verification_code = $verificationCode;
                    $user->save();
                    try {
                        Mail::send('emails.verification_code',  ['code' => $verificationCode,'user'=>$user], function ($message) use ($user) {
                            $message->to($user->email);
                            $message->subject('Your Two-Factor Authentication Code');
                        });
                        \Log::info('Verification code email sent to: ' . $user->email);
                        $formattedEmail = $this->formatEmail($user->email);
                        Auth::logout();
                        session()->flash('flash_message', __('messages.Enter the 6-digit code sent to :email', ['email' => $formattedEmail]));
                        $encrypedEmail = encrypt($user->email);
                        // session()->flash('info_message', __('messages.Please check your inbox for the verification code.'));
                        return redirect()->route('2_fa_form', ['token' => $encrypedEmail]);

                    } catch (\Exception $e) {
                        \Log::error('Mail sending failed: ' . $e->getMessage());
                        return redirect()->route('2_fa_form')->with('flash_message', 'Failed to send verification code. Please try again later.');
                    }
                }
                return redirect()->intended('/')->with('flash_message', 'You have successfully logged in');
            }
            \Log::error('Authentication failed for username: ' . $request->username);
            $errorMessage =  __('messages.Oops! You have entered invalid credentials', [], $locale);
            return redirect('login')->with(['error' => $errorMessage]);
        }
        private function formatEmail($email)
        {
            list($localPart, $domain) = explode('@', $email);
            if (strlen($localPart) > 3) {
                $formattedLocalPart = substr($localPart, 0, 3) . str_repeat('*', strlen($localPart) - 3);
            } else {
                $formattedLocalPart = str_repeat('*', strlen($localPart));
            }
            return $formattedLocalPart . '@' . $domain;
        }



    public function resendCode(Request $request)
    {
        $email = decrypt($request->token);
        $locale = app()->getLocale();
        $user = User::where('email',$email)->first();
        if ($user->two_factor_auth == 1) {
            $verificationCode = rand(100000, 999999);
            $user->verification_code = $verificationCode;
            $user->save();

            try {
                $data = ['code' => $verificationCode,'user'=>$user];
                Helper::processEmail($user->email, 'emails.verification_code', 'Your Two-Factor Authentication Code', $data);
                \Log::info('Verification code email resent to: ' . $user->email);
                $formattedEmail = $this->formatEmail($user->email);
                session()->flash('flash_message', __('messages.Enter the 6-digit code sent to :email', ['email' => $formattedEmail]));

                $encrypedEmail = encrypt($user->email);
                return redirect()->route('2_fa_form', ['token' => $encrypedEmail]);
            } catch (\Exception $e) {
                \Log::error('Mail sending failed: ' . $e->getMessage());
                $encrypedEmail = encrypt($user->email);
                return redirect()->route('2_fa_form', ['token' => $encrypedEmail]);
                return redirect()->route('2_fa_form')->withError('Failed to resend verification code. Please try again.');
            }
        }
        return redirect()->route('2_fa_form')->withError('Two-factor authentication is not enabled for this user.');
    }

    // for view
    public function two_fa_form()
    {
        return view('users.two_factor_verification');
    }
    public function verify(Request $request)
    {

           $request->validate([
               'verification_code' => 'required|digits:6',
               'email' => 'required'
           ]);
           $email = decrypt($request->email);
           $locale = app()->getLocale();
           $user = User::where('email',$email)
                        ->where('verification_code',$request->verification_code)
                        ->where('updated_at', '>=', Carbon::now()->subMinute())
                        ->first();
           if ($user) {
               Auth::loginUsingId($user->id);
               $user->update(['verification_code' => null]);
               $successMessage = __('messages.You have successfully verified your code and logged in.', [], $locale);
               return redirect()->intended('/')->withSuccess($successMessage);
           }
           $errorMessage = __('messages.Invalid verification code.', [], $locale);
           return redirect()->back()->withErrors(['verification_code' => $errorMessage]);

    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard-analytics');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
