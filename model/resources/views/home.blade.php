@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-2 row-cols-md-4 g-4">

            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card" style="">
                        <div class="card-body m-0">
                            <h5 class="card-title">{{ $movie['title'] }}</h5>
                            <p class="card-text text-muted">
                                ({{ $movie['original_title'] }})
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
