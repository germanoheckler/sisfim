<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcela extends Model
{
    use HasFactory;
    protected $table = 'parcelas';
    protected $fillable = [
        'data_do_vencimento',
        'venda_id'
    ];
    public function venda(){
        return $this->belongsTo(Venda::class);
    }
}
