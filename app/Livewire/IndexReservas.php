<?php

namespace App\Livewire;

use App\Models\Pista;
use Livewire\Component;

class IndexReservas extends Component
{
    public $pistas;
    public $pistaSeleccionada;
    public $pista_id;

    public function mount()
    {
        $this->pistas = Pista::all();
        if ($this->pista_id == null) {
        } else {

            $this->pistaSeleccionada = Pista::with('reservas')->where('id', $this->pista_id)->get();
        }
    }

    public function render()
    {
        return view('livewire.index-reservas');
    }
}
