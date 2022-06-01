<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'specs1/updateaims',
        //

        'specs2/updateku',
        'specs2/updatepps',

        'specs2/updategts',

        'specs2/updateis'
    ];
}
