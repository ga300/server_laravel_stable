<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialMovement extends Model
{
    protected $table = 'material_movements';

    protected $fillable = [
        'material_id',
        'tipo_documento', // generato da sistema o da utente
        'causale', // Tipologia del movimento (utente o sistema)
        'quantita', // Quantità del movimento
        'data', // Data del movimento
        'note', // Note sul movimento
        'giacenza_aspettata', // Puoi utilizzare questo campo o calcolarlo quando necessario
        'ubicazione', // Ubicazione del materiale
        // Altri campi desiderati
    ];

    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    public function operator()
    {
        return $this->belongsTo(Operator::class);
    }

    public function workstation()
    {
        return $this->belongsTo(Workstation::class);
    }
}
