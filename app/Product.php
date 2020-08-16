<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name','product_image','product_price','product_image1','product_image2','product_image3','product_category','product_category1','product_category2','product_category3','product_category4','product_category5','product_category6','product_category7','product_category8','product_category9','product_category10',
    ];
}
