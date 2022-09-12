@extends('layouts.app')

@section('content')
    <div class="content-home-buyer">
        <div class="content-cards-buyer">
            <input type="text"
                id="homeOrder"
                value="{{URL::route('homeOrder')}}"
                hidden
            >
            <input
                type="text"
                id="tokenOrder"
                value="{{ csrf_token() }}"
                hidden
            >
            @foreach ($products as $product)
                <div class="content-card-product-home">
                    <a href={{URL::route('profile.show', ['id' => $product->user->id])}}>
                        <div class="content-perfil-sellerProduct">
                            <img src="{{ URL::asset('assets/img/profile/profile.jpg') }}" alt="">{{$product->user->name}}
                        </div>
                    </a>
                    <h2><b>Producto:</b> {{ $product->get_excerpt_title }}</h2>
                    <h6><b>Descripción:</b> {{ $product->get_excerpt }}</h6>
                    <a href="{{ route('post', $product->id) }}" >leer más </a>
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
