<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cobranca;

class CobrancaController extends Controller
{
    public function menu(){
        return view('cobranca.menu');
    }
    public function buscar(){
        return view('cobranca.buscar');
    }
    public function mensal(){
        return view('cobranca.mensal');
    }
    public function recebimento(){
        return view('cobranca.recebimento');
    }
    public function atrasados(){
        return view('cobranca.atrasados');
    }

}