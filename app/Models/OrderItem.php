<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function service()
    {
        return $this->belongsTo(Service::class)->withDefault();
    }

    public function order()
    {
        return $this->belongsTo(Order::class)->withDefault();
    }
}
