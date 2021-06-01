<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'orders';

    protected $casts = [
        'shipping_address' => 'array',
    ];

    public function orderDetails() {
        return $this->hasMany(OrderDetail::class);
    }
}
