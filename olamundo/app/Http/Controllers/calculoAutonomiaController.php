<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\calculoAutonomiaModel;

class calculoAutonomiaController extends Controller {
    
    public function index() {
        return view('calculoAutonomia');
    }

    /**
     * Retorna o cálculo de sono ideal do Model
     * @param Request $request
     * @return string
     */
    public function getAutonomia(Request $request) {
        $valor = $request->input('valor');
        $distancia = $request->input('distancia');
        $consumo = $request->input('consumo');
        $oCalculoAutonomiaModel = new calculoAutonomiaModel();
        $autonomia = $oCalculoAutonomiaModel->getAutonomia($valor, $distancia, $consumo);
        return view('calculoAutonomiaResultado', ['autonomia' => 'A autonomia é de R$'.$autonomia]);
    }
}

?>