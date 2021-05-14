<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;

/**
 * @see \App\Http\Controllers\AboutController
 */
class AboutControllerTest extends TestCase
{
    /**
     * @test
     */
    public function index_displays_view()
    {
        $response = $this->get(route('about.index'));

        $response->assertOk();
        $response->assertViewIs('about.index');
    }
}
