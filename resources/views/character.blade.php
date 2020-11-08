<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <h2>Name: {{ $character['name'] }}</h2>
        <h3>Episodes:</h3>
            @foreach ($episodes as $episode)
                <p>{{ $episode }}</p>
            @endforeach
    </div>
</body>

</html>
