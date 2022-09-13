@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('roles') }}</div>

                <div class="card-body">

                    @can('crear-stori')
                        <a class="btn btn-warning" href="{{ route('stories.create') }}">Nuevo</a>
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
                            @foreach($stories as $stori )
                            <tr>
                                <td style="display: none;">{{ $stori->name }}</td>
                                <td >{{ $stori->title }}</td>
                                <td >{{ $stori->body }}</td>
                                <td >{{ $stori->price }}</td>
                                <td>
                                    <form action="{{ route('stories.destroy',$post->id) }}" method="POST">
                                        @can('editar-stori')
                                            <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}" class="btn btn-primary">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('eliminar-stori')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination justify-content-end">
                        {!! $stories->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
