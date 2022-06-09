<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\CentroController;
use App\Http\Controllers\ImagemController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\FavoritoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SugestaoReclamacaoController;

Route::resource('/centro', CentroController::class);

Route::resource('/user', UserController::class);
Route::get('/perfil', [UserController::class, 'perfil'])->name('perfil');

Route::resource('/servico', ServicoController::class);
Route::get('/servico/detalhe/{servico}', [ServicoController::class, 'detalhe'])->name('service');

Route::resource('/pagina', PaginaController::class);
Route::get('/pagina/{pagina:nome_abreviado}', [PaginaController::class, 'visualizar'])->name('visualizar');

Route::get('/registar', [RegisterController::class, 'index'])->name('registar');
Route::post('/registar', [RegisterController::class, 'store'])->name('registar_submit');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/detalhe/{centro:nome_abreviado}', [DashboardController::class, 'detalhe'])->name('detalhe');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::post('/centro/{centro}/favorito', [FavoritoController::class, 'store'])->name('centro.favoritos');
Route::delete('/centro/{centro}/favorito', [FavoritoController::class, 'destroy']);

Route::resource('/slide', SlideController::class);

Route::resource('/sugest_reclam', SugestaoReclamacaoController::class);

Route::resource('/imagem', ImagemController::class);