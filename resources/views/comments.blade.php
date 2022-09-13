@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($comments as $comment)
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $comment->tittle }}</h5>
                    <p class="text">{{ $comment->get_except }}</p>
                        <a href="{{ route('comment', $comment->id) }}">Leer más</a>
                    <p class="text-muted mb-0">
                        <em>
                            &ndash; {{ $comment->user->name }}
                        </em>
                        {{ $comment->created_at->format('d M Y') }}
                    </p>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
