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
        $role = $user->rol;
        Log::info('Role del usuario actual: ' . $role);
    
        if ($role == 'Admin') {
            $users = User::all(); // El Admin ve todos los usuarios
        } else {
            $users = User::where('rol', $role)->get(); // Infra y Soporte ven solo usuarios con su mismo rol
        }
    
        Log::info('Usuarios obtenidos: ' . json_encode($users));
    
        return view('home', compact('users'));
    }
}
