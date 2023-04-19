<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $role = $user->role;

        if ($role == 'Admin') {
            $users = User::all(); // El Admin ve todos los usuarios
        } else {
            $users = User::where('rol', $role)->get(); // Infra y Soporte ven solo usuarios con su mismo rol
        }

        return view('users.index', compact('users'));
    }
}
