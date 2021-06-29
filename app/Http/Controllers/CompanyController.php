<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CompanyController extends Controller
{
    /**
     * @param Request $request
     * @return Application|Factory|View|Response
     */
    public function index(Request $request)
    {
        $companies = Company::all();

        return view('company.index', compact('companies'));
    }

    /**
     * @param Request      $request
     * @param \App\company $company
     * @return Application|Factory|View|Response
     */
    public function show(Request $request, Company $company)
    {
        return view('company.show', compact('company'));
    }
}
