<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ mix('js/app.js') }}" defer></script>

    <title>Document</title>
    <style>
        .flex-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .flex-box {
            margin: 10px;
            border: 1px solid black;
            width: 400px;
            max-width: 100%;
            text-align: center;
        }

        .char-image {
            margin: 10px auto;
            display: block;
            max-width: 100%;
            height: auto;
        }

        .pagination a {
            display: block;
            margin: auto 10px;
            font-size: 23px;
            background-color: #e7e865;
            padding: 5px;
            color: #8dc9c1;
            font-weight: bold;
            border-radius: 5px;
        }

        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>
</head>

<body>
    <div class="flex-container">

        @foreach ($characters as $character)
            <div class="flex-box">
                <a href="/character/?id={{ $character['id'] }}">
                    <img class="char-image" src="{{ $character['image'] }}" />
                    <h3>Name: {{ $character['name'] }}</h3>
                </a>
                <h3>Species: {{ $character['species'] }}</h3>
                <h3>Origin: {{ $character['origin']['name'] }}</h3>
                <h4>Total Episodes: {{ count($character['episode']) }}</h4>
            </div>
        @endforeach
    </div>

    <div class="pagination">
        <a id="prev">Previous</a>
        <a id="next" href="/?page=2">Next</a>
    </div>
</body>
<script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const page = urlParams.get('page')
    const numericalPage = parseInt(page);
    const nextPage = numericalPage + 1;
    let prevPage;
    if (numericalPage > 1) {
        prevPage = numericalPage - 1;
    }

    window.addEventListener('load', function() {
        if (!numericalPage) {
            document.getElementById('next').href = "/?page=2"
        } else {
            document.getElementById('next').href = `/?page=${nextPage}`
        }
        if (prevPage) {
            document.getElementById('prev').href = `/?page=${prevPage}`
        }
    })

</script>

</html>
