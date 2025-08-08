<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doce extends Model
{
    protected $table = 'doces';

    protected $fillable = [
        'nome',
        'preco',
        'disponível',
    ];
}
