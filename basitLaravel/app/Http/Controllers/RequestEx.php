<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestEx extends Controller
{
    public function iletisim(){
        return View("RequestEx.iletisim");
    }
    public function PostIletisim(Request $request){
        //formun tamamını basıyor
      $form=$request->post();
      print_r($form);

      //sadece ismi basıyor
      echo $request->post('name');
      // sadece isim
      echo $request->name;

      //method ismi
      echo $request->method();

      //sadece path i yazıyor 
      echo $request->path();

      //sadece url
      echo $request->url();

      //path ine göre if  
      if($request->is('iletisim/*')){
          echo 'iletişimden geldi';
      }

      /// methoduna göre if
      if($request->isMethod('post')){
        echo 'post işlemi';
    }
      
    }
}
