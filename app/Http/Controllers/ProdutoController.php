<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
//    public function index(){
        //$clientes = Cliente::with(['cliente'])->get();
        //return $clientes;

//        $produtos = Produto::all();
//        return view('produto.menu')->with('produtos',$produtos);
//    }

    public function menu(){
        return view('produto.menu');
    }

    public function buscar(){
        return view('produto.buscar');
    }

    public function estoque(){
        return view('produto.estoque');
    }

    public function criarestoque(){
        return view('produto.estoque');
    }

    public function salvarestoque(){
        return view('produto.estoque');
    }

    public function editar($id){
        $produto = Produto::find($id);
        return view('produto.atualizar')->with('produto', $produto);
    }
    public function criar(){
        return view('produto.criar');
    }
    public function salvar(Request $request){
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->marca = $request->marca;
        $produto->descricao = $request->descricao;
        $produto->foto = $request->foto;
        $produto->save();

    }
    public function atualizar(Request $request, $id){
        $produto = Produto::find($id);
        $produto->nome = $request->nome;
        $produto->marca = $request->marca;
        $produto->descricao = $request->descricao;
        $produto->foto = $request->foto;
        $produto->save();
        return redirect()->route('produto.listar');
    }
    public function mostrar($id){
        //return Produto::find($id);
        return redirect()->route('produto.listar');
    }
    public function deletar($id){
        $produto=Produto::find($id);
        $produto->delete();
        return redirect()->route('produto.listar');
    }
}
