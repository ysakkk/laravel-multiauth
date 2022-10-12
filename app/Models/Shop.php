<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_name',
        'postal_code',
        'pref_id',
        'addr01',
        'addr02',
        'phone_number',
        'other_expense',
        'payment',
        'delivery_time',
        'refund',
        'defective',
        'delivery_fee',
        'delivery_free_amount',
    ];
}
