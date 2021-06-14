<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BusRoutes;

class Route extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'routes';

    protected $fillable = [
        'node_one',
        'node_two',
        'route_number',
        'distance',
        'time',

    ];
    //One route has one unique route id -> One to one relationship
    public function busRoutes()
    {
        return $this->belongsTo(BusRoutes::class);
    }
}
