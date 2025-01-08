<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detail_user extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'detail_users';
    protected $fillable = [
    'user_id',
    'full_name',  
    'image', 
];
}