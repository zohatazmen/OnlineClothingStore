<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'customer_name',
        'customer_email',
        'address',
        'cart',
        'total_price',
    ];

    protected $casts = [
        'cart' => 'array', 
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}