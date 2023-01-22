<?php

namespace Dcblogdev\LaravelBladeComponents\Tests;

use Dcblogdev\LaravelBladeComponents\LaravelBladeComponentsServiceProvider;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    use InteractsWithViews;

    protected function getPackageProviders($app): array
    {
        return [
            LaravelBladeComponentsServiceProvider::class,
        ];
    }
}
