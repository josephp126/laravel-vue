<?php

namespace Tests\Feature\Http\Controllers\Api;

use App\Http\Controllers\Api\CategoryController;
use App\Http\Requests\Api\CategoryStoreRequest;
use App\Http\Requests\Api\CategoryUpdateRequest;
use App\Models\Category;
use App\Models\Sort;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Api\CategoryController
 */
class CategoryControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_behaves_as_expected()
    {
        $categories = Category::factory()->count(3)->create();

        $response = $this->get(route('category.index'));

        $response->assertOk();
        $response->assertJsonStructure([]);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            CategoryController::class,
            'store',
            CategoryStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves()
    {
        $name = $this->faker->name;
        $parent_id = $this->faker->numberBetween(-100000, 100000);
        $root_id = $this->faker->numberBetween(-100000, 100000);
        $order = $this->faker->numberBetween(-10000, 10000);

        $response = $this->post(route('category.store'), [
            'name' => $name,
            'parent_id' => $parent_id,
            'root_id' => $root_id,
            'order' => $order,
        ]);

        $categories = Category::query()
            ->where('name', $name)
            ->where('parent_id', $parent_id)
            ->where('root_id', $root_id)
            ->where('order', $order)
            ->get();
        $this->assertCount(1, $categories);
        $category = $categories->first();

        $response->assertCreated();
        $response->assertJsonStructure([]);
    }


    /**
     * @test
     */
    public function show_behaves_as_expected()
    {
        $category = Category::factory()->create();

        $response = $this->get(route('category.show', $category));

        $response->assertOk();
        $response->assertJsonStructure([]);
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            CategoryController::class,
            'update',
            CategoryUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_behaves_as_expected()
    {
        $category = Category::factory()->create();
        $name = $this->faker->name;
        $parent_id = $this->faker->numberBetween(-100000, 100000);
        $root_id = $this->faker->numberBetween(-100000, 100000);
        $order = $this->faker->numberBetween(-10000, 10000);

        $response = $this->put(route('category.update', $category), [
            'name' => $name,
            'parent_id' => $parent_id,
            'root_id' => $root_id,
            'order' => $order,
        ]);

        $category->refresh();

        $response->assertOk();
        $response->assertJsonStructure([]);

        $this->assertEquals($name, $category->name);
        $this->assertEquals($parent_id, $category->parent_id);
        $this->assertEquals($root_id, $category->root_id);
        $this->assertEquals($order, $category->order);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_responds_with()
    {
        $category = Category::factory()->create();

        $response = $this->delete(route('category.destroy', $category));

        $response->assertNoContent();

        $this->assertSoftDeleted($category);
    }


    /**
     * @test
     */
    public function saveSort_behaves_as_expected()
    {
        $response = $this->get(route('category.saveSort'));

        $category->refresh();
    }
}
