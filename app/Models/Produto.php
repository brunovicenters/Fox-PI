<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = "PRODUTO";
    protected $primaryKey = "PRODUTO_ID";
    public $timestamps = false;

    public $fillable = ['PRODUTO_NOME' , 'PRODUTO_DESC', 'PRODUTO_PRECO', 'PRODUTO_DESCONTO'];

    public function Imagem(){
        return $this->hasMany(Imagem::class, 'PRODUTO_ID', 'PRODUTO_ID');
    }
    
    public function Categoria(){
        return $this->belongsTo(Categoria::class, 'CATEGORIA_ID', 'CATEGORIA_ID');
    }
}
