<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $table = 'purchase_orders';

    protected $fillable = [
        'supplier_id',
        'tipo_documento', // Generato da sistema o da utente
        'causale', // Tipologia di ordine
        'quantita', // Quantità dell'ordine
        'data_ordine', // Data dell'ordine
        'data_consegna', // Data di consegna
        'stato', // Stato dell'ordine
        // Altri campi desiderati
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function materials()
    {
        return $this->hasMany(Material::class);
    }
}