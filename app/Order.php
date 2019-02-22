<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id',
                           'id_Prod_Orders',
                           'comments_Orders',
                           'quantity_Orders',
                           'name_Bakings_Orders',
                           'id_ExtrasLists_Orders',
                           'name_Presta_Orders',
                           'total_price_Orders'
                        ];
}
