<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory, HasUuids;

    protected $casts = [
        'created_at' => 'date:d M Y',
        'updated_at' => 'date:d M Y',
        'booking_from' => 'date:d M Y',
        'booking_till' => 'date:d M Y'
    ];
    protected $guarded = [];
}
