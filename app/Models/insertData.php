<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use App\Models\insertD;

class insertData extends Model
{

    public static function insert($request)
    {

        $imc = new calcular_IMC();

        $response = $imc->calculo(floatval($request->talla), floatval($request->peso));

        $categoria = $imc->categorizar($response);

        $volemia = $imc->volemia($request->talla, $request->peso, $request->sexo);

        $namePatient = $request->patientName;

        $user = new User();

        $user->setTable('patients');

        $user->nombre = $namePatient;

        $user->imc = $response;

        $user->volemia = $volemia;

        $apto = 'apto';

        if ($volemia >= 3.5) {

            $apto = 'Apto';
        } else {

            $apto = 'No Apto';
        }

        $user->apto = $apto;

        return redirect()->route('pacientes');
    }
}
