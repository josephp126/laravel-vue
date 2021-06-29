<?php

namespace App\Notifications;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewContact extends Notification
{
    private Contact $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via(User $notifiable)
    {
        return $notifiable->notification_preferences;
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return MailMessage
     */
    public function toMail(User $notifiable)
    {
        $contact = $this->contact;

        return (new MailMessage)
            ->replyTo($contact->email, $contact->name)
            ->line('Someone has a new question')
            ->line("From: {$contact->name}.")
            ->line("Email: {$contact->email}.")
            ->line("Message:")
            ->line('')
            ->line($contact->message);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        $contact = $this->contact;

        return [
            'email'   => $contact->email,
            'name'    => $contact->name,
            'message' => $contact->message,
        ];
    }
}
