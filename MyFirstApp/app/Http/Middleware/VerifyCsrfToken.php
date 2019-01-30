<?php

namespace MyFirstApp\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //esto para no exigir token en esas urls, solo en el login y el register los demas deben estar protegidos
        'http://192.168.0.2/MyFirstApp/public/usuarios',
        'http://localhost/MyFirstApp/public/trainers',
    ];
}
