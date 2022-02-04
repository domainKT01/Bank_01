<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{

    public $matriz;

    public $data;

    public function mount()
    {
         $this->matriz = [
            'parametros',
            'paciente'
         ];

        $this->data = $this->matriz;
    }

    public function render()
    {
        if ($this->data == 'parametros') {

            return view('navigation-menu');
        } else {
            return "pacientes";
        }
    }
}
