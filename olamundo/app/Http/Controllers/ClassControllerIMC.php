<?php
namespace App\Http\Controllers;

use App\Models\ClassModelIMC;
use Illuminate\Http\Request;

class ClassControllerIMC extends Controller {
    public function index() {
        return view('calculoIMC');
    }
    public function imc(Request $request) {
        $peso = $request->input('peso');
        $altura = $request->input('altura');
        $modelIMC = new ClassModelIMC();
        $imc = $modelIMC->getImc($peso, $altura);
        return view('imc', ['imc' => $imc]);
    }
}

?>