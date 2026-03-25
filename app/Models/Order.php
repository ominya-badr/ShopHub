<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
Use App\Models\OrderProducts;

class Order extends Model
{
    protected $fillable = ['user_id', 'amount', 'status', 'stripe_id'];

    public function products() {
        return $this->hasMany(OrderProducts::class);
    }
}
