<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cronos;
use App\Models\Clima;
use App\Models\Formulario;
use App\Models\FormularioPrensa;
use App\Models\FormularioPronos;
use App\Models\AvisoPrensa;

class FormularioController extends Controller
{

    public function index(){
        return view('formularios.index');
    }    
    public function storeInfra(Request $request){
        // Código para almacenar la información del formulario Infra
        $data = $request->validate([
            'type' => 'required|string',
            'data1' => 'sometimes|required|string',
        ]);

        $formulario = new Clima();
        $formulario->user_id = auth()->user()->id;
        $formulario->type = $data['type'];
        $formulario->data = $data['data1'];
        $formulario->save();
        
        return redirect()->route('dashboard')->with('status', 'Formulario Infra enviado exitosamente.');
    }
    
    public function storeCronos(Request $request){
        // Código para almacenar la información del formulario Admin
        $data = $request->validate([
            'type' => 'required|string',
            'data3' => 'sometimes|required|string',
        ]);
        
        $formulario = new Cronos();
        $formulario->user_id = auth()->user()->id;
        $formulario->type = $data['type'];
        $formulario->data = $data['data3'];
        $formulario->save();
        
        return redirect()->route('dashboard')->with('status', 'Formulario Cronos enviado exitosamente.');
    }
    
    public function storeSoporte(Request $request){
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
    
    public function prensaForm(){
        return view('formulariosPrensa.prensa_form');
    }

    public function storePrensa(Request $request){
        // Código para almacenar la información del formulario Soporte
        $data = $request->validate([
            'type' => 'required|string',
            'comunicadoDia' => 'required|string',
            'comunicadoNro' => 'required|string',
            'titulo' => 'required|string',
            'contenido' => 'required|string',
        ]);
        
        $formulario = new FormularioPrensa();
        $formulario->user_id = auth()->user()->id;
        $formulario->comunicadoDia = $data['comunicadoDia'];
        $formulario->comunicadoNro = $data['comunicadoNro'];
        $formulario->titulo = $data['titulo'];
        $formulario->contenido = $data['contenido'];
        $formulario->type = $data['type'];
        $formulario->save();
        
        // Guardar datos en la tabla avisos de la base de datos avisos_prensa
        $aviso = new AvisoPrensa();
        $aviso->comunicadoDia = $data['comunicadoDia'];
        $aviso->comunicadoNro = $data['comunicadoNro'];
        $aviso->titulo = $data['titulo'];
        $aviso->contenido = $data['contenido'];
        $aviso->save();

        return redirect()->route('formularios.index')->with('status', 'Formulario Soporte enviado exitosamente.');
    }

    public function pronosForm(){
        return view('formularioPronos.pronos_form');
    }

    public function storePronos(Request $request){
        // Código para almacenar la información del formulario Soporte
        $data = $request->validate([

            'type' => 'required|string',
            'tipo' => 'required|string',
            
            'base' => 'required|string',
            'base_calidad' => 'required|string',
            'intermedia' => 'required|string',
            'intermedia_calidad' => 'required|string',
            'cumbre' => 'required|string',
            'cumbre_calidad' => 'required|string',
            'icono10' => 'required|string',
            'icono11' => 'required|string',
            'tminima_hoy' => 'required|string',
            'tmaxima_hoy' => 'required|string',
            'textarea10' => 'required|string',
            'textarea11' => 'required|string',
            
            'icono12' => 'required|string',
            'icono13' => 'required|string',
            'tminima_sig' => 'required|string',
            'tmaxima_sig' => 'required|string',
            'textarea12' => 'required|string',
            'textarea13' => 'required|string',
            
            'icono14' => 'required|string',
            'icono15' => 'required|string',
            'tminima_sig3' => 'required|string',
            'tmaxima_sig3' => 'required|string',
            'textarea14' => 'required|string',
            'textarea15' => 'required|string',
            'icono16' => 'required|string',
            'icono17' => 'required|string',
            'tminima_sig4' => 'required|string',
            'tmaxima_sig4' => 'required|string',
            'texto_sig7' => 'required|string',
            'texto_sig8' => 'required|string',
            
        ]);
        
        $formulario = new FormularioPronos();
        $formulario->user_id = auth()->user()->id;
            // Asignar los datos validados al modelo
        $formulario->type = $data['type'];
        $formulario->tipo = $data['tipo'];
        $formulario->base = $data['base'];
        $formulario->base_calidad = $data['base_calidad'];
        $formulario->intermedia = $data['intermedia'];
        $formulario->intermedia_calidad = $data['intermedia_calidad'];
        $formulario->cumbre = $data['cumbre'];
        $formulario->cumbre_calidad = $data['cumbre_calidad'];
        $formulario->icono10 = $data['icono10'];
        $formulario->icono11 = $data['icono11'];
        $formulario->tminima_hoy = $data['tminima_hoy'];
        $formulario->tmaxima_hoy = $data['tmaxima_hoy'];
        $formulario->textarea10 = $data['textarea10'];
        $formulario->textarea11 = $data['textarea11'];
        $formulario->icono12 = $data['icono12'];
        $formulario->icono13 = $data['icono13'];
        $formulario->tminima_sig = $data['tminima_sig'];
        $formulario->tmaxima_sig = $data['tmaxima_sig'];
        $formulario->textarea12 = $data['textarea12'];
        $formulario->textarea13 = $data['textarea13'];
        $formulario->icono14 = $data['icono14'];
        $formulario->icono15 = $data['icono15'];
        $formulario->tminima_sig3 = $data['tminima_sig3'];
        $formulario->tmaxima_sig3 = $data['tmaxima_sig3'];
        $formulario->textarea14 = $data['textarea14'];
        $formulario->textarea15 = $data['textarea15'];
        $formulario->icono16 = $data['icono16'];
        $formulario->icono17 = $data['icono17'];
        $formulario->tminima_sig4 = $data['tminima_sig4'];
        $formulario->tmaxima_sig4 = $data['tmaxima_sig4'];
        $formulario->texto_sig7 = $data['texto_sig7'];
        $formulario->texto_sig8 = $data['texto_sig8'];
        dd($formulario);
        $formulario->save();
    

        return redirect()->route('dashboard')->with('status', 'Formulario Soporte enviado exitosamente.');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id){
        //
    }

}
