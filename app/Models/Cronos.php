<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cronos extends Model
{
    use HasFactory;

    protected $connection = 'formulario_cronos';
    // Si la tabla tiene un nombre personalizado, establece la propiedad $table.
    protected $table = 'usuario_formulario';
    protected $primaryKey = 'id_cronos';

    protected $fillable = [
        'user_id',
        'type',
        'data',
    ];
}
