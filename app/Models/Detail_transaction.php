<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_transaction extends Model
{
    protected $table = 'detail_transactions';

    protected $fillable = [
        'quantity',
        'price',
        'subtotal',
        'product_id',
        'transaction_id'
    ];
}