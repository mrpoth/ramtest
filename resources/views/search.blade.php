@extends('master')
@section('body')
    @if ($errors->any())
    <div class="flex-container">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <h4>{{ $error }}</h4>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <form action="/results" method="POST" class="search-form">
        @csrf
        <div class="form-item"><label for="name">Name</label><input type="text" name="name"></div>
        <div class="form-item"><label for="species">Species</label><input type="text" name="species"></div>
        <div class="form-item"><label for="status">Status</label><input type="text" name="status"></div>
        <div class="form-item"><label for="gender">Gender</label><input type="text" name="gender"></div>
        <div class="form-item"><button type="submit" id="search_submit">Search!</button></div>
    </form>
@endsection
