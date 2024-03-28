<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->age >= 18) {
            return $next($request);
        } else {
            return redirect('no-autorizado');
        }   
    }
}

// SI es mayor de edad me permite entrar a pruebas http://127.0.0.1:8000/prueba?age=22
//de lo contrario me 