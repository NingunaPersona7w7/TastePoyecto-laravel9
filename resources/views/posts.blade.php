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
                        <a href="{{ route('post', $post->id) }}" class="btn btn-primary">leer más </a>
                        <p class="text-muted mb-0">
                            <em>
                                &ndash; {{ $post->user->name }}
                            </em>
                            {{ $post->created_at->format('d M Y') }}
                        </p>
                    </div>

                </div>
                <br>

            @endforeach
                {{$posts->links()}}
        </div>
    </div>
</div>
@endsection
