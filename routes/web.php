<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('postagens', PostController::class)->only([
    'index', 'show'
]);

Route::get('/postagens/autores/{id}',[PostController::class, 'buscarPorAutores'])->name('postagens.autores');
Route::get('/postagens/categorias/{id}',[PostController::class, 'buscarPorCategorias'])->name('postagens.categorias');
Route::get('/postagens/{id}/publicar',[PostController::class, 'publicar'])->name('postagens.publicar');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/sisfim', function () {
    return view('index');
});

Route::get('cobrancas', 'App\Http\Controllers\CobrancaController@menu')->name('cobranca.menu');

Route::get('cobrancas/buscar', 'App\Http\Controllers\CobrancaController@buscar')->name('cobranca.buscar');

Route::get('cobrancas/diaria', 'App\Http\Controllers\CobrancaController@diaria')->name('cobranca.diaria');

Route::get('cobrancas/mensal', 'App\Http\Controllers\CobrancaController@mensal')->name('cobranca.mensal');

Route::get('cobrancas/recebimento', 'App\Http\Controllers\CobrancaController@recebimento')->name('cobranca.recebimento');

Route::get('cobrancas/atrasados', 'App\Http\Controllers\CobrancaController@atrasados')->name('cobranca.atrasados');


Route::get('clientes', 'App\Http\Controllers\ClienteController@menu')->name('cliente.menu');

Route::get('clientes/ativos', 'App\Http\Controllers\ClienteController@listarativos')->name('cliente.ativos');

Route::get('clientes/inativos', 'App\Http\Controllers\ClienteController@listarinativos')->name('cliente.inativos');

Route::get('clientes/inadimplentes', 'App\Http\Controllers\ClienteController@listarinadimplentes')->name('cliente.inadimplentes');

Route::get('clientes/novo', 'App\Http\Controllers\ClienteController@criar')->name('cliente.criar');

Route::get('clientes/buscar', 'App\Http\Controllers\ClienteController@buscar')->name('cliente.buscar');

Route::get('clientes/status', 'App\Http\Controllers\ClienteController@status')->name('cliente.status');

Route::get('clientes/{id}', 'App\Http\Controllers\ClienteController@mostrar');

Route::get('clientes/{id}/editar', 'App\Http\Controllers\ClienteController@editar')->name('cliente.editar');

Route::post('clientes', 'App\Http\Controllers\ClienteController@salvar')->name('novo-cliente');

Route::put('clientes/{id}', 'App\Http\Controllers\ClienteController@atualizar')->name('cliente.atualizar');

Route::delete('clientes/{id}', 'App\Http\Controllers\ClienteController@deletar')->name('cliente.deletar');


Route::get('produtos', 'App\Http\Controllers\ProdutoController@menu')->name('produto.menu');

Route::get('produtos/novo', 'App\Http\Controllers\ProdutoController@criar')->name('produto.novo');

Route::get('produtos/buscar', 'App\Http\Controllers\ProdutoController@buscar')->name('produto.buscar');

Route::get('produtos/estoque', 'App\Http\Controllers\ProdutoController@estoque')->name('produto.estoque');

Route::get('produtos/estoque/novo', 'App\Http\Controllers\ProdutoController@criarestoque')->name('estoque.novo');

Route::get('produtos/{id}', 'App\Http\Controllers\ProdutoController@mostrar');

Route::get('produtos/{id}/editar', 'App\Http\Controllers\ProdutoController@editar')->name('produto.editar');

Route::post('produtos', 'App\Http\Controllers\ProdutoController@salvar')->name('novo-produto');

Route::post('estoques', 'App\Http\Controllers\ProdutoController@salvarestoque')->name('novo-estoque');

Route::put('produtos/{id}', 'App\Http\Controllers\ProdutoController@atualizar')->name('produto.atualizar');

Route::delete('produtos/{id}', 'App\Http\Controllers\ProdutoController@deletar')->name('produto.deletar');


Route::get('vendas', 'App\Http\Controllers\VendaController@menu')->name('venda.menu');

Route::get('vendas/novo', 'App\Http\Controllers\VendaController@criar')->name('venda.criar');

Route::get('vendas/menu', 'App\Http\Controllers\VendaController@menu')->name('venda.menu');

Route::get('vendas/{id}', 'App\Http\Controllers\VendaController@mostrar');

Route::get('vendas/{id}/editar', 'App\Http\Controllers\VendaController@editar')->name('venda.editar');

Route::post('vendas', 'App\Http\Controllers\VendaController@salvar')->name('nova-venda');

Route::put('vendas/{id}', 'App\Http\Controllers\VendaController@atualizar')->name('venda.atualizar');

Route::delete('vendas/{id}', 'App\Http\Controllers\VendaController@deletar')->name('venda.deletar');


Route::get('despesas', 'App\Http\Controllers\DespesaController@menu')->name('despesa.menu');

Route::get('despesas/novo', 'App\Http\Controllers\DespesaController@criar')->name('despesa.novo');

Route::get('despesas/buscar', 'App\Http\Controllers\DespesaController@buscar')->name('despesa.buscar');

Route::get('despesas/mensal', 'App\Http\Controllers\DespesaController@mensal')->name('despesa.mensal');


Route::get('relatorios', 'App\Http\Controllers\RelatorioController@menu')->name('relatorio.menu');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('home', 'home')->name('home');

});
