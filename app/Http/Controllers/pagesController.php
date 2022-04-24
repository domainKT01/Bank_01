<?php

namespace App\Http\Controllers;

use App\Http\livewire\insertPatient;

use App\Http\Livewire\Compare;

use App\Http\Livewire\Dashboard;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function insertPatient(){

        return insertPatient::class;
    }

    public function compare(){

        return Compare::class;
    }

    public function Dashboard(){

        return Dashboard::class;
    }
}
