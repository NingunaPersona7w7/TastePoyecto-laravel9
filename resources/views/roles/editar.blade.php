@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="cardo">
                <center><b><div class="form-title-group1">{{ __('Editar rol') }}</div></b></center>

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
 
                    
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">

                    {!! Form::model($role, ['method' =>'PATCH', 'route' => ['roles.update', $role->id]]) !!}
                    <div class="row">
                        <div class="form-group1">
                            {!! Form::label('rol', 'Nombre del rol') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group1">
                            <label for="">Permisos para este rol</label>
                            <br/>
                            @foreach ($permission as $value)
                                <label>
                                    {{ Form::checkbox('permission[]', $value->id, false, ['class' => 'name']) }}
                                    {{ $value->name }}
                                </label>
                                <br/>
                            @endforeach
                        </div>
                    </div>
                        <center><div class="form-group1">
                            {!! Form::submit('Guardar', ['class' => 'button-login']) !!}
                        </div></center>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
