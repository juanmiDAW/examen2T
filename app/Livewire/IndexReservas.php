<?php

namespace App\Livewire;

use App\Models\Pista;
use Livewire\Component;

class IndexReservas extends Component
{


    public function render()
    {
        return view('livewire.index-reservas',['pistas' => Pista::all()]);
    }
}
