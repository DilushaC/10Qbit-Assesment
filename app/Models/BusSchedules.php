<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BusRoutes;

class BusSchedules extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'bus_schedules';
    protected $fillable = [
        'direction',
        'start',
        'end'
    ];

    //One Bus route has many buses -> One to Many relationship
    public function busRoutes()
    {
        return $this->hasMany(BusRoutes::class);
    }

}
