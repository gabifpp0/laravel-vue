<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['nome', 'codigo', 'descricao', 'diretoria_id'];
}
