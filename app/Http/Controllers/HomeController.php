<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use App\Models\Formulario;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
{
    $user = auth()->user();
    $role = $user->role->rol; // Cambio aquí
    Log::info('Role del usuario actual: ' . $role);

    if ($role == 'Admin') {
        $users = User::all(); // El Admin ve todos los usuarios
    } else {
        $users = User::whereHas('role', function ($query) use ($role) { // Cambio aquí
            $query->where('rol', $role);
        })->get();
    }

    Log::info('Usuarios obtenidos: ' . json_encode($users));

    return view('home', compact('users'));
}

}
