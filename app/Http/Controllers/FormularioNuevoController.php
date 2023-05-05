<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormularioNuevo;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;


class FormularioNuevoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    //dd('Index function');
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
        //logica para qeu lo que entre de nombre sea todo en minuscula
        $nombre = $request->input('nombre');
        $nombreminusculas = strtolower($nombre); // Convertir el nombre a minúsculas
        $nombre_formulario = str_replace(' ', '_', $nombreminusculas); // Reemplazar espacios por guiones bajos
    
        $formulario->nombre =$nombre;
        $formulario->nombre_formulario = $nombre_formulario;
        $formulario->save();
        // Redirigir al usuario a la vista de éxito o al listado de formularios
        return redirect()->route('formularios.index')->with('success', 'Formulario creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */

    public function show($nombre_formulario)
    {
        //Log::info('Show function', ['nombre_formulario' => $nombre_formulario]);
    
        $ruta_base = resource_path('views');
        $archivos_blade = glob($ruta_base . '/**/*_form.blade.php', GLOB_BRACE);
    
        $ruta_vista = null;
    
        foreach ($archivos_blade as $archivo) {
            $archivo = str_replace($ruta_base . '/', '', $archivo);
            $archivo = str_replace('.blade.php', '', $archivo);
            $archivo = str_replace('/', '.', $archivo);
    
            if (strpos($archivo, $nombre_formulario) !== false) {
                $ruta_vista = $archivo;
                break;
            }
        }
    
        if ($ruta_vista === null) {
            abort(404, "Formulario no encontrado");
        }
    
        return view($ruta_vista);
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
