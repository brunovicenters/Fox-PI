<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto_Estoque extends Model
{
    use HasFactory;

    protected $table = 'PRODUTO_ESTOQUE';

    protected $guarded = [];
}
