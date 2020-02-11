<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControler extends Controller
{
    public function produtos(){
        echo "produtos";
    }

    public function nome(){
        return "Cleison";
    }
    public function idade(){
        return "23";
    }
    public function multiplicar($n1,$n2){
        return $n1*$n2;
    }
}
