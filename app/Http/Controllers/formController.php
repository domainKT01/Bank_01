<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Nette\Utils\Strings;
use App\Http\Controllers\inData;
use App\Models\calcular_IMC;
use App\Models\insertCompare;
use App\Models\insertPatient;

class formController extends Controller
{
    public function store(Request $request)
    {

        if ($request->patientName) {

            $imc = new calcular_IMC();

            $response = $imc->calculo(floatval($request->talla), floatval($request->peso));

            $categoria = $imc->categorizar($response);

            $volemia = $imc->volemia($request->talla, $request->peso, $request->sexo);

            $apto = 'apto';

            $user = new User();

            if ($volemia >= 3.5) {

                $apto = 'Apto';
            } else {

                $apto = 'No Apto';
            }

            return redirect()->route('dashboard');

        } else {

            $response3 = insertCompare::insert($request);

            return $response3;
        }
    }
}
