<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['nome', 'email', 'matricula', 'telefone', 'turma_id', 'curso_id'];
}
