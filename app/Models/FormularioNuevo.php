<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormularioNuevo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_formulario';
    protected $table = 'formularios';

    protected $fillable = [
        'nombre',
        'habilitado',
        'nombre_formulario',
        
    ];

}
