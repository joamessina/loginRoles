<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFormulario extends Model
{
    use HasFactory;

    protected $table = 'user_formulario';

    protected $fillable = [
        'user_id',
        'formulario_id',
        'habilitado',
    ];
}
