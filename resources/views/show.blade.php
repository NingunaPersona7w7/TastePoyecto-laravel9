@extends('layouts.admin')
@section('content')
@include('alerts.request')

    {!!Form::model($comment,['route'=>['comment.show',$comment->id],'method'=>'POST','files'=>true])!!}

<p class="info">TITULO:&nbsp;&nbsp;{{ $comment->tittle }}</p>
<p class="info">CUERPO:&nbsp;&nbsp;{{ $comment->body }}</p>

    {!!Form::close()!!}

@stop