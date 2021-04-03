<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\HomeNewsList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class HomeNewsListTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(HomeNewsList::class);

        $component->assertStatus(200);
    }
}
