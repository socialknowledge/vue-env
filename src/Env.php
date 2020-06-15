<?php

namespace Socialknowledge\VueEnv;

class Env {

    public static function outputEnv()
    {
        return view('vue-env.vue-env', ['object_name' => config('vue-env.object_name'), 'data' => config('vue-env.data')])->render();
    }
}
