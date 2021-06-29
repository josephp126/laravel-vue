<?php

namespace App\Observers;

use App\Models\Contact;
use App\Models\User;
use App\Notifications\NewContact;
use Illuminate\Support\Facades\Notification;

class ContactObserver
{
    /**
     * Handle the contact "created" event.
     *
     * @param Contact $contact
     */
    public function created(Contact $contact)
    {
        // Get all the contacts
        $users = User::where('is_contact', true)->get();

        Notification::send($users, new NewContact($contact));
    }
}
