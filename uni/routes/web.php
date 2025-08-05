<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\SetorController;

Route::get('/', [DashboardController::class, 'index']);

// Geral
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dashboard', [DashboardController::class, 'index']);

//Aluno
Route::get('boletim', [AlunoController::class, 'index']);
Route::get('perfil', [AlunoController::class, 'index']);
Route::get('disciplinas', [MateriaController::class, 'index']);
Route::get('horarios', [MateriaController::class, 'index']);
Route::get('inscricao', [MateriaController::class, 'inscricao']);

Route::get('setores', [SetorController::class, 'index']);