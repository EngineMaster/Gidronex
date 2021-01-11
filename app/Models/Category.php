<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function productsCategory(){
        return $this->hasMany(CategoryProduct::class);
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
}
