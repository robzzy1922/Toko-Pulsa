<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_transaction extends Model
{
    protected $table = 'detail_transactions';

    protected $fillable = [
        'id_transaction',
        'id_product',
        'description',
        'quantity',
        'price',
        'subtotal'
    ];
}