<?php

namespace App\Http\Controllers;

use App\Http\livewire\insertPatient;

use App\Http\Livewire\Compare;

use App\Http\Livewire\Dashboard;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public static function insertPatient(){

        $data = insertPatient::class;

        return $data;
    }

    public static function compare(){

        $data = Compare::class;

        return $data;
    }

    public static function Dashboard(){

        $data = Dashboard::class;

        return $data;
    }
}
