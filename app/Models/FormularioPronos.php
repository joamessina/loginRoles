<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormularioPronos extends Model
{
    use HasFactory;

    protected $connection = 'formulario_pronos';
    // Si la tabla tiene un nombre personalizado, establece la propiedad $table.
    protected $table = 'usuario_formulario';
    protected $primaryKey = 'id_pronos';

    protected $fillable = [
        'user_id',
        'type',
        'tipo',
        'base',
        'base_calidad',
        'intermedia',
        'intermedia_calidad',
        'cumbre',
        'cumbre_calidad',
        
        'icono10',
        'icono11',
        'tminima_hoy',
        'tmaxima_hoy',
        'textarea10',
        'textarea11',
        
        'icono12',
        'icono13',
        'tminima_sig',
        'tmaxima_sig',
        'textarea12',
        'textarea13',
        
        'icono14',
        'icono15',
        'tminima_sig3',
        'tmaxima_sig3',
        'textarea14',
        'textarea15',
    ];
}
