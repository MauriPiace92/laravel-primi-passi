<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info-Paese</title>

    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="info-container">
        <h1>{{ $paese}}:</h1>

        <h3>{{$info}}</h3>

        <ul>
            <h4>Le frazioni del comune sono:</h4>
            @foreach ( $frazioni as $frazione)
                <li>{{ $frazione }}</li>
            @endforeach
        </ul>

        <a href="{{ route('home')}}">Torna alla home</a>
    </div>



    
</body>
</html>