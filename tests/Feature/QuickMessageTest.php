<?php

namespace Tests\Feature;

use App\Models\Contact;
use App\Models\User;
use App\Notifications\NewContact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Notification;
use Tests\TestCase;

class QuickMessageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @group contact
     */
    public function testContactUs()
    {
        $user = User::factory(['password' => Hash::make('password'), 'is_contact' => true])->create();
        self::assertTrue($user->is_contact);

        auth()->loginUsingId($user->id);

        Notification::fake();

        $message = [
            'email'   => 'test@email.com',
            'name'    => 'test test1',
            'message' => 'this is a test message',
        ];

        Notification::assertNothingSent();

        $response = $this->post(route('contact.store'), $message);
        $response->assertRedirect('/');

        // Make sure the new contact entry is stored in the database
        self::assertCount(1, Contact::all());

        // Make sure an email has been sent to the new contact notification class
        Notification::assertSentTo(
            [$user],
            NewContact::class
        );
    }
}
