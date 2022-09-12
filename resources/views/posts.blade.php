@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($posts as $post)
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $post->title }}</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $post->get_excerpt }}</p>
                        <a href="{{ route('post', $post->id) }}" class="btn btn-primary">leer mas</a>
                    </div>

                </div>
                <br>

            @endforeach

        </div>
    </div>
</div>
@endsection
