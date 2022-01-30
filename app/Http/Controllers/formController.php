<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Nette\Utils\Strings;
use App\Http\Controllers\inData;
use App\Models\calcular_IMC;
use App\Models\insertData;

class formController extends Controller
{
    public function store(Request $request)
    {

        $response2 = insertData::insert_Data_patient($request);

        return $request->peso;
    }
}
