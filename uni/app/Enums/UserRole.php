<?php

namespace App\Enums;

enum UserRole: string
{
    case ADMIN = 'admin';
    case ALUNO = 'aluno';
    case PROFESSOR = 'professor';
    case COORDENADOR = 'coordenador';
}
