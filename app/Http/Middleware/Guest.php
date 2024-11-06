<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class Guest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Just create randomized User to test the Reverb Bug
        Auth::login(User::create([
            'name' => 'Bug Report Test User',
            'email' => Str::random(10) . '@example.com',
            'password' => Hash::make(Str::random(10)),
        ]));

        return $next($request);
    }
}
