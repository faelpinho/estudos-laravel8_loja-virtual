<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/produtos/inserir', [ProdutosController::class, 'insert']);

Route::get('/produtos/remover', [ProdutosController::class, 'remove']);

Route::get('/produtos/{nome}', [ProdutosController::class, 'show']);

Route::get('/produtos', [ProdutosController::class, 'index']);

Route::get('teste', function () {
    return "Hello world, from Laravel without Blade. <p>I'm in <b>routes/web.php</b></p>";
});

// EOF