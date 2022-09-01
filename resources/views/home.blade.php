@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="content-products">
                <div class="content-perfilDescriptionProduct">
                    <div class="content-perfil-sellerProduct">
                        <img src="{{URL::asset('assets/img/profile/profile.jpg')}}" alt=""> Pepita
                    </div>
                    <br><h2>Hamburguesa</h2>
                    <h6>Rica, lechuga, zanahoria y menudencias de loquito</h6>
                    <input type="number" class="counter-products" min="1" pattern="^[0-9]+">
                    <button class="button-login" name="buy">Comprar</button>
                </div>
                    <div class="img-product">
                        <img src="{{URL::asset('assets/img/icons/food.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
