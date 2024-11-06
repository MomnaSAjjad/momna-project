<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class CostsController extends Controller
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

        if(\Auth::user()->hasanyrole('Admin|Manager|SuperUser')){
            $user_type = 1;

        }else{
            $user_type = 0;
        }
        return view('costs.index');
    }
    public function list()
    {

        return view('costs.index');
    }
   
}
