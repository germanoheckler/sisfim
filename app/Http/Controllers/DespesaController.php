<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Despesa;

class DespesaController extends Controller
{
    public function menu(){
        return view('despesa.menu');
    }
    public function buscar(){
        return view('despesa.buscar');
    }
    public function mensal(){
        return view('despesa.mensal');
    }
    public function criar(){
        return view('despesa.criar');
    }
    public function salvar(Request $request){
        $despesa = new Despesa();
        $despesa->nome = $request->nome;
        $despesa->cpf = $request->cpf;
        $despesa->telefone = $request->telefone;
        $despesa->endereco = $request->endereco;
        $despesa->cidade = $request->cidade;
        $despesa->bairro = $request->bairro;
        $despesa->save();

    }
    public function atualizar(Request $request, $id){
        $despesa = Despesa::find($id);
        $despesa->nome = $request->nome;
        $despesa->cpf = $request->cpf;
        $despesa->telefone = $request->telefone;
        $despesa->save();

    }

    public function deletar($id){
        $despesa=Despesa::find($id);
        $despesa->delete();
        return redirect()->route('cliente.menu');
    }
}