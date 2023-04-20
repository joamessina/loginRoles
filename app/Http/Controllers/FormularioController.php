<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('formularios.index');
    }

    /**
     * Show the form for creating a new resource.
     */

     public function infra()
    {
        return view('formularios.infra');
    }

    public function soporte()
    {
        return view('formularios.soporte');
    }
    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeInfra(Request $request)
{
    // Código para almacenar la información del formulario Infra
    $data = $request->validate([
        'type' => 'required|string',
        'data1' => 'sometimes|required|string',
    ]);

    $formulario = new Formulario();
    $formulario->user_id = auth()->user()->id;
    $formulario->type = $data['type'];
    $formulario->data = $data['data1'];
    $formulario->save();

    return redirect()->route('dashboard')->with('status', 'Formulario Infra enviado exitosamente.');
}

public function storeSoporte(Request $request)
{
    // Código para almacenar la información del formulario Soporte
    $data = $request->validate([
        'type' => 'required|string',
        'data2' => 'sometimes|required|string',
    ]);

    $formulario = new Formulario();
    $formulario->user_id = auth()->user()->id;
    $formulario->type = $data['type'];
    $formulario->data = $data['data2'];
    $formulario->save();

    return redirect()->route('dashboard')->with('status', 'Formulario Soporte enviado exitosamente.');
}

public function storeAdmin(Request $request)
{
    // Código para almacenar la información del formulario Admin
    $data = $request->validate([
        'type' => 'required|string',
        'data3' => 'sometimes|required|string',
    ]);

    $formulario = new Formulario();
    $formulario->user_id = auth()->user()->id;
    $formulario->type = $data['type'];
    $formulario->data = $data['data3'];
    $formulario->save();

    return redirect()->route('dashboard')->with('status', 'Formulario Admin enviado exitosamente.');
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
        //
    }
}
