<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;


    protected $table = 'cars';

    protected $fillable = [
        'name',
        'milleage',
        'color',
        'price',
        'position',
        'year'
    ];

    public $timestamps = false;
}
