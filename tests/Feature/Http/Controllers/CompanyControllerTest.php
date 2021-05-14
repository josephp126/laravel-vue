<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Company;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CompanyController
 */
class CompanyControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $companies = Company::factory()->count(3)->create();

        $response = $this->get(route('company.index'));

        $response->assertOk();
        $response->assertViewIs('company.index');
        $response->assertViewHas('companies');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $company = Company::factory()->create();

        $response = $this->get(route('company.show', $company));

        $response->assertOk();
        $response->assertViewIs('company.show');
        $response->assertViewHas('company');
    }
}
