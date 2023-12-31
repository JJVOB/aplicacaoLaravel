<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class,'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::get('/login', [\App\Http\Controllers\LoginController::class,'login'])->name('site.login');
/*
Route::get('/clientes', [\App\Http\Controllers\ClientesController::class,'clientes'])->name('app.cliente');
Route::get('/fornecedores', [\App\Http\Controllers\FornecedoresController::class,'fornecedores'])->name('site.fornecedores');
Route::get('/produtos', [\App\Http\Controllers\ProdutosController::class,'produtos'])->name('site.produtos');    
*/
Route::get('/teste/{p1}/{p2}',[\App\Http\Controllers\TesteController::class,'teste'])->name('site.teste');


// https: .... /app/ex:cliente

Route::prefix('/app')->group(function()
{
    Route::get('/clientes', [\App\Http\Controllers\ClientesController::class,'clientes'])->name('app.cliente');
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class,'index'])->name('app.fornecedor');
    Route::get('/produtos', [\App\Http\Controllers\ProdutosController::class,'produtos'])->name('app.produtos');    

});


Route::fallback(function(){

    echo 'Página não entrada!! <br> <a href="'.route('site.index').'" >Clique aqui </a> para ser redirecionado.';

});






