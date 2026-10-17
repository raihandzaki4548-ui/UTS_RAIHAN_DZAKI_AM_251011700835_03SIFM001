<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'car_id',
        'customer_name',
        'phone',
        'start_date',
        'end_date',
        'total_days',
        'total_price',
        'status',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}