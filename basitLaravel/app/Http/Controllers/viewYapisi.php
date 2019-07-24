<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewYapisi extends Controller
{
    public function Index(){
        //return View("anasayfa");// direk views klasörü altındaysa 
    
    #veri gönderme
    //    return View('viewYapisi.anasayfa', ['ad'=>'fatma']);
     
       #en çok kullanılan 
       $data['ad']='<b>fatma2</b>';
    //    return View('viewYapisi.anasayfa', $data);

    //    return View("viewYapisi.anasayfa")-> with('ad','fatma3');
        $data2['names']=["Ayşe","Fatma","Kaya"];
        return View('viewYapisi.anasayfa',$data, $data2);
    }
    public function About(){
        return View("viewYapisi.about");
    }
}
