<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;
use App\Constants;


class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        $companies_total = Company::count();
        return view('companies.index', ['companies' => $companies, 'companies_total' => $companies_total ]);
    }

    public function create()
    {
        $regions = Constants::REGIONS;

        return view('companies.create', compact('regions'));
    }

    public function store(Request $request)
    {
        // print_r('expression');
        // exit();
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'postcode' => 'nullable|string|max:10',
            'vat_id' => 'required|string|max:50',
            // 'company_number' => 'nullable|string|max:50',
            // 'owner_id' => 'required|integer|exists:users,id',
            'status' => 'required|string|max:50',
            'region' => 'required|string|max:255',
        ]);

        $request['owner_id'] = $request['owner_id'] ?? 0;

        Company::create($request->all());

        return redirect()->route('companies.index')
            ->with('success', 'Company created successfully.');
    }

    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }   

    public function show($id)
    {
        $company = Company::find($id);
        $users = User::where('company_id', $id)
             // ->where('status', 1)
             ->get();

        $regions = Constants::REGIONS;
        // Check if the category exists
        if (!$company) {
            abort(404); 
        }

        // Pass the category data to the Blade view
        return view('companies.show', compact('company','regions','users'));
    }

    public function update(Request $request, Company $company, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'postcode' => 'nullable|string|max:10',
            'vat_id' => 'required|string|max:50',
            // 'company_number' => 'nullable|string|max:50',
            // 'owner_id' => 'required|integer|exists:users,id',
            'status' => 'required|string|max:50',
            'region' => 'required|string|max:255',
        ]);


        $company = Company::find($id);
        // $category->name = $request->input('name');
        // $category->name_sv = $request->input('name_sv');
        // $category->sort = $request->input('sort');
        // $category->color = $request->input('color');
        // if ($request->hasFile('icon')) {
        //     // Store the uploaded icon
        //     $iconPath = $request->file('icon')->store('category_icons', 'public');

        //     // Update the category with the icon file path
        //     // $category->update(['icon' => $iconPath]);
        //     $category->icon = $iconPath;
        // }

        // $category->save();

        $company->update($request->all());

        return redirect()->route('companies.show', ['company' => $id])->with('success', 'Company updated successfully!');
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()->route('companies.index')
            ->with('success', 'Company deleted successfully.');
    }
}