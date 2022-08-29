@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear rol') }}</div>

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

                    {!! Form::model($role, ['method' =>'PATCH', 'route' => ['roles.update', $role->id]]) !!}
                    <div class="row">
                        <div class="form-group">
                            {!! Form::label('rol', 'Nombre del rol') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-grou">
                            <label for="">Permisos para este rol</label>
                            <br/>
                            @foreach ($permission as $value)
                                <label>
                                    {{ Form::checkbox('permission[]', $value->id, in_array($value->id,$rolePermission) ? true : false, ['class' => 'name']) }}
                                    {{ $value->name }}
                                </label>
                                <br/>
                            @endforeach
                        </div>
                    </div>
                        <div class="form-group">
                            {!! Form::submit('guardar', ['class' => 'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
