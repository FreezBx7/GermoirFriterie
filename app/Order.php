<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id',
                           'idProd',
                           'comments',
                           'quantity',
                           'nameBakings',
                           'idExtrasLists',
                           'namePresta',
                           'totalPrice'
                        ];
}
