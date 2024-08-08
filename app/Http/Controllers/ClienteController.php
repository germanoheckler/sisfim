<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function menu(){
        return view('cliente.menu');
    }
    public function buscar(){
        return view('cliente.buscar');
    }
    public function listarativos(){
        return view('cliente.ativos');
    }
    public function listarinativos(){
        return view('cliente.inativos');
    }
    public function listarinadimplentes(){
        return view('cliente.inadimplentes');
    }
    public function listar(){
        //$clientes = Cliente::with(['cliente'])->get();
        //return $clientes;

        $clientes = Cliente::all();
        return view('cliente.listar')->with('clientes',$clientes);
    }
    public function editar($id){
        $cliente = Cliente::find($id);
        return view('cliente.atualizar')->with('cliente', $cliente);
    }
    public function criar(){
        return view('cliente.criar');
    }
    /*
    public function salvar(Request $request){
        $cliente = new Cliente();
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->telefone = $request->telefone;
        $cliente->endereco = $request->endereco;
        $cliente->cidade = $request->cidade;
        $cliente->bairro = $request->bairro;
        $cliente->save();

        return redirect()->route('cliente.inativos');
    }
    public function atualizar(Request $request, $id){
        $cliente = Cliente::find($id);
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->telefone = $request->telefone;
        $cliente->save();
        return redirect()->route('cliente.listar');
    }
    public function mostrar($id){
        //return Cliente::find($id);
        return redirect()->route('cliente.listar');
    }
    public function deletar($id){
        $cliente=Cliente::find($id);
        $cliente->delete();
        return redirect()->route('cliente.listar');
    }
        */
}
