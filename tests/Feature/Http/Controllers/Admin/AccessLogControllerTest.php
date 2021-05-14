<?php

namespace Tests\Feature\Http\Controllers\Admin;

use App\Models\AccessLog;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Admin\AccessLogController
 */
class AccessLogControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $accessLogs = AccessLog::factory()->count(3)->create();

        $response = $this->get(route('access-log.index'));

        $response->assertOk();
        $response->assertViewIs('access_logs.index');
        $response->assertViewHas('accessLogs');
    }
}
