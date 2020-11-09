<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('sass/styles.scss') }}">

    <title>R&M Test - {{ $page_title ?? 'Encyclopedia' }}</title>
    <style>
        html {
            background: #B7E4f9FF;
        }

        .flex-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .flex-box {
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

        .episode-list {
            column-count: 2;
            list-style: none;
        }

        .episode-list li {
            margin: 5px;
        }

        ul.nav a {
            margin: auto 10px;
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
        }

        ul.nav {
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none;
        }

        .form-item label {
            margin: 3px;
        }

        .form-item {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 15px;
        }

    </style>
</head>
<nav>
    <ul class="nav">
        <li><a href="/">Home</a></li>
        <li><a href="/search">Search</a></li>
    </ul>
</nav>
@yield('body')

</html>
