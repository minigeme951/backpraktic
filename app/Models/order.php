<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable=[
        'order_id',
        'product_id',
        'user_id',
        'count',
        'status',
        'discription'
    ];
}
