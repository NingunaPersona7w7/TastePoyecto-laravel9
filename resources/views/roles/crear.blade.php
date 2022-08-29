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

                    {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 ">
                            <label for="">nombre del rol</label>
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
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
