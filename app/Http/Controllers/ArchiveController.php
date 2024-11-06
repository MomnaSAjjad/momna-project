<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Constants;
use DB;
use App\Models\Contract;
use App\Models\Category;
use App\Models\Subcategory;

class ArchiveController extends Controller
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

    public function index()
    {
        if(\Auth::user()->hasanyrole('Demo')){
            $file_types = Constants::ATTACH_FILE_TYPES;
            return view('demo.archive.index', compact('file_types'));
        }else{
            $user = auth()->user();
            $companyId = $user->company_id;
            $folders = Category::all();
            $totalContracts = Contract::where('company_id', $companyId)->where('status', 1)->count();

            // Fetch the count of contracts for each folder
            $foldersWithContractCounts = $folders->map(function ($folder) use ($companyId) {
                $folder->contract_count = Contract::where('company_id', $companyId)
                                                   ->where('contract_folder_id', $folder->id)
                                                   ->count();
                return $folder;
            });
            $folder_id = request()->query('folder_id');
            $show_full_details = isset($folder_id);
            $total_contracts_title = __('contracts.total_contracts_title', ['contracts' => $totalContracts]);
            $folder_name = null;
            if ($folder_id) {
                $folder = Category::find($folder_id);
                if ($folder) {
                    $folder_name = app()->getLocale() === 'en' ? $folder->name : $folder->name_sv;
                }
            }
            return view('archive.index', compact('foldersWithContractCounts','show_full_details','total_contracts_title','folder_name'));
        }
        // return view('archive.index');
    }
}
