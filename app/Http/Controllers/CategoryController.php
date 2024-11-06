<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use DB;

class CategoryController extends Controller
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
    
    public function index(Request $request)
    {
        $categories = Category::paginate(10);
        $categories_total = Category::count();
        return view('categories.index', ['categories' => $categories, 'categories_total' => $categories_total ]);
    }
    
    public function create()
    {
        //  $roleNames = array(
            
        // );

        // $permission = Permission::get();
        // return view('roles.create',compact('permission','roleNames'));
        return view('categories.create');
    }
    
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string',
            'name_sv' => 'required|string',
            'sort' => 'required|integer',
            'color' => 'required|string',
            'icon' => 'nullable|file|mimes:png,svg|max:2048',
            'icon_color' => 'nullable|file|mimes:png,svg|max:2048',
            'subcategories_name[]' => 'nullable|string',
            'subcategories_name_sv[]' => 'nullable|string',
        ]);

        // Create a new category
        $category = new Category();
        $category->name = $request->input('name');
        $category->name_sv = $request->input('name_sv');
        $category->sort = $request->input('sort');
        $category->color = $request->input('color');

        if ($request->hasFile('icon')) {
            // Get the uploaded file
            $uploadedFile = $request->file('icon');

            // Store the uploaded file in the 'public' disk
            $path = $uploadedFile->store('category_icons', 'public');

            // Save the file path to the database
            $category->icon = $path;
        }

        if ($request->hasFile('icon_color')) {
            // Get the uploaded file
            $uploadedFile = $request->file('icon_color');

            // Store the uploaded file in the 'public' disk
            $path = $uploadedFile->store('category_icons', 'public');

            // Save the file path to the database
            $category->icon_color = $path;
        }

        

        $category->save();

        // Save subcategories if provided
        if ($request->has('subcategories_name') && $request->has('subcategories_name_sv')) {
            foreach ($request->subcategories_name as $key => $value) {
                $subcategory = new Subcategory();
                $subcategory->name = $request->subcategories_name[$key];
                $subcategory->name_sv = $request->subcategories_name_sv[$key];
                // Additional fields for subcategory can be handled similarly
                $category->subcategories()->save($subcategory);
            }
        }

        // Redirect to a success page or route
        return redirect()->route('categories.index')->with('success', 'Folder created successfully!');
    }

    public function show($id)
    {
        $category = Category::find($id);
        $subcategories = $category->subcategories;

        // Check if the category exists
        if (!$category) {
            abort(404); // Or handle the case where the category does not exist
        }

        // Pass the category data to the Blade view
        return view('categories.show', ['category' => $category, 'subcategories' => $subcategories]);
    }
    
    public function edit($id)
    {
        // $roleNames = array(
        //     // Contracts
        // );
        // $role = Role::find($id);
        // $permission = Permission::get();
        // $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
        //     ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
        //     ->all();
        
        // return view('roles.edit',compact('role','permission','rolePermissions','roleNames'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'name_sv' => 'required|string',
            'sort' => 'required|integer',
            'color' => 'required|string',
            'icon' => 'nullable|file|mimes:png,svg|max:2048',
            'icon_color' => 'nullable|file|mimes:png,svg|max:2048',
            'subcategories_name[]' => 'nullable|string',
            'subcategories_name_sv[]' => 'nullable|string',
        ]);
        // Create a new category
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->name_sv = $request->input('name_sv');
        $category->sort = $request->input('sort');
        $category->color = $request->input('color');
        if ($request->hasFile('icon')) {
            // Store the uploaded icon
            $iconPath = $request->file('icon')->store('category_icons', 'public');

            // Update the category with the icon file path
            // $category->update(['icon' => $iconPath]);
            $category->icon = $iconPath;
        }

        if ($request->hasFile('icon_color')) {
            // Store the uploaded icon_color
            $iconPath = $request->file('icon_color')->store('category_icons', 'public');

            // Update the category with the icon file path
            // $category->update(['icon' => $iconPath]);
            $category->icon_color = $iconPath;
        }

        $category->save();

        // Save subcategories if provided

        if ($request->has('subcategories_name') && $request->has('subcategories_name_sv')) {
            $subcategories_found = Subcategory::where('category_id', $category->id)->get();

            // Delete all found subcategories
            $deleted = $subcategories_found->each->delete();

            foreach ($request->subcategories_name as $key => $value) {
                $subcategory = new Subcategory();
                $subcategory->name = $request->subcategories_name[$key];
                $subcategory->name_sv = $request->subcategories_name_sv[$key];
                // Additional fields for subcategory can be handled similarly
                $category->subcategories()->save($subcategory);
            }
        }

        // Redirect to a success page or route
        return redirect()->route('categories.show', ['category' => $id])->with('success', 'Folder updated successfully!');
    }

    public function destroy($id)
    {
        // DB::table("roles")->where('id',$id)->delete();
        // return redirect()->route('roles.index')
        //                 ->with('success',__('general.delete_success'));
    }
}
