<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class VendorAuthenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('vendorLogin');
        }
    }

    protected function authenticate($request, array $guards)
    {        
        if ($this->auth->guard('vendor')->check()) {
            return $this->auth->shouldUse('vendor');
        }

        $this->unauthenticated($request, ['vendor']);
    }
}