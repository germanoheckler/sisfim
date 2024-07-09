<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;
    protected $table = 'vendas';
    protected $fillable = [
        'vendedor',
        'data_da_venda',
        'valor_total',
        'status',
        'tipo_de_pagamento',
        'numero_de_parcelas',
        'cliente_id'
    ];
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
    public function pedidos(){
        return $this->hasMany(Pedido::class);
    }
}
