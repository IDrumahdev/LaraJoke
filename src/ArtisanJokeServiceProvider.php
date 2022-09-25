<?php

namespace Ibnudirsan\Joke;

use Illuminate\Support\ServiceProvider;

class ArtisanJokeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('ibnudirsan.joke.commands', function($app) {
            return $app['Ibnudirsan\Joke\Commands\JokeCommand'];
        });
        $this->commands('ibnudirsan.joke.commands');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
