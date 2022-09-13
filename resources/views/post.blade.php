@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $post->title }}</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $post->body}}</p>
                        <!-- poner boton que redireccione a compra -->
                        <p class="text-muted mb-0">
                            <em>
                                &ndash; {{ $post->user->name }}
                            </em>
                            {{ $post->created_at->format('d M Y') }}
                        </p>

                        <!-- section comentarios  -->
                        <div>
                            <a href="{{ route('comments', $post->id) }}" class="btn btn-primary">Ver comentarios </a>
                        </div>
                        <!-- end section   -->

                        </div>
                    </div>
                </div>
                <br>
        </div>
    </div>
</div>
@endsection
