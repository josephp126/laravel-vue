<?php

namespace Tests\Feature\Http\Controllers\Admin;

use App\Models\IsHomepage;
use App\Models\News;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Admin\NewsController
 */
class NewsControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_behaves_as_expected()
    {
        $response = $this->get(route('news.index'));

        $response->assertOk();
        $response->assertJsonStructure([]);
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('news.create'));

        $response->assertOk();
        $response->assertViewIs('news.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Admin\NewsController::class,
            'store',
            \App\Http\Requests\Admin\NewsStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $uuid = $this->faker->uuid;
        $title = $this->faker->sentence(4);
        $summary = $this->faker->text;
        $content = $this->faker->paragraphs(3, true);

        $response = $this->post(route('news.store'), [
            'uuid' => $uuid,
            'title' => $title,
            'summary' => $summary,
            'content' => $content,
        ]);

        $news = News::query()
            ->where('uuid', $uuid)
            ->where('title', $title)
            ->where('summary', $summary)
            ->where('content', $content)
            ->get();
        $this->assertCount(1, $news);
        $news = $news->first();

        $response->assertRedirect(route('news.index'));
        $response->assertSessionHas('news.id', $news->id);
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


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $news = News::factory()->create();

        $response = $this->get(route('news.edit', $news));

        $response->assertOk();
        $response->assertViewIs('news.edit');
        $response->assertViewHas('news');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Admin\NewsController::class,
            'update',
            \App\Http\Requests\Admin\NewsUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $news = News::factory()->create();
        $uuid = $this->faker->uuid;
        $title = $this->faker->sentence(4);
        $summary = $this->faker->text;
        $content = $this->faker->paragraphs(3, true);

        $response = $this->put(route('news.update', $news), [
            'uuid' => $uuid,
            'title' => $title,
            'summary' => $summary,
            'content' => $content,
        ]);

        $news->refresh();

        $response->assertRedirect(route('news.index'));
        $response->assertSessionHas('news.id', $news->id);

        $this->assertEquals($uuid, $news->uuid);
        $this->assertEquals($title, $news->title);
        $this->assertEquals($summary, $news->summary);
        $this->assertEquals($content, $news->content);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $news = News::factory()->create();

        $response = $this->delete(route('news.destroy', $news));

        $response->assertRedirect(route('news.index'));

        $this->assertSoftDeleted($news);
    }


    /**
     * @test
     */
    public function star_redirects()
    {
        $response = $this->get(route('news.star'));

        $news->refresh();

        $response->assertRedirect(route('admin.news.index'));
        $response->assertSessionHas('admin.news.updated', $admin->news->updated);
    }
}
