<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    // public function setLanguage(Request $request)
    // {
    //     $locale = $request->input('locale');
    //     if (Auth::check()) {
    //         $user = Auth::user();
    //         $user->language = $locale;
    //         $user->save();
    //     }
    //     app()->setLocale($locale);

    //     return response()->json(['message' => 'Language updated successfully.']);
    // }

    public function setLanguage(Request $request)
    {
        $locale = $request->input('locale');
        if (Auth::check()) {
            $user = Auth::user();
            $user->language = $locale;
            $user->save();
        }
        session(['applocale' =>$locale ]);
        App::setLocale($locale);
        App::setFallbackLocale($locale);
        session(['locale' => $locale]);
        session(['fallback_locale' => $locale]);

        return response()->json(['message' => 'Language updated successfully.']);
    }

    public function Language(Request $request)
    {
        $locale = $request->input('locale');
        App::setLocale($locale);
        session(['locale' => $locale]);
        return response()->json(['success' => true, 'locale' => $locale]);
    }


    public function setLanguages(Request $request)
    {
        $request->validate([
            'locale' => 'required|string|in:en,sv',
        ]);
        $locale = $request->locale;
        session(['applocale' =>$locale ]);
        App::setLocale($locale);
        App::setFallbackLocale($locale);
        session(['locale' => $locale]);
        session(['fallback_locale' => $locale]);
        if (Auth::check()) {
            $user = Auth::user();
            $user->set_lang = $locale;
            $user->save();
        }
        return response()->json(['success' => true]);
    }

}
