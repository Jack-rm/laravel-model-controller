@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        
    @forelse ($movies as $movie)

        <div class="col-12">
            <h2 class="text-center">{{ $movie['title'] }}</h2>
        </div>

    @empty
    
    @endforelse
    </div>
</div>
@endsection