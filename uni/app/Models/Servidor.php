<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servidor extends Model
{
    protected $fillable = ['nome', 'funcao_id', 'setor_id'];
}
