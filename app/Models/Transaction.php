<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'code_transaction',
        'transaction_date',
        'status',
        'payment_method',
        'total_amount'
    ];
    // Konstanta untuk nilai enum
    // public const STATUS_PENDING = 'pending';
    // public const STATUS_SUCCESS = 'success';
    // public const STATUS_FAILED = 'failed';

    // Daftar nilai enum yang valid
    // public const STATUS_OPTIONS = [
    //     self::STATUS_PENDING,
    //     self::STATUS_SUCCESS,
    //     self::STATUS_FAILED,
    // ];
}
