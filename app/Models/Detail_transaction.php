<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_transaction extends Model
{
    protected $table = 'detail_transactions';

    protected $fillable = [
        'transaction_id',
        'product_id',
        'quantity',
        'price',
        'subtotal'
    ];
}