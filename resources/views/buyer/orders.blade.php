@extends('layouts.app')

@section('content')
<div class="content-all-orders">

    <div class="content-orders-buyer">
          
        <div class="content-invoice">
        </div><div id="app" class="col-11">

            <h2>Factura</h2>
        
            <div class="row my-3">
              <div class="col-10">
                <h1>Compra de {{$order->buyer->name}}</h1>
                @if ($order->status == "pending")
                    <style>
                        h3 {
                            color: #F4E948;
                        }
                    </style>
                @elseif ($order->status == "complete")
                    <style>
                        h3 {
                            color: #48F462;
                        }
                    </style>
                @elseif ($order->status == "delete")
                    <style>
                        h3 {
                            color: #C70039;
                        }
                    </style>
                @endif
                <h3>Estado: {{$order->status}}</h3>
                <P>direccion</P>
              </div>
              <div class="col-2">
                <img class="content-logo-invoice" src="{{ URL::asset('assets/img/icons/food.png') }}"/>
              </div>
            </div>
          
            <hr />
          
            <div class="row fact-info mt-3">
                <div class="col-3">
                  <h5>Vendedor</h5>
                </div>
                
                <div class="col-3">
                    <a href="{{ route('profile.edit')}}">
                        <p>{{$order->seller->name}}</p>
                    </a>
                </div>
              </div>
            <div class="row fact-info mt-3">
              <div class="col-3">
                <h5>Pedido</h5>
              </div>
              
              <div class="col-3">
                <p>{{$order->created_at}}</p>
              </div>
            </div>
          
            <div class="row my-5">
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
@endsection
