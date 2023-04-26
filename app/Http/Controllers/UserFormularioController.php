<?php

namespace App\Http\Controllers;
use App\Models\UserFormulario;

use Illuminate\Http\Request;

class UserFormularioController extends Controller
{
    public function toggle(Request $request, $user_id, $formulario_id)
    {
        $userFormulario = UserFormulario::where('user_id', $user_id)->where('formulario_id', $formulario_id)->first();
    
        if ($userFormulario) {
            $userFormulario->habilitado = !$userFormulario->habilitado;
            $userFormulario->save();
        } else {
            UserFormulario::create([
                'user_id' => $user_id,
                'formulario_id' => $formulario_id,
                'habilitado' => true,
            ]);
        }
    
        return redirect()->back();
    }

}
