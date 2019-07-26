<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uye Kayit</title>
</head>
<body>
    <!--bu div validate işleminden dönen error lar için -->
    <div style="color:red">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li><br>
        @endforeach
    </div>
    <form method="post" action="{{route('kayit.post')}}">
        @csrf
        <label>Ad Soyad</label>
        <input type="text" name="ad" value="{{old('ad')}}"/><br><br>
        <label>Kullanıcı adı</label>
        <input type="text" name="kullanici_adi" value="{{old('kullanici_adi')}}"/><br><br> 
        <label>Email</label>
        <input type="email" name="email" value="{{old('email')}}"/><br><br> 
        <label>Sifre</label>
        <input type="password" name="sifre"/><br><br> 
        <label>Sifre</label>
        <input type="password" name="sifre_confirmation"/><br><br> 
        <button type="submit">Kayit Ol</button>

    </form>
</body>
</html>