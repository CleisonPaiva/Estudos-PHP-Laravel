<?php

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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/teste/{nome}/{sobrenome}',function ($nome,$sobrenome){
    echo"ola ".$nome ." ".$sobrenome;
});

/**GRUPOS PARA ROTAS**/
Route::prefix('/app')->group(function (){

    Route::get('/',function (){
        return view('app');
    })->name('app');

    Route::get('profile/',function (){
        return view('profile');
    })->name('app.profile');

    Route::get('user/',function (){
        return view('user');
    })->name('app.user');

});

Route::get('/produttos',function (){
    return view('produttos');
})->name('meusprodutos');

/**REDIRECIONAMENTO DE ROTAS**/
Route::redirect('todosprodutos1','produtos',302);

Route::get('/todosprodutos2',function (){
    return redirect()->route('meusprodutos');
});

Route::post('/requisicoes',function(Request $request){
    return "Hello";
});
Route::get('produtos','MeuControler@produtos');
Route::get('nome','MeuControler@nome');
Route::get('idade','MeuControler@idade');
Route::get('multiplicar/{n1}/{n2}','MeuControler@multiplicar');

Route::resource('clientes','ClienteControlador');

Route::get('/produtos',function (){
    return view('outras.produtos');
})->name('produtos');

Route::get('/departamentos',function (){
    return view('outras.departamentos');
})->name('departamentos');

Route::get('opcoes/{opcao?}', function($opcao=null){
    return view('outras.opcoes',compact(['opcao']));
})->name('opcoes');
