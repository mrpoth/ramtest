@extends('master')

@section('body')

    <div class="flex-container">
        @foreach ($results['results'] as $result)
            <div class="flex-box">
                <a href="/character/?id={{ $result['id'] }}">
                    <img class="char-image" src="{{ $result['image'] }}" />
                    <h3>Name: {{ $result['name'] }}</h3>
                </a>
                <h3>Species: {{ $result['species'] }}</h3>
                <h3>Origin: {{ $result['origin']['name'] }}</h3>
                <h4>Total Episodes: {{ count($result['episode']) }}</h4>
            </div>
        @endforeach
    </div>
    <div class="pagination">
        @if ($prev)
            <a id="prev" href="/results/?{{ $prev }}">Previous</a>
        @endif
        @if ($next)
            <a id="next" href="/results/?{{ $next }}">Next</a>
        @endif
    </div>

@endsection
