@extends('master')

@section('body')

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
            @if ($prev)
                <a id="prev" href="/?{{ $prev }}">Previous</a>
            @endif
            @if ($next)
                <a id="next" href="/?{{ $next }}">Next</a>
            @endif
        </div>
    </body>

@endsection
