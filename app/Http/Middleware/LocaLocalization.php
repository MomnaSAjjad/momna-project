<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Auth;
class LocaLocalization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session::get('locale')) {
            Session::put('locale', $request->locale);
        }else{
            Session::put('locale', 'sv');
        }

        if(Auth::check()){
            $user = auth()->user();
            $locale = $user->language;
            App::setLocale($user->language);
            Session::put('locale', $user->language);
            session(['applocale' =>$locale ]);
            App::setLocale($locale);
            App::setFallbackLocale($locale);
            session(['locale' => $locale]);
            session(['fallback_locale' => $locale]);
        }else{
            App::setLocale(Session::get('locale'));
        }
        return $next($request);

    }

    }
