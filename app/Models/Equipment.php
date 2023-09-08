<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipment';

    protected $fillable = [
        'codice', // Campo per il codice univoco
        'nome', // Nome dell'attrezzatura
        'descrizione', // Descrizione dell'attrezzatura
        'prezzo_unitario', // Prezzo unitario dell'attrezzatura
        'giacenza',
        'note', // Note sull'attrezzatura
        // Altri campi desiderati per le attrezzature
    ];

    public function movements()
    {
        return $this->hasMany(EquipmentMovement::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function purchaseOrders()
    {
        return $this->hasMany(PurchaseOrder::class);
    }
}
