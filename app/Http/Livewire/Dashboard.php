<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Container\Container;
use Illuminate\Routing\Route;
use Livewire\Component;

class Dashboard extends Component
{

    public function __invoke(Container $container, Route $route)
    {
        return view('livewire.dashboard');
    }

}
