<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassModelIMC extends Model   {

    /**
     * Este método calcula o IMC e retorna o valor.
     * @param float $peso
     * @param float $altura
     * @return float
     */
    public function getImc($peso, $altura) {
        return $peso / ($altura * $altura);
    }
}
