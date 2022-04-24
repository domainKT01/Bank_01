<?php

namespace App\Http\Controllers;

use App\Http\livewire\insertPatient;

use App\Http\Livewire\Compare;

use App\Http\Livewire\Dashboard;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public static function insertPatient(){

        $data = insertPatient::render();

        return $data;
    }

    public static function compare(){

        $data = Compare::render();

        return $data;
    }

    public static function Dashboard(){

        $data = Dashboard::render();

        return $data;
    }
}
