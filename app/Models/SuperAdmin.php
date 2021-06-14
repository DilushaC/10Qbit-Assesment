<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperAdmin extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'super-admin';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
