<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';

    protected $fillable = [
        'nome',
        // Altri campi desiderati per il reparto
    ];

    public function materials()
    {
        return $this->belongsToMany(Material::class, 'department_material', 'department_id', 'material_id');
    }
}
