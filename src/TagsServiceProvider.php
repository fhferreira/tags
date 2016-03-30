<?php

namespace Fhferreira\Tags;

use Illuminate\Support\ServiceProvider;

class TagsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'tags');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/fhferreira/tags'),
        ]);

        $this->publishes([
            __DIR__.'/migrations' => database_path('migrations/'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
     public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Fhferreira\Tags\Controllers\TagsController');
    }
}
