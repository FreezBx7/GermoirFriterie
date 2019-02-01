<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
protected $fillable = ['id','name_Prod','price_Prod','size_Prod','cat_Prod'];
}
