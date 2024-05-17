<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Model;

class Pedido_Item extends Model
{
    use HasFactory;

    protected $table = 'PEDIDO_ITEM';
    protected $primaryKey = ['PEDIDO_ID', 'PRODUTO_ID'];
    protected $keyType = 'string';

    public $timestamps = false;
    protected $guarded = [];
    public $incrementing = false;

    public function produtos()
    {
        return $this->hasMany(Produto::class, "PRODUTO_ID", "PRODUTO_ID");
    }
}
