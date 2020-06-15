<?php

namespace Socialknowledge\VueEnv;

use Illuminate\Support\ServiceProvider;

class VueEnvServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/config/vue-env.php' => config_path('vue-env.php')]);

        $this->loadViewsFrom(__DIR__.'/views', 'vue-env');

        $this->publishes([__DIR__.'/views' => resource_path('/views/vue-env')]);
    }
}
