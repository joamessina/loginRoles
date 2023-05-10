<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvisoPrensa extends Model
{
    use HasFactory;

    protected $connection = 'avisos_prensa';
    // Si la tabla tiene un nombre personalizado, establece la propiedad $table.
    protected $table = 'avisos';
    protected $primaryKey = 'id_notificacion';

    protected $fillable = [
        'comunicadoDia',
        'comunicadoNro',
        'titulo',
        'contenido',
    ];
}
