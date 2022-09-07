@extends('layouts.app')

@section('content')
    <div class="cards-orders-ofBuyer-cards-donate-ofBuyer">
        <div class="content-home-seller">
            <div>
                <div class="titles-cards-ofBuyer">
                    PEDIDOS
                </div>
                <div class="content-cards-orders-ofBuyer">
                    @foreach ($orders as $order)
                        <div class="cards-orders-ofBuyer">
                            <h1><span>{{ $order->buyer->name }}</span></h1>
                            <h3><span>{{ $order->quantity }}</span> <span>{{ $order->post->title }}</span></h3>
                            <h2>$<span>{{ $order->price }}</span></h2>
                            <div class="buttons-orders-ofBuyer">
                                <form action="{{ route('homeUpdatedOrder', ['idOrder' => $order->id]) }}" method="post">
                                    @csrf
                                    <input type="text" name="status" value="complete" hidden />
                                    <input type="submit" class="button-login button-acept-order-ofBuyer" value="Aceptar" />
                                </form>
                                <form action="{{ route('homeUpdatedOrder', ['idOrder' => $order->id]) }}" method="post">
                                    @csrf
                                    <input type="text" name="status" value="delete" hidden />
                                    <input type="submit" class="button-login button-decline-order-ofBuyer"
                                        value="Rechazar" />
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="content-donates-ofBuyer">
                <div class="titles-cards-ofBuyer">
                    DONACIONES
                </div>
                <div class="cards-donate-ofBuyer">
                    <h1>Nombre Cliente</h1>
                    <h3 style="color: blue">$$$Donacion</h3>
                    <h6>Espero te sirva. Saludos.</h6>
                </div>
            </div>
        </div>
    </div>
@endsection
