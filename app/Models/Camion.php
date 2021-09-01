<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    use HasFactory;

    public function repartidor()
    {
        return $this->belongsTo(Repartidor::class);
    }

    public function manifiestos()
    {
        return $this->hasMany(Manifiesto::class);
    }

    public function finca()
    {
        return $this->belongsTo(Finca::class);
    }
}
