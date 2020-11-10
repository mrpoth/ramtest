<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ mix('css/styles.css') }}">

    <title>R&M Test - {{ $page_title ?? 'Encyclopedia' }}</title>
</head>
<nav>
    <ul class="nav">
        <li><a href="/">Home</a></li>
        <li><a href="/search">Search</a></li>
    </ul>
</nav>
@yield('body')

</html>
