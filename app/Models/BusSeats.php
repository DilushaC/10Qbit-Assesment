<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bus;

class BusSeats extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'bus_seats';
    protected $fillable = [
        'seat_number',
        'price'
    ];

    //one seat can boom for one bus -> One to one relationship
    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

}
