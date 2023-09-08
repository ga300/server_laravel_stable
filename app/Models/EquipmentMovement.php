<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentMovement extends Model
{
    protected $table = 'equipment_movements';

    protected $fillable = [
        'equipment_id',
        'tipo_documento',
        'causale', 
        'quantita',
        'data',
        'note',
        'ubicazione', // Puoi includere l'ubicazione se necessario
        'giacenza_aspettata', // Puoi includere la giacenza aspettata se necessario
        // Altri campi desiderati per i movimenti delle attrezzature
    ];

    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }
}