<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class calculoAutonomiaModel extends Model   {

    /**
     * Este método calcula a autonomia do veículo.
     * @param float $valor
     * @param float $distancia
     * @param float $consumo
     * @return string
     */
    public function getAutonomia($valor, $distancia, $consumo) {
        return ($distancia / $consumo) * $valor;
    }
}
