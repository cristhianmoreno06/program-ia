<?php

namespace App\Http\Controllers;


use App\Models\Bits;
use App\Models\Chromosomes;
use App\Models\PersonIa;
use App\Models\Total;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    private $pre = 0.2;
    private $inf = -10;
    private $sup = 10;
    private $n = 18;
    private $individuos = 20;


    public function calculateData()
    {
        $bits = Bits::all();
        $persons = PersonIa::all();
        $sumatoria_VA = 0;

        foreach ($persons as $person)
        {
            $decimal = ($person->value_1 * $bits[17]->number_bits) + ($person->value_2 * $bits[16]->number_bits) + ($person->value_3 * $bits[15]->number_bits)
                + ($person->value_4 * $bits[14]->number_bits) + ($person->value_5 * $bits[13]->number_bits) + ($person->value_6 * $bits[12]->number_bits)
                + ($person->value_7 * $bits[11]->number_bits) + ($person->value_8 * $bits[10]->number_bits) + ($person->value_9 * $bits[9]->number_bits)
                + ($person->value_10 * $bits[8]->number_bits) + ($person->value_11 * $bits[7]->number_bits) + ($person->value_12 * $bits[6]->number_bits)
                + ($person->value_13 * $bits[5]->number_bits) + ($person->value_14 * $bits[4]->number_bits) + ($person->value_15 * $bits[3]->number_bits)
                + ($person->value_16 * $bits[2]->number_bits) + ($person->value_17 * $bits[1]->number_bits) + ($person->value_18 * $bits[0]->number_bits);

            $valor_adaptacion = (($this->inf) + ($this->sup - $this->inf) / (pow(2, $this->individuos)-1)) * $decimal;

            $sumatoria_VA += $valor_adaptacion;
        }

        $Q = 0;
        $total  = array();
        DB::table('totals')->truncate();

        foreach ($persons as $person){

            $total = new Total();

            $decimal = ($person->value_1 * $bits[17]->number_bits) + ($person->value_2 * $bits[16]->number_bits) + ($person->value_3 * $bits[15]->number_bits)
                + ($person->value_4 * $bits[14]->number_bits) + ($person->value_5 * $bits[13]->number_bits) + ($person->value_6 * $bits[12]->number_bits)
                + ($person->value_7 * $bits[11]->number_bits) + ($person->value_8 * $bits[10]->number_bits) + ($person->value_9 * $bits[9]->number_bits)
                + ($person->value_10 * $bits[8]->number_bits) + ($person->value_11 * $bits[7]->number_bits) + ($person->value_12 * $bits[6]->number_bits)
                + ($person->value_13 * $bits[5]->number_bits) + ($person->value_14 * $bits[4]->number_bits) + ($person->value_15 * $bits[3]->number_bits)
                + ($person->value_16 * $bits[2]->number_bits) + ($person->value_17 * $bits[1]->number_bits) + ($person->value_18 * $bits[0]->number_bits);

            $valor_adaptacion = (($this->inf) + ($this->sup - $this->inf) / (pow(2, $this->individuos)-1)) * $decimal;

            $probabilidad = $valor_adaptacion/ $sumatoria_VA;

            $Q += $probabilidad;

            $total->decimal = $decimal;
            $total->adaptacion = $valor_adaptacion;
            $total->probabilidad = $probabilidad;
            $total->q = $Q;
            $total->save();
        }

        $view = Total::all();

        return view('welcome', compact('view'));
    }
}
