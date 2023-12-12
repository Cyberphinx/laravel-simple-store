<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // columns name for user inputs
    protected $fillable = [
        'name',
        'qty',
        'price',
        'description'
    ];
}
