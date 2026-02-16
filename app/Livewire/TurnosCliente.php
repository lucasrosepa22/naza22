<?php

namespace App\Livewire;

use Livewire\Component;

class TurnosCliente extends Component
{
    public $fecha, $hora;

    public function solicitar()
    {
        Turno::create([ 
            'user_id' => auth()->id(),
            'fecha' => $this->fecha,
            'hora_inicio' => $this->hora,
            'hora_fin' => Carbon::parse($this->hora)->addHour(),
            'estado' => 'pendiente'
        ]);
    }

    public function render()
    {
        return view('livewire.turnos-cliente');
    }
}
