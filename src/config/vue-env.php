<?php

return [

    'object_name' => env('VUE_ENV_OBJ', 'envObj'),

    'data' => [
        'packageName' => env('VUE_MY_PACKAGE_NAME', 'Some Package Name'),
        'anArray' => ['foo' => 'bar']
    ]

];
