<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\calcular_IMC;

class insertPatient extends Model
{

    public static function data($request)
    {

        $imc = new calcular_IMC();

        $response = $imc->calculo(floatval($request->talla), floatval($request->peso));

        $categoria = $imc->categorizar($response);

        $volemia = $imc->volemia($request->talla, $request->peso, $request->sexo);

        $apto = 'apto';

        if ($volemia >= 3.5) {

            $apto = 'Apto';
        } else {

            $apto = 'No Apto';
        }

        return redirect()->route('pacientes');
    }
}
