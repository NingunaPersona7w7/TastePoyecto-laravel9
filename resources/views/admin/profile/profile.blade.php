@extends('layouts.app')

@section('content')
    <div class="content-profile-buyer">
        <div class="content-info-profile-seller">
            <div class="content-profile-avatar">
                <div class="photo-profile">
                    <img src="{{ URL::asset('assets/img/profile/profile.jpg') }}">
                </div>
                <center><a class="button-login" href="{{ route('users.edit', $user->id) }}">Editar usuario</a></center>
                <button class="button-login"> <a style="text-decoration:none; color: rgb(182, 194, 194);" href="mailto:{{$user->email}}">Mensajes</a></button>
            </div>
            <div class="profile-info">
                <h4>{{ $user->name }}</h4>
                <h4>{{ $user->email }}</h4>
            </div>
        </div>
        <div class="content-invoices" >
            @foreach ($orders as $order)
                <div class="card-invoice" onclick="redirectOrder({{$order->id}})">
                    <h2>Factura</h2>
                    <div class="my-3">
                        <div class="col-10">
                            <h1>Compra de {{$order->buyer->name}}</h1>
                            @if ($order->status == "pending")
                                <h3 class="c-y">Estado: {{$order->status}}</h3>
                            @elseif ($order->status == "complete" )
                                <h3 class="c-g">Estado: {{$order->status}}</h3>
                            @elseif ($order->status == "delete")
                                <h3 class="c-r">Estado: {{$order->status}}</h3>
                            @endif

                            <P>direccion</P>
                        </div>
                        <div class="col-2">
                            <img class="content-logo-invoice" src="{{ URL::asset('assets/img/icons/food.png') }}"/>
                        </div>
                    </div>
                    <hr />
                    <div class="fact-info mt-3">
                        <div class="col-3">
                            <h5>Vendedor</h5>
                        </div>

                        <div class="col-3">
                            <a href="{{ URL::route('profile.show', ['id' => $order->seller->id])}}">
                                <p>{{$order->seller->name}}</p>
                            </a>
                        </div>
                    </div>
                    <div class="fact-info mt-3">
                        <div class="col-3">
                            <h5>Pedido</h5>
                        </div>

                        <div class="col-3">
                            <p>{{$order->created_at}}</p>
                        </div>
                    </div>

                    <div>
                        <table class="table table-borderless factura">
                        <thead>
                            <tr>
                            <th>Cant.</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>{{$order->quantity}}</td>
                            <td>{{$order->post->title}}</td>
                            <td>${{$order->price}}</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                            <th></th>
                            <th>Total Factura</th>
                            <th>${{$order->price}}</th>
                            </tr>
                        </tfoot>
                        </table>
                    </div>

                </div>

            @endforeach
        </div>
    </div>
    <script>
        function redirectOrder(id) {
            const url = "{!! URL::route('order.show', ['id' => '$id']) !!}"
            window.location.href = url.replace('%24id', id);
        }
    </script>
@endsection
