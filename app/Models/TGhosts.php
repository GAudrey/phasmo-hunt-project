<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TGhosts extends Model
{
    use HasFactory;

    protected $table = 't_ghosts';

    protected $fillable = [
        'id_ghost',
        'types',
        'strength',
        'weakness'
    ];
}
