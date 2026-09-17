<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SistemaController;
use App\Http\Middleware\EnsureUsuarioAuthenticated;

Route::get('/', function () {
    return redirect('/login');
});
Route::get('/login', [LoginController::class, 'login_html']);

Route::get('/cadastro_usuario', [UsuarioController::class, 'cadastro_usuario_html']);

Route::get('/sistema', function () {
    if (! session()->has('usuario_id')) {
        return redirect('/login');
    }

    return app(SistemaController::class)->index();
});

Route::middleware(EnsureUsuarioAuthenticated::class)->group(function () {
    Route::get('/retirada', [SistemaController::class, 'retirada']);
    Route::post('/retirada', [SistemaController::class, 'store']);
    Route::get('/historico', [SistemaController::class, 'historico']);
    Route::delete('/historico/{retirada}', [SistemaController::class, 'destroy']);
    Route::patch('/historico/{retirada}/devolver', [SistemaController::class, 'devolver']);
});

Route::get('/sair', function () {
    session()->forget('usuario_id');

    return redirect('/login');
});