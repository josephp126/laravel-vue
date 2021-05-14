<?php

namespace Tests\Feature\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Admin\UserController
 */
class UserControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $users = User::factory()->count(3)->create();

        $response = $this->get(route('user.index'));

        $response->assertOk();
        $response->assertViewIs('admin.users.index');
        $response->assertViewHas('users');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('user.create'));

        $response->assertOk();
        $response->assertViewIs('user.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Admin\UserController::class,
            'store',
            \App\Http\Requests\Admin\UserStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $uuid = $this->faker->uuid;
        $first_name = $this->faker->firstName;
        $last_name = $this->faker->lastName;
        $username = $this->faker->userName;
        $password = $this->faker->password;
        $email = $this->faker->safeEmail;
        $date_joined = $this->faker->word;

        $response = $this->post(route('user.store'), [
            'uuid' => $uuid,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'date_joined' => $date_joined,
        ]);

        $users = User::query()
            ->where('uuid', $uuid)
            ->where('first_name', $first_name)
            ->where('last_name', $last_name)
            ->where('username', $username)
            ->where('password', $password)
            ->where('email', $email)
            ->where('date_joined', $date_joined)
            ->get();
        $this->assertCount(1, $users);
        $user = $users->first();

        $response->assertRedirect(route('user.index'));
        $response->assertSessionHas('user.id', $user->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $user = User::factory()->create();

        $response = $this->get(route('user.show', $user));

        $response->assertOk();
        $response->assertViewIs('admin.users.show');
        $response->assertViewHas('user');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $user = User::factory()->create();

        $response = $this->get(route('user.edit', $user));

        $response->assertOk();
        $response->assertViewIs('user.edit');
        $response->assertViewHas('user');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Admin\UserController::class,
            'update',
            \App\Http\Requests\Admin\UserUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $user = User::factory()->create();
        $uuid = $this->faker->uuid;
        $first_name = $this->faker->firstName;
        $last_name = $this->faker->lastName;
        $username = $this->faker->userName;
        $password = $this->faker->password;
        $email = $this->faker->safeEmail;
        $date_joined = $this->faker->word;

        $response = $this->put(route('user.update', $user), [
            'uuid' => $uuid,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'date_joined' => $date_joined,
        ]);

        $user->refresh();

        $response->assertRedirect(route('user.index'));
        $response->assertSessionHas('user.id', $user->id);

        $this->assertEquals($uuid, $user->uuid);
        $this->assertEquals($first_name, $user->first_name);
        $this->assertEquals($last_name, $user->last_name);
        $this->assertEquals($username, $user->username);
        $this->assertEquals($password, $user->password);
        $this->assertEquals($email, $user->email);
        $this->assertEquals($date_joined, $user->date_joined);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $user = User::factory()->create();

        $response = $this->delete(route('user.destroy', $user));

        $response->assertRedirect(route('user.index'));

        $this->assertSoftDeleted($user);
    }
}
