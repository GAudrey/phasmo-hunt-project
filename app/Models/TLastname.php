<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TLastname extends Model
{
    use HasFactory;

    protected $table = 't_lastname';

    protected $fillable = [
        'id_lastname',
        'lastname'
    ];

}
