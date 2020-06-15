Install package:

    composer require socialknowledge/vue-env 

php artisan vendor:publish --provider="Socialknowledge\VueEnv\VueEnvServiceProvider"

The config file will contain the array that you can define to make variables available.

If you want to edit the layout, it is published in the resources/views/vue-env/vue-env.blade.php file.

You can echo them out like so:

    Env::outputEnv()
