<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormularioPrensa extends Model
{
    use HasFactory;

    protected $connection = 'formulario_prensa';
    // Si la tabla tiene un nombre personalizado, establece la propiedad $table.
    protected $table = 'usuario_formulario';
    protected $primaryKey = 'id_prensa';

    protected $fillable = [
        'user_id',
        'comunicadoDia',
        'comunicadoNro',
        'titulo',
        'contenido',
        'type',

    ];
}
