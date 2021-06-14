<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BusSeats;
use App\Models\BusSchedules;

class BusBookings extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'bus_bookings';
    protected $fillable = [
        'seat_number',
        'price',
        'status'
    ];
    public function busSeats()
    {
        return $this->hasMany(BusSeats::class);
    }
    public function busSchedules()
    {
        return $this->hasMany(BusSchedules::class);
    }

}
