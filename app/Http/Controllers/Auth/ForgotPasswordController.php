<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Carbon\Carbon;
use Mail;

class ForgotPasswordController extends Controller
{
  public function getEmail()
  {

     return view('auth.forget-password');
  }

  public function postEmail(Request $request)
  {
    $request->validate([
        'email' => 'required|email|exists:users',
    ]);

    $token = Str::random(64);

      DB::table('password_resets')->insert(
          ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
      );

      Mail::send('auth.verify', ['token' => $token], function($message) use($request){
          $message->to($request->email);
          $message->subject('Reset Password Notification');
      });
      return redirect()->route('auth.forget-password-success');
 }
        public function updatePassword(Request $request)
        {
            $request->validate([
                'email' => 'required|email|exists:users,email',
                'password' => 'required|min:8|confirmed',
                'token' => 'required'
            ]);

            $passwordReset = DB::table('password_resets')
                ->where('token', $request->token)
                ->where('email', $request->email)
                ->first();

            if (!$passwordReset) {
                return back()->withErrors(['email' => 'Invalid token or email address']);
            }

            $user = \App\Models\User::where('email', $request->email)->first();
            $user->password = bcrypt($request->password);
            $user->save();

            DB::table('password_resets')->where('email', $request->email)->delete();

            return redirect()->route('login')->with('status', 'Password has been successfully Update');
        }

    public function getReset($token)
    {
        $passwordReset = DB::table('password_resets')->where('token', $token)->first();

        if (!$passwordReset) {
            return redirect()->route('login')->withErrors(['token' => 'Invalid token.']);
        }

        return view('auth.passwords.verify', ['token' => $token, 'email' => $passwordReset->email]);
    }


}
