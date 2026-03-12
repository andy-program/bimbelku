<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    'order_code',    
    'user_id',
    'subtotal',
    'tax',
    'grand_total',
    'status',
    'payment_method',
    'note',
    'created_at',
    'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderCourses()
    {
        return $this->hasMany(OrderCourse::class);
    }
}
