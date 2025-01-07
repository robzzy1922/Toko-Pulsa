<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detail_user extends Model
{
    use HasFactory;

    protected $table = 'detail_users';
    protected $fillable = [
    'user_id',
    'full_name',  
    'image', 
];

}