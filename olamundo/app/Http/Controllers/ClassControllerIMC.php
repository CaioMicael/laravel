<?php
namespace App\Http\Controllers;

use App\Models\ClassModelIMC;

class ClassControllerIMC extends Controller {
    public function index() {
        return view('index',['name'=>'Mundo', 'title' => 'teste', 'idade' => 20, 'peso' => 80, 'altura' => 1.80]);
    }
    public function imc($peso, $altura) {
        $modelIMC = new ClassModelIMC();
        $imc = $modelIMC->getImc($peso, $altura);
        return view('imc', ['imc' => $imc]);
    }
}

?>