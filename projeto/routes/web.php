<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstanteController; // Sempre mapear controller
use App\Http\Controllers\BibliotecaController; 
use App\Http\Controllers\LivroController;
use App\Http\Controllers\UserController;

Route::get('/', [BibliotecaController::class, 'index'])->name('biblioteca.index');

Route::get('/cadastro', [UserController::class, 'index'])->name('cadastro');

Route::get('/livro', [LivroController::class, 'index'])->name('livro.index');

Route::resource('estantes', EstanteController::class);
 
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function(){
    Route::get('biblioteca', function() {
        return "biblioteca";
    });

    Route::get('estante', function() {
        return "estante";
    });
});

// 
Route::get('/biblioteca', function () {
    return view('biblioteca');
});

Route::get('/estante', function () {
    return view('estante');
});

// Route::get('/livros/{id}', function($id) {
//    return view('livros');
//});

// Todo tipo de acesso http
Route::any('/any', function () {
    return view('biblioteca');
});

// Acessos definidos
Route::match(['post'],'/match', function () {
    return view('biblioteca');
});

Route::redirect('/sobre', '/biblioteca');
