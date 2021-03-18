<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TObjectives extends Model
{
    use HasFactory;

    protected $table = 't_objectives';

    protected $fillable = [
        'id_objective',
        'objective'
    ];

}
