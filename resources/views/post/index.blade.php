@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="cardo">
                <center><b><div class="form-title-group1">{{ __('roles') }}</div></b></center>

                <div class="card-body">

                    @can('crear-post')
                        <center><a class="btn btn-warning" href="{{ route('posts.create') }}">Nuevo</a></center>
                    @endcan
                    <table class="table table-striped1 mt-2">
                        <thead style="background-color: #677ef;">
                            <th style="display: none;" > ID</th>
                            <th style="color: rgb(0, 0, 0)" > Titulo</th>
                            <th style="color: rgb(0, 0, 0)" > Contenido</th>
                            <th style="color: rgb(0, 0, 0)" > Precio</th>
                            <th style="color: rgb(0, 0, 0)">Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($posts as $post )
                            @if ($post->user_id == Auth::user()->id)
                                <tr>
                                    <td style="display: none;">{{ $post->name }}</td>
                                    <td >{{ $post->title }}</td>
                                    <td >{{ $post->body }}</td>
                                    <td >{{ $post->price }}</td>
                                    <td>
                                        <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                            @can('editar-post')
                                                <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}" class="btn btn-primary">Editar</a>
                                            @endcan

                                            @csrf
                                            @method('DELETE')
                                            @can('eliminar-post')
                                            <button type="submit" class="btn btn-danger">Borrar</button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                            @endif

                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination justify-content-end">
                        {!! $posts->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
