<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sonoModel extends Model   {

    /**
     * Este método calcula o sono ideal e retorna o valor.
     * @param float $peso
     * @param float $altura
     * @return string
     */
    public function getSonoIdeal($idade, $horas) {
        switch ($idade) {
            case ($idade >= 0 && $idade <= 2):
                return '14 a 17 horas';
                break;
            case ($idade >= 3 && $idade <= 5):
                return '10 a 13 horas';
                break;
            case ($idade >= 6 && $idade <= 13):
                return '9 a 11 horas';
                break;
            case ($idade >= 14 && $idade <= 17):
                return '8 a 10 horas';
                break;
            case ($idade >= 18 && $idade <= 64):
                return '7 a 9 horas';
                break;
            case ($idade >= 65):
                return '7 a 8 horas';
                break;
            default:
                return 'Idade inválida';
                break;
        }
    }
}
