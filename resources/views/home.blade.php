<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home primi passi</title>
</head>
<body>

    <h1>Ciao {{$nome}}</h1>
    <h2>{{$sottotitolo}} {{$paese}} ?? </h2>

    <a href="{{ route('info')}}">CLicca per maggiori info!</a>
    
</body>
</html>