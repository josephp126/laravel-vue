<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Image;
use App\Models\Resource;
use App\Models\Slide;
use App\Observers\CategoryObserver;
use App\Observers\ContactObserver;
use App\Observers\ImageObserver;
use App\Observers\ResourceObserver;
use App\Observers\SlideObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Contact::observe(ContactObserver::class);
        Category::observe(CategoryObserver::class);
        Slide::observe(SlideObserver::class);
        Image::observe(ImageObserver::class);
        Resource::observe(ResourceObserver::class);
    }
}
