<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class App extends Controller
{
    public function Index(){
        return "anasayfa";
    }
    public function About(){
        return "hakkımızda";
    }
    public function Uye($uye){
        return $uye;
    }
    public function Paylasimlar($uye){
        return $uye." 'e ait paylaşımlar";
    }
    public function Paylasim($uye,$id){
        return $uye." 'nın ".$id." numaralı paylaşımı";
    }
}
