@extends('layouts.app')

@section('content')
    <div class="content-home-seller">
        <div class="orders-ofBuyer">
            PEDIDOS
            <div class="cards-orders-ofBuyer">
                <button class="button-close">X</button>
                <h1>Nombre Cliente</h1><h3>PEDIDO</h3>
                <div class="buttons-orders-ofBuyer">
                    <button class="button-login button-acept-order-ofBuyer">Aceptar</button>
                    <button class="button-login button-decline-order-ofBuyer">Rechazar</button>
                </div>
            </div>
        </div>
        <div class="cards-donate-ofBuyer">
        
        </div>
    </div>
@endsection
