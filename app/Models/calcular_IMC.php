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

        $values = new User();

        $values->setTable('compare_value');

        $values = $values->all();

        switch ($IMC){

            case $IMC <= $values->bajoPeso :

                return 'Bajo peso';

                break;

            case $IMC <= $values->normalBajo :

                return 'Normal bajo peso';

                break;

            case $IMC <= $values->normalAlto :

                return 'Normal alto peso';

                break;

            case $IMC <= $values->sobrepeso :

                return 'Sobrepeso';

                break;

            case $IMC >= $values->obesidad :

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
