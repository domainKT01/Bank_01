<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class insertData extends Model
{

    public static function insert_Data_patient($request)
    {

        $imc = new calcular_IMC();

        $response = $imc->calculo(floatval($request->talla), floatval($request->peso));

        $categoria = $imc->categorizar($response);

        $volemia = $imc->volemia($request->talla, $request->peso, $request->sexo);

        $namePatient = $request->nombrePaciente;

        $apto = 'apto';

        $user1 = new User();

        $user1->setTable('patients');

        $user1->nombre = $namePatient;

        $user1->imc = $request->imc;

        $user1->volemia = $volemia;

        if ($volemia >= 3.5) {

            $apto = 'Apto';
        } else {

            $apto = 'No Apto';
        }

        $user1->apto = $apto;

        $user1->save();

        return view('dashboard');
    }
}
