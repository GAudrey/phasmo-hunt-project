<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GhostHasClues extends Model
{
    use HasFactory;

    protected $table = 'ghosts_has_clues';

    protected $fillable = [
        'fk_id_ghosts',
        'fk_id_clues'
    ];
}
