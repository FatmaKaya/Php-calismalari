<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app/index','App@Index');
Route::get('/app/about','App@About');

//controllerda tek bit fonksiyonu varsa 
Route::get('/ornek','Ornek'); 

//url den değer alacaksak
//boş gelmeeri sorun değilse kelime sonuna ? koymak yeterli ör:{slug?}
//controllerda defaultuna null koymak lazım ya da akontrol 
Route::get('/app/uye/{slug}','App@Uye');

Route::get('/app/uye/{slug}/paylasimlar','App@Paylasimlar');

Route::get('/app/uye/{slug}/paylasim/{id}','App@Paylasim');

/// Kendi algılayıp gidiyor resource ile 
/// php artisan make:controller Deneme --resource 
Route::resource('deneme', 'Deneme'); 


///view yapısı
Route::get('/viewyapisi/index','viewYapisi@Index');

// controllera gitmeden çağırma 
Route::get('/yas/{age}',function($age){
    $DT=date('Y')-$age;
    return "yaş: ".$age." Doğum Tarihi: ".$DT;
})->where('age','[0-9]+'); // sayı dışında bişey girilmemesi için 
//'[A-Za-z]+' sadece string için 

//Birden fazla kısıt için 
Route::get('/kisi/{ad}/{age?}',function($ad,$age=null){
   
    return "Ad: ".$ad." yaş: ".$age;
})->where(['ad'=>"[A-Za-z]+", 'age'=>"[0-9]+"]);

// name kısmı url çağırıken işi kolaylaştırıyor
Route::get('/viewyapisi/about','viewYapisi@About')->name("about");
               

//url gruplama 
Route::prefix('elektronik')->group(function(){

    Route::get('telefon',function(){
        return 'telefon';
    });
    Route::get('tablet',function(){
        return 'tablet';
    });
    Route::get('laptop',function(){
        return 'laptop';
    });
});

//view çalıştırmak için bunu yapmaya gerek yok kıssa yolu var 
Route::get('view',function(){
     return view('welcome');
});

///kısa yolu
Route::view('sonornek','welcome');
Route::view('son','sayfa.iltisim',['ad'=>'furkan']);



####### request

Route::get('/iletisim','RequestEx@iletisim');
Route::post('/iletisim/post','RequestEx@PostIletisim')->name('iletisim.post');