<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    /** @use HasFactory<\Database\Factories\ReservaFactory> */
    use HasFactory;

    protected $filalble = ['diaYHora', 'pista_id', 'user_id'];

    public function reserva(){
        return $this->belongsTo(Pista::class);

    }

    public function usuario(){
        return $this->belongsTo(User::class);
    }
}
