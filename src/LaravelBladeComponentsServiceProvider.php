<?php

namespace Dcblogdev\LaravelBladeComponents;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class LaravelBladeComponentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/components', 'laravelbladecomponents');

        Blade::component('laravelbladecomponents::form.open', 'form.open');
        Blade::component('laravelbladecomponents::form.button', 'form.button');
        Blade::component('laravelbladecomponents::form.input', 'form.input');
        Blade::component('laravelbladecomponents::form.textarea', 'form.textarea');
        Blade::component('laravelbladecomponents::form.checkbox', 'form.checkbox');
        Blade::component('laravelbladecomponents::form.radio', 'form.radio');
        Blade::component('laravelbladecomponents::form.select', 'form.select');
        Blade::component('laravelbladecomponents::form.selectoption', 'form.selectoption');
    }
}
