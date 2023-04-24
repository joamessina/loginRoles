<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormularioNuevo;

class FormularioNuevoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formularios = FormularioNuevo::where('habilitado', 1)->get();
        return view('formularios.index', compact('formularios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formularios.formulario_nuevo');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de datos (ajusta los campos según necesites)
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        // Crear una nueva instancia del modelo Formulario
        $formulario = new FormularioNuevo();

        // Asignar los datos del formulario a los atributos del modelo
        
        $formulario->nombre = $request->input('nombre');
        $formulario->nombre_formulario = $request->input('nombre');
        $formulario->save();
        // Redirigir al usuario a la vista de éxito o al listado de formularios
        return redirect()->route('formularios.index')->with('success', 'Formulario creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $formulario = FormularioNuevo::findOrFail($id);
        $formulario->delete();

    return redirect()->route('formularios.index')->with('success', 'Formulario eliminado con éxito');
    }
}
