<?php
    
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
    

class RoleController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
         $this->middleware('permission:role-create', ['only' => ['create','store']]);
         $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roles = Role::orderBy('id','DESC')->paginate(5);
        return view('roles.index',compact('roles'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $roleNames = array(
            // Contracts
            'contract-register' => __('roles.contract_rights_options.register'), 
            'contract-register-all' => __('roles.contract_rights_options.register_all'), 
            'contract-edit' => __('roles.contract_rights_options.contract_edit'), 
            'contract-edit-all' => __('roles.contract_rights_options.contract_edit_all'), 
            'contract-upload' => __('roles.contract_rights_options.contract_upload'), 
            'contract-delete' => __('roles.contract_rights_options.contract_delete'), 
            'contract-delete-all' => __('roles.contract_rights_options.contract_delete_all'), 
            'contract-costs' => __('roles.contract_rights_options.contract_costs'), 
            'contract-costs-all' => __('roles.contract_rights_options.contract_costs_all'), 
            'contract-reminders' => __('roles.contract_rights_options.contract_reminders'), 
            'contract-reminders-all' => __('roles.contract_rights_options.contract_reminders_all'), 
            'contract-email' => __('roles.contract_rights_options.contract_email'), 
            'contract-email-all' => __('roles.contract_rights_options.contract_email_all'), 
            'see-all-categories' => __('roles.contract_rights_options.contract_categories'), 
            // Users
            'user-title' => __('roles.user_rights_options.title'), 
            'user-create' => __('roles.user_rights_options.user_create'), 
            'user-edit' => __('roles.user_rights_options.user_edit'), 
            'user-delete' => __('roles.user_rights_options.user_delete'), 
            // Roles
            'role-title' => __('roles.role_rights_options.title'), 
            'role-create' => __('roles.role_rights_options.role_create'), 
            'role-edit' => __('roles.role_rights_options.role_edit'), 
            'role-list' => __('roles.role_rights_options.role_list'), 
            'role-delete' => __('roles.role_rights_options.role_delete'), 
        );

        $permission = Permission::get();
        return view('roles.create',compact('permission','roleNames'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));
    
        return redirect()->route('roles.index')
                        ->with('success',__('general.create_success'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roleNames = array(
            // Contracts
            'contract-register' => __('roles.contract_rights_options.register'), 
            'contract-register-all' => __('roles.contract_rights_options.register_all'), 
            'contract-edit' => __('roles.contract_rights_options.contract_edit'), 
            'contract-edit-all' => __('roles.contract_rights_options.contract_edit_all'), 
            'contract-upload' => __('roles.contract_rights_options.contract_upload'), 
            'contract-delete' => __('roles.contract_rights_options.contract_delete'), 
            'contract-delete-all' => __('roles.contract_rights_options.contract_delete_all'), 
            'contract-costs' => __('roles.contract_rights_options.contract_costs'), 
            'contract-costs-all' => __('roles.contract_rights_options.contract_costs_all'), 
            'contract-reminders' => __('roles.contract_rights_options.contract_reminders'), 
            'contract-reminders-all' => __('roles.contract_rights_options.contract_reminders_all'), 
            'contract-email' => __('roles.contract_rights_options.contract_email'), 
            'contract-email-all' => __('roles.contract_rights_options.contract_email_all'), 
            'see-all-categories' => __('roles.contract_rights_options.contract_categories'), 
            // Users
            'user-title' => __('roles.user_rights_options.title'), 
            'user-create' => __('roles.user_rights_options.user_create'), 
            'user-edit' => __('roles.user_rights_options.user_edit'), 
            'user-delete' => __('roles.user_rights_options.user_delete'), 
            // Roles
            'role-title' => __('roles.role_rights_options.title'), 
            'role-create' => __('roles.role_rights_options.role_create'), 
            'role-edit' => __('roles.role_rights_options.role_edit'), 
            'role-list' => __('roles.role_rights_options.role_list'), 
            'role-delete' => __('roles.role_rights_options.role_delete'),  
        );

        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
            ->where("role_has_permissions.role_id",$id)
            ->get();

        return view('roles.show',compact('role','rolePermissions','roleNames'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roleNames = array(
            // Contracts
            'contract-register' => __('roles.contract_rights_options.register'), 
            'contract-register-all' => __('roles.contract_rights_options.register_all'), 
            'contract-edit' => __('roles.contract_rights_options.contract_edit'), 
            'contract-edit-all' => __('roles.contract_rights_options.contract_edit_all'), 
            'contract-upload' => __('roles.contract_rights_options.contract_upload'), 
            'contract-delete' => __('roles.contract_rights_options.contract_delete'), 
            'contract-delete-all' => __('roles.contract_rights_options.contract_delete_all'), 
            'contract-costs' => __('roles.contract_rights_options.contract_costs'), 
            'contract-costs-all' => __('roles.contract_rights_options.contract_costs_all'), 
            'contract-reminders' => __('roles.contract_rights_options.contract_reminders'), 
            'contract-reminders-all' => __('roles.contract_rights_options.contract_reminders_all'), 
            'contract-email' => __('roles.contract_rights_options.contract_email'), 
            'contract-email-all' => __('roles.contract_rights_options.contract_email_all'), 
            'see-all-categories' => __('roles.contract_rights_options.contract_categories'), 
            // Users
            'user-title' => __('roles.user_rights_options.title'), 
            'user-create' => __('roles.user_rights_options.user_create'), 
            'user-edit' => __('roles.user_rights_options.user_edit'), 
            'user-delete' => __('roles.user_rights_options.user_delete'), 
            // Roles
            'role-title' => __('roles.role_rights_options.title'), 
            'role-create' => __('roles.role_rights_options.role_create'), 
            'role-edit' => __('roles.role_rights_options.role_edit'), 
            'role-list' => __('roles.role_rights_options.role_list'), 
            'role-delete' => __('roles.role_rights_options.role_delete'), 
        );
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();
        
        return view('roles.edit',compact('role','permission','rolePermissions','roleNames'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);
    
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();
    
        $role->syncPermissions($request->input('permission'));
    
        return redirect()->route('roles.index')
                        ->with('success',__('general.edit_success'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("roles")->where('id',$id)->delete();
        return redirect()->route('roles.index')
                        ->with('success',__('general.delete_success'));
    }
}