<!DOCTYPE html>
<html lang="tr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Laravel Dersleri -View Yapısı</title>
    </head>
    <body>
        <h1>Laravel Dersleri -View Yapısı</h1>
        <?=$ad?> <!-- kısa hali -->
        <?php echo $ad ?> <!-- uzun hali -->
        {{$ad}} <!--böylede olur (blade) -->
        <!-- php ile -->
        <?php if(1>0){
            echo "1 büyüktür 0 dan.";
        } ?>

        <!-- blade ile else if -->
        @if(1>0) 
            1 büyüktür 0 dan.
        @elseif(2>1)
            dıjfh
        @else 
            tam tersi
        @endif

        <!-- blade ile isset -->
        @isset($ad)
            $ad isminde değişken var. 
        @endisset

        <!-- blade ile foreach -->
        @foreach($names as $name)
            <li>{{$loop->iteration}}-{{$name}} - @if($loop->first) 1. isim @endif</li>
        @endforeach

       <!-- php kod yazmak istediğimizde -->
        @php
            echo "elma"; 
        @endphp

        <!-- başka sayfa çağırmak istediğimizde -->
        @include('viewYapisi.iletisim')
        @include('viewYapisi.il',['veri'=>'gonderdim'])

        <!-- html gönderildiği zaman böyle yazılıyor -->
        {!! $ad !!}

        <!-- name ve normal kullanım  -->
        <a href="{{url('veriYapisi/about')}}">İl</a>
        <a href="{{route('about')}}">İl</a>
        <!-- veri göndermek için de route('about','veri')  birden fazlaysa array yap route('about',['veri','veri2'])  -->
        
        
    </body>
</html>