<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TClues extends Model
{
    use HasFactory;

    protected $table = 't_clues';

    protected $fillable = [
        'id_clue',
        'clues'
    ];
}
