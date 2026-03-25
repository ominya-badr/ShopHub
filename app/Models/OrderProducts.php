<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProducts extends Model
{
    protected $fillable = ['order_id', 'product_id', 'quantity', 'price'];
}
