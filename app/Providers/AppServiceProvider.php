<?php

namespace App\Providers;

use Form;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        Form::macro(
            'editor',
            function ($name, $value, $attributes) {
                $label = $attributes['label'] ?? false;
                $value = $this->getValueAttribute('content', $value);

                return view('components.form.editor', compact('value', 'name', 'label'));
            }
        );

        Form::macro(
            'basicInput',
            function ($name, $value, $attributes) {
                $label    = $attributes['label'] ?? false;
                $type     = $attributes['type'] ?? 'text';
                $required = $attributes['required'] ?? false;
                $value    = $this->getValueAttribute('content', $value);

                if ($type == 'password') {
                    return view(
                        'components.form.basic-input-password',
                        compact('value', 'name', 'label', 'required', 'type')
                    );
                }

                return view('components.form.basic-input', compact('value', 'name', 'label', 'required', 'type'));
            }
        );
    }
}
