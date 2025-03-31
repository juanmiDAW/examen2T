<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use function PHPUnit\Framework\returnSelf;

class Pista extends Model
{
    /** @use HasFactory<\Database\Factories\PistaFactory> */
    use HasFactory;

    protected $fillable = ['id', 'nombre'];

    public function reservas(){
        return $this->hasMany(Reserva::class);
    }
}
