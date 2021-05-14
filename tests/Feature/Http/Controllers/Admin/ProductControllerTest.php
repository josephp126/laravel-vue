<?php

namespace Tests\Feature\Http\Controllers\Admin;

use App\Http\Controllers\Admin\ProductController;
use App\Http\Requests\Admin\ProductStoreRequest;
use App\Http\Requests\Admin\ProductUpdateRequest;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Admin\ProductController
 */
class ProductControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $products = Product::factory()->count(3)->create();

        $response = $this->get(route('product.index'));

        $response->assertOk();
        $response->assertViewIs('products.index');
        $response->assertViewHas('products');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('product.create'));

        $response->assertOk();
        $response->assertViewIs('product.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            ProductController::class,
            'store',
            ProductStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $description = $this->faker->text;
        $link = $this->faker->word;
        $code = $this->faker->word;
        $more_info = $this->faker->word;
        $subtitle = $this->faker->word;
        $title = $this->faker->sentence(4);

        $response = $this->post(route('product.store'), [
            'description' => $description,
            'link' => $link,
            'code' => $code,
            'more_info' => $more_info,
            'subtitle' => $subtitle,
            'title' => $title,
        ]);

        $products = Product::query()
            ->where('description', $description)
            ->where('link', $link)
            ->where('code', $code)
            ->where('more_info', $more_info)
            ->where('subtitle', $subtitle)
            ->where('title', $title)
            ->get();
        $this->assertCount(1, $products);
        $product = $products->first();

        $response->assertRedirect(route('product.index'));
        $response->assertSessionHas('product.id', $product->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $product = Product::factory()->create();

        $response = $this->get(route('product.show', $product));

        $response->assertOk();
        $response->assertViewIs('product.show');
        $response->assertViewHas('product');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $product = Product::factory()->create();

        $response = $this->get(route('product.edit', $product));

        $response->assertOk();
        $response->assertViewIs('product.edit');
        $response->assertViewHas('product');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            ProductController::class,
            'update',
            ProductUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $product = Product::factory()->create();
        $description = $this->faker->text;
        $link = $this->faker->word;
        $code = $this->faker->word;
        $more_info = $this->faker->word;
        $subtitle = $this->faker->word;
        $title = $this->faker->sentence(4);

        $response = $this->put(route('product.update', $product), [
            'description' => $description,
            'link' => $link,
            'code' => $code,
            'more_info' => $more_info,
            'subtitle' => $subtitle,
            'title' => $title,
        ]);

        $product->refresh();

        $response->assertRedirect(route('product.index'));
        $response->assertSessionHas('product.id', $product->id);

        $this->assertEquals($description, $product->description);
        $this->assertEquals($link, $product->link);
        $this->assertEquals($code, $product->code);
        $this->assertEquals($more_info, $product->more_info);
        $this->assertEquals($subtitle, $product->subtitle);
        $this->assertEquals($title, $product->title);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $product = Product::factory()->create();

        $response = $this->delete(route('product.destroy', $product));

        $response->assertRedirect(route('product.index'));

        $this->assertSoftDeleted($product);
    }
}
