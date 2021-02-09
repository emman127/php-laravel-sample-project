<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['companies'] = Company::simplePaginate(3);

        return view('company.index', $data);
    }

    public function create()
    {
        return view('company.create');
    }
    
    public function store(Request $request, Company $company)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        
       $company->create($data);

       return Redirect('/company/index');
    }

    public function edit(Company $company)  
    {
        // dd($company);
        return view('company.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $company->update($data);

        return Redirect('/company/index');
    }

    public function show(Company $company)
    {
        return view('company.show', compact('company'));
    }

    public function destroy(Company $company)
    {
        $company->delete($company);

        return Redirect('/company/index');
    }

}
