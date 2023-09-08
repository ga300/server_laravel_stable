<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materials';

    protected $fillable = [
        'codice',
        'nome',
        'descrizione',
        'giacenza',
        'giacenza_minima',
        'prezzo_unitario',
        // Altri campi desiderati
    ];

    public function movements()
    {
        return $this->hasMany(MaterialMovement::class);
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
