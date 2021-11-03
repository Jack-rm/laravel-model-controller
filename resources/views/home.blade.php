@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row row-cols-5">
        
    @forelse ($movies as $movie)

        <div class="col">
            <div class="movie-box">
                <h5>{{ $movie['title'] }}</h5>
                <h6>{{ $movie['original_title'] }}</h6>
                <span><b>Nationality:</b> {{ $movie['nationality'] }}</span><br>
                <date><b>Release Date:</b> {{ $movie['date'] }}</date>
            </div>
        </div>

    @empty
    
    @endforelse
    </div>
</div>
@endsection