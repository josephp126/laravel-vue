<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\News;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\NewsController
 */
class NewsControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $news = News::factory()->count(3)->create();

        $response = $this->get(route('news.index'));

        $response->assertOk();
        $response->assertViewIs('admin.news.index');
        $response->assertViewHas('news');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $news = News::factory()->create();

        $response = $this->get(route('news.show', $news));

        $response->assertOk();
        $response->assertViewIs('news.show');
        $response->assertViewHas('news');
    }
}
