<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'transactions';

    protected $fillable = [
        'user_id',
        'paid_with',
        'code_transaction',
        'status',
        'total_amount',
        'payment_type'
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