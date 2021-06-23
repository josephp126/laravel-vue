<?php

namespace Tests\Feature;

use App\Models\Address;
use App\Models\User;
use Database\Seeders\CountryAndStatesSeeder;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserFactory()
    {
        (new DatabaseSeeder())->call(CountryAndStatesSeeder::class);
        $user = User::factory()->hasAddress()->create();

        // Make sure we have 1 address and its linked to the user
        self::assertCount(1, Address::all());
        self::assertEquals(Address::first()->id, $user->address->id);
    }
}
