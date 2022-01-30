<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calcular_IMC extends Model
{
    public function calculo($talla, $peso)
    {

        $IMC = $peso;

        return $IMC;
        
    }

    public function categorizar($IMC)
    {

        switch ($IMC){

            case $IMC <= 18.5 :

                return 'Bajo peso';

                break;

            case $IMC <= 22.49 :

                return 'Normal bajo peso';

                break;

            case $IMC <= 24.9 :

                return 'Normal alto peso';

                break;

            case $IMC <= 29.9 :

                return 'Sobrepeso';

                break;

            case $IMC >= 30 :

                return 'Obesidad';

                break;
        }
    }

    public function volemia($talla, $peso, $sexo)
    {

        $volemiaM = 0.3669 * ($talla ** 3) + (0.03219 * $peso) + 0.6041;

        $volemiaF = 0.3561 * ($talla ** 3) + (0.03308 * $peso) + 0.1833;

        if ($sexo == 'Hombre' ){

            return $volemiaM;
        }

        else {

            return $volemiaF;
        }
    }
}
