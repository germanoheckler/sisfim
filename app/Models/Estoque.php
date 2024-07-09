<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    use HasFactory;
    protected $table = 'estoques';
    protected $fillable = [
        'quantidade',
        'preco_de_compra',
        'preco_de_venda',
        'data_da_compra',
        'produto_id'
    ];
    public function produto(){
        return $this->belongsTo(Produto::class);
    }
}
