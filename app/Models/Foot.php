<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foot extends Model
{
    use HasFactory;


    protected $table = 'foot';

    protected $fillable = [
        'name',
        'ccal',
        'type'
    ];

    public $timestamps = false;
}
