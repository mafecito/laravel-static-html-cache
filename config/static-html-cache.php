<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Enable static proxy
    |--------------------------------------------------------------------------
    |
    | If `true` the package will store the responses
    | If `false` the package will do nothing
    |
    | If `debug` the package will store responses only when `app.debug` is
    | false
    */

    'enabled' => true,

    /*
    |--------------------------------------------------------------------------
    | Cache path prefix
    |--------------------------------------------------------------------------
    |
    | The path prefix relative to `public_path`. This is where the static files
    | will be stored. Changing this will also require to update you `.htaccess`
    */

    'cache_path_prefix' => 'cache/html',
];
