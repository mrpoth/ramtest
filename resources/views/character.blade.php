@extends('master')
@section('title')
@section('body')
<body>
    <div class="flex-container">

            <div class="flex-box">
                <a href="/character/?id={{ $character['id'] }}">
                    <img class="char-image" src="{{ $character['image'] }}" />
                    <h3>Name: {{ $character['name'] }}</h3>
                </a>
                <h3>Species: {{ $character['species'] }}</h3>
                <h3>Origin: {{ $character['origin']['name'] }}</h3>
                <h4>Episodes:</h4>
                <ul class="episode-list">
                    @foreach ($episodes as $episode)
                        <li>{{ $episode['name'] }} ({{$episode['id']}})</li>
                    @endforeach
                </ul>
            </div>
    </div>
</body>
@endsection
