<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Constants;
use DB;

class RemindersController extends Controller
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
        if(\Auth::user()->hasanyrole('Demo')){
            $file_types = Constants::ATTACH_FILE_TYPES;
            return view('demo.reminders.index', compact('file_types'));
        }else{
            return view('reminders.index');
        }
    }
    public function list()
    {

        return view('reminders.index');
    }
}
