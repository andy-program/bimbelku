<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderCourse extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'order_id',
        'course_id',
        'quantity',
        'price',
        'tax',
        'total_price',
        'created_at',
        'updated_at',
    ];
    protected $dates = ['deleted_at'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function course()
    {
        return $this->belongsTo(Courses::class);
    }
}
