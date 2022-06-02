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
        'specs1/updatedaims',
        //

        'specs2/updatedku',

        'specs2/updatedpps',

        'specs2/updatedgts',

        'specs2/updatedis',
        
        'specs5/updatedspecs5',

        'specs4/savemethods'
    ];
}
