<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manifiesto extends Model
{
    use HasFactory;

    public function camion()
    {
        return $this->belongsTo(Camion::class);
    }

    public function lotes()
    {
        return $this->belongsToMany(Lote::class)->withPivot('estado');
    }
}
