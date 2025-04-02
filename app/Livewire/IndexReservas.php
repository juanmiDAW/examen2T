<?php

namespace App\Livewire;

use App\Models\Pista;
use App\Models\Reserva;
use Livewire\Component;

class IndexReservas extends Component
{
    public $pistas;
    public $pistaSeleccionada;
    public $pista_id = 1;
    public $diaYHora;

    public function mount()
    {
        $this->pistas = Pista::all();
        if ($this->pista_id == null) {
        } else {

            $this->pistaSeleccionada = Pista::with('reservas')->where('id', $this->pista_id)->get();
        }
    }

    public function crearReserva($diaYHora){
        Reserva::create([
            'pista_id'=>$this->pista_id,
            'diaYHora'=>$diaYHora,
            'user_id'=>auth()->user()->id,
        ]);
        $this->dispatch('reservaCreada');
    }

    public function anularReserva($reservada){

        Reserva::where('id', $reservada)->delete();

        $this->dispatch('reservaAnulada');
    }

    public function render()
    {
        return view('livewire.index-reservas');
    }
}
