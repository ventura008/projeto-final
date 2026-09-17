<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Retirada extends Model
{
    protected $table = 'retiradas';

    protected $fillable = [
        'usuario_id',
        'bloco',
        'sala',
        'data_retirada',
        'hora_retirada',
        'hora_devolucao',
        'status',
    ];
}