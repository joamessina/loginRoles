<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    // public function __construct(){
    //     $this->middleware('admin')->only(['create', 'store']);
    // }


    public function index(){
        $user = auth()->user();
        $role = $user->role->rol; // Cambio aquí
    
        if ($role == 'Admin') {
            $users = User::all(); // El Admin ve todos los usuarios
        } else {
            $users = User::whereHas('role', function ($query) use ($role) { // Cambio aquí
                $query->where('rol', $role);
            })->get();
        }
    
        return view('users.index', compact('users'));
    }

    public function create() {
        $roles = Role::where('rol', '!=', 'Admin')->get();
        return view('users.create', compact('roles'));
    }
    
    public function store(Request $request){
        // Validación de datos
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4'],
            'rol' => ['required', 'integer', 'exists:roles,id'], // Aquí se añade la regla 'exists'
        ]);
    
        if ($validator->fails()) {
            return redirect('users.create')
                        ->withErrors($validator)
                        ->withInput();
        }
    
        // Crear una nueva instancia del modelo User
        $user = new User();
    
        // Asignar los datos del formulario a los atributos del modelo
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
    
        // Buscar el rol y asignarlo al usuario
        $rol = Role::find($request->input('rol')); // Cambia 'where' por 'find'
        $user->role_id = $rol->id;
        $user->rol=$rol->rol;
    
        $user->save();
    
        // Redirigir al usuario a la vista de éxito o al listado de usuarios
        return redirect()->route('formularios.index')->with('success', 'Usuario creado exitosamente.');
    }
    
    

    public function edit($id){
        $user = User::find($id);
        $roles = ['Soporte', 'Infra']; // Agrega los roles que necesites
        return view('users.edit', compact('user', 'roles'));
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('home')->with('success', 'Usuario eliminado exitosamente.');
    }

    public function update(Request $request, $id){
        // Validación de datos
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'rol' => 'required|string|max:255|exists:roles,rol',
        ]);
    
        // Buscar el usuario
        $user = User::find($id);
    
        // Actualizar los datos del usuario
        $user->name = $request->input('name');
        $user->email = $request->input('email');
    
        // Buscar el rol y asignarlo al usuario
        $rol = Role::where('rol', $request->input('rol'))->first();
        $user->role_id = $rol->id;
    
        $user->save();
    
        // Redirigir al usuario a la página de inicio con un mensaje de éxito
        return redirect()->route('home')->with('success', 'Usuario actualizado exitosamente.');
    }
}
