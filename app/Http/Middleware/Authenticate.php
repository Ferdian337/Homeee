<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            // if ($this->auth->guard('pengelola')->check() == false ){
            //     return route('masukpgl');
            // }else if ($this->auth->guard('penyewa')->check() == false){
            //     return route('masukpnw');
            // }
            
            //return route('login');
        }
    }
}
