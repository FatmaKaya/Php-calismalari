<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationEx extends Controller
{
    public function Index(){
        return View('ValidationEx.Index');
    }
    public function IndexPost(Request $request){
        // print_r($request->post());
        // return 'post method çalıştı';

        //kendi validate işlemi 
        // geçerse echo yazdırılır 
        //geçmezse aynı sayfa tekrar yüklenir 
        // daha fazla farklı veri türü için laravel web site
        // hataları sayfaya bastırmak  için viewde kod 
        $request->validate([
           'ad'=>'required | min:3',
           'email'=>'required | email',
           'sifre'=>'required | min:6 | sifre2_confirmed',
           'sifre2'=>'required | min:6 | sifre_confirmation'
        ]);
        echo 'kuralları geçti';
    }
}
