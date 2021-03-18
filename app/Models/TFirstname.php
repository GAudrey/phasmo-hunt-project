<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TFirstname extends Model
{
    use HasFactory;

    protected $table = 't_firstname';

    protected $fillable = [
        'id_firstname',
        'firstname'
    ];

}
