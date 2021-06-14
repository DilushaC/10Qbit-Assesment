<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BusRoutes;
use App\Models\BusSeats;

class Bus extends Model
{

    use HasFactory;
    public $timestamps=false;
    protected $table = 'bus';

    protected $fillable = [
        'name',
        'type',
        'vehicle_number',

    ];

    //One bus has many routes -> many to one
    public function busRoutes(){
        return $this->belongsTo(BusRoutes::class);
    }

    public function busSeats(){
        return $this->belongsTo(BusSeats::class);
    }


}
