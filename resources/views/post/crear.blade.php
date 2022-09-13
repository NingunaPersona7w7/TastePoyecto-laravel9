@extends('layouts.app')

@section('content')
    <section class="section">
        <center><b><div class="form-title-group1">
            <h3 class="page__heading">Crear post</h3>
        </div></b></center>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cardo">
                        <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>¡Revise los campos!</strong>
                                    @foreach ($errors->all() as $error)
                                        <span class="badge badge-danger">{{ $error }}</span>
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <form action="{{ route('posts.store') }}" method="POST"  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="titulo">Título</label>
                                            <input type="text" name="title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="precio">Precio</label>
                                            <input type="text" name="price" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <div class="form-floating">
                                            Contenido
                                            <textarea class="form-control" name="body" style="height: 100px"></textarea>
                                            <label for="contenido"></label>
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Imagen</label>
                                            <input class="form-control" type="file" name="image">
                                        </div>

                                        <center><button type="submit" class="button-login">Guardar</button></center>
                                    </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
