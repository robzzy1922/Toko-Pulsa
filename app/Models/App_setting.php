<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class App_setting extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'app_settings';

    protected $fillable = [
        'key',
        'value'
    ];
}
