<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bus;
use App\Models\Route;

class BusRoutes extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'bus_routes';
    protected $fillable = [
        'status'
    ];

    //One Bus route has many buses -> One to Many relationship
    public function bus()
    {
        return $this->hasMany(Bus::class);
    }

    //One route has one bus route id -> One to one relationship
    public function route()
    {
        return $this->belongsTo(Route::class);
    }
}
