<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Literature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class LiteratureTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Literature::class);

        $component->assertStatus(200);
    }
}
