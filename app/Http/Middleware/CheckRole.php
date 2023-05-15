<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
{
    $user = auth()->user();

    // Comprueba si el rol del usuario está en el array de roles permitidos
    if (in_array($user->rol, $roles)) {
        return $next($request);
    }

    return redirect('home');
}

}

