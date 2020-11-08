<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ mix('js/app.js') }}" defer></script>

    <title>Document</title>
</head>

<body>
    <div id="app">
        {{-- <single-character :character="{{ json_encode($character) }}">
            </single-character"> --}}
            <characters :characters="{{ json_encode($characters) }}">
                </characters">
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
