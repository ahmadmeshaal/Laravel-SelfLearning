<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'seller_id',
        'catigore_id',
        'name',
        'price',
        'image',
    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function catigore()
    {
        return $this->belongsTo(Catigore::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'orderitems')
            ->withPivot('quantity', 'price')
            ->withTimestamps();
    }
}
