<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use App\Http\Middleware\Authenticate; // Tambahkan ini jika belum ada

class Kernel extends HttpKernel
{
    protected $routeMiddleware = [
        'auth' => Authenticate::class, // Middleware auth
        'is_admin' => \App\Http\Middleware\IsAdmin::class,
    ];
}
