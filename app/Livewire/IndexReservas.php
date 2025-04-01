<?php

namespace App\Livewire;

use App\Models\Pista;
use Livewire\Component;

class IndexReservas extends Component
{
    public $pistas;
    public $pista_id;

    public function mount()
    {
        $this->pistas = Pista::all();
        $this->pista_id = $this->pistas->first()->id;
    }

    public function render()
    {
        return view('livewire.index-reservas');
    }
}
