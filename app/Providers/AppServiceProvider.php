<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    /**
    * Register any application services.
    *
    * @return void
    */

    public function register() {
        //
    }

    /**
    * Bootstrap any application services.
    *
    * @return void
    */

    public function boot() {
        Paginator::useBootstrap();

        Form::macro(
            'editor',

            function ( $name, $value, $attributes ) {
                $label = $attributes['label'] ?? false;
                $value = $this->getValueAttribute( 'content', $value );

                return view( 'components.form.editor', compact( 'value', 'name', 'label' ) );
            }
        );

        Form::macro(
            'basicInput',

            function ( $name, $value, $attributes ) {
                $label    = $attributes['label'] ?? false;
                $type     = $attributes['type'] ?? 'text';
                $required = $attributes['required'] ?? false;
                $value    = $this->getValueAttribute( 'content', $value );

                return view( 'components.form.basic-input', compact( 'value', 'name', 'label', 'required', 'type' ) );
            }
        );

        Form::macro(
            'basicCheckbox',

            function ( $name, $value, $attributes ) {
                $label    = $attributes['label'] ?? false;
                $value    = $this->getValueAttribute( 'content', $value ) ?? false;

                return view( 'components.form.basic-checkbox', compact( 'value', 'name', 'label' ) );
            }
        );
    }
}
