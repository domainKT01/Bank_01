<?php

namespace App\Http\Controllers;

use App\Models\insertPatient;
use Illuminate\Http\Request;

class patientController extends Controller
{
    public function store (Request $request) {

        $response = insertPatient::data($request);

        return $response;
    }
}
