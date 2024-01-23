<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Product
 *
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Product distinct()
 */
class Product extends Model
{
    protected $table = 'products';
        protected $fillable = ['product_name', 'price', 'image', 'description', 'category'];
}

