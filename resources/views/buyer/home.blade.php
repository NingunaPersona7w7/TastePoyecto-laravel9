@extends('layouts.app')

@section('content')
    <div class="content-home-buyer">
        <div class="content-cards-buyer">
            <input type="text" id="homeOrder" value="{{URL::route('homeOrder')}}" hidden>
            <input type="text" id="tokenOrder" value="{{ csrf_token() }}" hidden>
            @foreach ($products as $product)
                <div class="content-card-product-home">
                    <div class="content-perfil-sellerProduct">
                        <img src="{{ URL::asset('assets/img/profile/profile.jpg') }}" alt="">
                    </div>
                    <h2><b>Producto:</b> {{ $product->title }}</h2>
                    <h6><b>Descripción:</b> {{ $product->body }}</h6>
                    <h5 style="bacground-color:"><b>Precio: ${{ $product->price }}</b></h5>

                    <div class="content-card-buy" {{$user = Auth::user()}}>
                        <input type="number" class="counter-products" min="1" pattern="^[0-9]+" name="amountFood" id="quantity-{{$product->id}}">
                        <button class="button-login" name="buy" onclick="confirmSale({{ json_encode($product) }}, {{$user->id}})"><u>Comprar</u></button>
                    </div>
                    <div class="img-product">
                        <img src="{{ URL::asset($product->image) }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
