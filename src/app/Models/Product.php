<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Kolom yang boleh diisi secara mass assignment
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
    ];
}
