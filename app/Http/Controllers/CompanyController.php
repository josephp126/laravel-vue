<?php

namespace App\Http\Controllers;

use App\Company;
use App\company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $companies = Company::all();

        return view('company.index', compact('companies'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\company $company
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Company $company)
    {
        return view('company.show', compact('company'));
    }
}
