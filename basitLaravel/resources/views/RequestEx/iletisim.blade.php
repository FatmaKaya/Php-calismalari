<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iletisim Sayfaysı</title>
</head>
<body>
    <form method="post", action="{{route('iletisim.post')}}">
        @csrf 
        <br><br> 
        <label>Ad Soyad: </label>
        <input type="text" name="name"/><br><br>

        <label>Email: </label>
        <input type="mail" name="mail"/><br><br>

        <label>İletişim Sebebi: </label>
        <Select name="subject">
            <option selected disabled>sebeb seçiniz</option>
            <option>İş Teklifi</option>
            <option>Destek</option>
        </select><br><br>

        <label>Mesajınız: </label>
        <textarea name="message" rows="3"></textarea><br><br>
        
        <button type='submit'>Gönder</button>
    </form>
</body>
</html>
