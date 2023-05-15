<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FormularioNuevo;

class DashboardController extends Controller
{
    public function index()
    {
        $role = auth()->user()->role->rol;
        return view('dashboard', compact('role'));
    }

    public function formulariosUsuarios()
    {
        $users = User::all();
        $formularios = FormularioNuevo::all();
    
        return view('dashboard.formularios_usuarios', [
            'users' => $users,
            'formularios' => $formularios,
        ]);
    }
}
