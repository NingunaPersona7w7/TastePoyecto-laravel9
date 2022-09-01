@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card text-bg-dark mb-1" style="max-width: 18rem, background-color : transparent;">
            <div>
                <div class="card-header">{{ __('Crear usuario') }}</div>

                <div class="card-body text-ligth">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Verifique los campos</strong>
                            @foreach ($errors->all() as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    @endif

                    {!! Form::model($user, ['method' =>'PATCH', 'route' => ['users.update', $user->id]]) !!}
                    <div class="row">
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'Contraseña') !!}
                            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password_confirmation', 'Confirmar contraseña') !!}
                            {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmar contraseña']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('rol', 'Rol') !!}
                            {!! Form::select('roles[]', $roles, $userRole, array('class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">    
                            {!! Form::submit('Crear', ['class' => 'btn btn-light']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
