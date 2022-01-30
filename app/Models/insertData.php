<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

        if ($volemia >= 3.5) {

            $apto = 'Apto';
        } else {

            $apto = 'No Apto';
        }

        return view('dashboard', compact('namePatient', 'response', 'volemia', 'apto', 'categoria'));
    }
}
