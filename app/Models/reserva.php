<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    public function condomino() 
    {
        return $this->belongsTo('App\Models\Condomino');
    }
}
