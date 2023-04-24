<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormularioNuevo;


class FormularioHabilitadoController extends Controller
{
    public function index()
    {
        $formularios = FormularioNuevo::all();
        return view('dashboard.formularios', compact('formularios'));
    }
    
    
    public function update(Request $request, $id)
    {
        $formulario = FormularioNuevo::findOrFail($id);
        $formulario->habilitado = !$formulario->habilitado;
        $formulario->save();

        return redirect()->route('dashboard.formularios')->with('success', 'Estado del formulario actualizado');
    }



}
