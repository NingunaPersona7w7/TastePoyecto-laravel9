@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('crud Administrador') }}</div>

                <div class="card-body">

                    <a class="btn btn-warning" href="{{ route('users.create') }}">Create User</a>
                    <table class="table table-striped mt-2">
                        <thead style="background-color: #677ef;">
                            <th style="display: none;" > ID</th>
                            <th style="color: rgb(0, 0, 0)" > nombre</th>
                            <th style="color: rgb(0, 0, 0)" > Email</th>
                            <th style="color: rgb(0, 0, 0)" > rol</th>
                            <th style="color: rgb(0, 0, 0)">Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($users as $user )
                            <tr>
                                <td style="display: none;">{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if(!empty($user->getRolName))
                                        @foreach($user->getRolName as $role)
                                            {{ $roleName->name }}
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="{{ route('users.edit', $user->id) }}">Editar usuarior</a>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['users.destroy', $user->id], 'style' => 'display:inline']) !!}
                                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination justify-content-end">
                        {!! $users->links() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
