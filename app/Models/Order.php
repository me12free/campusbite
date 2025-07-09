<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'total',
        'status',
        'promo_code',
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
