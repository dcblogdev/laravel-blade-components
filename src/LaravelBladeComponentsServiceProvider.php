<?php

namespace Dcblogdev\LaravelBladeComponents;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class LaravelBladeComponentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/components', 'laravelbladecomponents');

        Blade::component('laravelbladecomponents::tab', 'tab');
        Blade::component('laravelbladecomponents::modal', 'modal');
        Blade::component('laravelbladecomponents::form', 'form');
        Blade::component('laravelbladecomponents::dropdown-link', 'dropdown-link');
        Blade::component('laravelbladecomponents::dropdown', 'dropdown');
        Blade::component('laravelbladecomponents::button', 'button');
        Blade::component('laravelbladecomponents::2col', '2col');

        Blade::component('laravelbladecomponents::form.input', 'form.input');
        Blade::component('laravelbladecomponents::form.textarea', 'form.textarea');
        Blade::component('laravelbladecomponents::form.checkbox', 'form.checkbox');
        Blade::component('laravelbladecomponents::form.radio', 'form.radio');
        Blade::component('laravelbladecomponents::form.select', 'form.select');
        Blade::component('laravelbladecomponents::form.selectoption', 'form.selectoption');

        Blade::component('laravelbladecomponents::tabs.div', 'tabs.div');
        Blade::component('laravelbladecomponents::tabs.header', 'tabs.header');
        Blade::component('laravelbladecomponents::tabs.link', 'tabs.link');
    }
}
