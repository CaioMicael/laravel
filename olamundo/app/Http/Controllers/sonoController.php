<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sonoModel;

class sonoController extends Controller {
    public function index() {
        return view('sono');
    }

    /**
     * Retorna o cálculo de sono ideal do Model
     * @param Request $request
     * @return string
     */
    public function getSonoIdeal(Request $request) {
        $idade = $request->input('idade');
        $horas = $request->input('horas');
        $oSonoModel = new sonoModel();
        $horas = $oSonoModel->getSonoIdeal($idade, $horas);
        return view('sonoResultado', ['horas' => $horas]);
    }
}

?>