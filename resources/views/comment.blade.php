@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $comment->title }}</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $comment->body}}</p>
                        <p class="text-muted mb-0">
                            <em>
                                &ndash; {{ $comment->user->name }}
                            </em>
                            {{ $post->created_at->format('d M Y') }}
                        </p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection