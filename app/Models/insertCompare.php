<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class insertCompare extends Model{

    public static function insert($request){

        $user = new insertD();

        $user->setTable('compare_value');

        $user->id = 1;

        $user->bajoPeso = $request->bajoPeso;

        $user->normalBajo = $request->normalBajo;

        $user->normalAlto = $request->normalAlto;

        $user->sobrepeso = $request->sobrepeso;

        $user->save();

        return view('dashboard');
    }
}
