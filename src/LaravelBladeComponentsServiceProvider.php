<?php

namespace Dcblogdev\LaravelBladeComponents;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class LaravelBladeComponentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/components', 'laravelbladecomponents');

        Blade::component('laravelbladecomponents::form', 'form');
        Blade::component('laravelbladecomponents::form-button', 'form-button');
        Blade::component('laravelbladecomponents::form-input', 'form-input');
        Blade::component('laravelbladecomponents::form-textarea', 'form-textarea');
    }
}
