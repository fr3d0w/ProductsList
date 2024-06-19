<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mypl extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'created_at',
    ];
}
