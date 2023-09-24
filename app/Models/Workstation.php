<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workstation extends Model
{
    protected $fillable = [
        'nome',
        'descrizione',
        // Altri campi per la postazione
    ];
}
