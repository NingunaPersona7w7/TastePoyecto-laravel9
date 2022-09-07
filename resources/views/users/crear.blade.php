@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="cardo">
                <center><b><div class="form-title-group1">{{ __('Crear usuario') }}</div></b></center>

                <div class="card-body">

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

                    {!! Form::open(['route' => ['users.store'], 'method' => 'POST']) !!}
                        <div class="form-group1">
                            {!! Form::label('name', 'Nombre') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
                        </div>
                        <div class="form-group1">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                        </div>
                        <div class="form-group1">
                            {!! Form::label('password', 'Contraseña') !!}
                            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña']) !!}
                        </div>
<<<<<<< HEAD
                        <div class="form-group1">
                            {!! Form::label('password_confirmation', 'Confirmar contraseña') !!}
                            {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmar contraseña']) !!}
                        </div>
                        <div class="form-group1">
=======
                        <div class="form-group">
                            {!! Form::label('confirm-password', 'Confirmar contraseña') !!}
                            {!! Form::password('confirm-password', ['class' => 'form-control', 'placeholder' => 'Confirmar contraseña']) !!}
                        </div>
                        <!-- arreglar roles en crear usuario-->
                        <div class="form-group">
>>>>>>> 67e152c2865d1f3142819bb96ada198d4a64b87b
                            {!! Form::label('rol', 'Rol') !!}
                            {!! Form::select('role', $roles, [], ['class' => 'form-control']) !!}
                        </div>
                        <center><div class="form-group1">
                            {!! Form::submit('Crear', ['class' => 'button-login']) !!}
                        </div></center>
                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
