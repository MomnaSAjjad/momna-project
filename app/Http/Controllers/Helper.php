<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserSubscription;
use Stripe;
use Illuminate\Support\Facades\Log;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Validator;
use Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail as FacadesMail;

class Helper extends Controller
{
    /**
     * Display the registration view.
     */
    public static function processEmail($to, $view, $subject, $body)
{
    try {
        if (!empty($to)) {
            FacadesMail::send($view, $body, function ($message) use ($to, $subject) {
                $message->to($to);
                $message->subject($subject);
            });
        } else {
            FacadesMail::send($view, $body, function ($message) use ($subject) {
                $message->to($to);
                $message->subject($subject);
            });
        }
        return true;
    } catch (\Exception $e) {
        return $e->getMessage();
    }
}

}
