<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Relatorio;

class RelatorioController extends Controller
{
    public function menu(){
        return view('relatorio.menu');
    }
    public function cobranca(){
        return view('relatorio.cobranca');
    }
    public function vendas(){
        return view('relatorio.vendas');
    }
    public function lucro(){
        return view('relatorio.lucro');
    }
    public function inadimplencia(){
        return view('relatorio.inadimplencia');
    }
    public function todos(){
        return view('relatorio.todos');
    }

}