@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Historias') }}</div>

                <div class="card-body">

                    @can('crear-stori')
                        <a class="btn btn-warning" href="{{ route('stories.create') }}">Nuevo</a>
                    @endcan
                    
                    <!-- <table class="table table-striped mt-2"> -->
                     <table class="table table-striped1 mt-2">
                        <thead style="background-color: #677ef;">
                            <th style="display: none;" > ID</th>
                            <th style="color: rgb(0, 0, 0)" > Titulo</th>
                            <th style="color: rgb(0, 0, 0)" > Contenido</th>
                        </thead>
                        <tbody >
                            @foreach($stories as $stori )
                            <table class="table table-striped1 mt-2">
                                <tr>
                                     <td>
                                        <div class="card-body">
                                            {{ $stori->title }}
                                        </div>
                                    </td>
                                    <td >
                                        {{ $stori->body }}
                                    </td>
                                    <td> 
                                        <form action="{{ route('stories.destroy',$stori->id) }}" method="POST">
                                            @can('editar-stori')
                                                <a class="btn btn-primary" href="{{ route('stories.edit',$stori->id) }}" class="btn btn-primary">Editar</a>
                                            @endcan

                                            @csrf
                                            @method('DELETE')
                                            @can('eliminar-stori')
                                            <button type="submit" class="btn btn-danger">Borrar</button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                            </table>
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
