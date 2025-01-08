<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class providers extends Model
{
    use hasFactory, SoftDeletes;

    protected $table = 'providers';

    protected $fillable = [
        'name',
        
    ];
}