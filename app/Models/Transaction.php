<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'id_user',
        'id_products',
        'phone_number',
        'amount',
        'status',
        'payment_method',
        'total'
    ];
}
