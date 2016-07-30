<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/register/manufacturer',
        '/sample',
        '/find/manufacturer',
        '/edit/manufacturer',
        '/find/retailer',
        '/edit/retailer',
        '/find/procurement',
        '/find/sale',
        '/edit/procurement',
        '/find/card',
        '/edit/card',
    ];
}
