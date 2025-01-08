<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class providers extends Model
{
    use hasFactory;

    protected $table = 'providers';

    protected $fillable = [
        'name',
        'code'
    ];
}