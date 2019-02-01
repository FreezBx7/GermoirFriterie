<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id_Prod', 'name_Prod','price_Prod','size_Prod','cat_Prod'];
}
