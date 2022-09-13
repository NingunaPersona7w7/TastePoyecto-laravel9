@extends('layouts.app')

@section('content')
<section >
    <h2>Estilo A</h2>
    <div class="card estilo-a">
        <a href="#">
        <div class="img-container">
           <img src="" alt="producto 1">
        </div>
    </a>
        <div class="info-container">
       <h3>Hamburguesa</h3>
       <strong>5000$</strong>
       <span class="promo">15% de descuento</span>
       <span class="rating"> ★ ★ ★ ★ ★</span>
       <a href="" class="add-cart">Añadir al carrito</a>
    </div>
    </div>


    <div class="card estilo-a">
        <a href="#">
        <div class="img-container">
           <img src="" alt="producto 1">
        </div>
    </a>
    <div class="info-container"></div>
       <h3>Pizza</h3>
       <strong>5000$</strong>
       <span class="promo">15% de descuento</span>
       <span class="rating"> ★ ★ ★ ★ ★</span>
       <a href="" class="add-cart">Añadir al carrito</a>
    </div>
    </div> 
</section>
@endsection
