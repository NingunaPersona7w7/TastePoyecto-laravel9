@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('roles') }}</div>

                <div class="card-body">

                    @can('crear-comment')
                        <a class="btn btn-warning" href="{{ route('comments.create') }}">Nuevo</a>
                    @endcan
                    <table class="table table-striped mt-2">
                        <thead style="background-color: #677ef;">
                            <th style="display: none;" > ID</th>
                            <th style="color: rgb(0, 0, 0)" > Titulo</th>
                            <th style="color: rgb(0, 0, 0)" > Contenido</th>
                            <th style="color: rgb(0, 0, 0)" > Precio</th>
                            <th style="color: rgb(0, 0, 0)">Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($comments as $comment )
                            <tr>
                                <td style="display: none;">{{ $comment->name }}</td>
                                <td >{{ $comment->title }}</td>
                                <td >{{ $comment->body }}</td>
                                <td >{{ $comment->price }}</td>
                                <td>
                                    <form action="{{ route('comments.destroy',$post->id) }}" method="POST">
                                        @can('editar-comment')
                                            <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}" class="btn btn-primary">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('eliminar-comment')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination justify-content-end">
                        {!! $comments->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
