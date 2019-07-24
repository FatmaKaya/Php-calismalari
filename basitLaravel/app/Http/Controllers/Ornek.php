<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ornek extends Controller
{
    public function __invoke(){ /// controller ın tek fonkiyonu varsa 
        return "örnek controller";
    }
}
