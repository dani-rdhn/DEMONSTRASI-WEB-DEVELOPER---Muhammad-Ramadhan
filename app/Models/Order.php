<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'user_id',
        'product_title',
        'price',
        'quantity',
        'image',
        'product_id',
        'duedate',
        'rent_status',
        'delivery_status',
    ];
}
