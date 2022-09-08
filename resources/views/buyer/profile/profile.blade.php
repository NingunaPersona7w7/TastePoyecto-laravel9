@extends('layouts.app')

@section('content')
    <div class="content-profile-seller">
        <div class="content-info-profile-seller">
            <div class="content-profile-avatar">
                <div class="photo-profile">
                    <img src="{{ URL::asset('assets/img/profile/profile.jpg') }}">
                </div>
                <center><a class="button-login" href="{{ route('users.edit', $user->id) }}">Editar usuario</a></center>
                <button class="button-login">Mensajes</button>
            </div>
            <div class="profile-info">
                <h4>{{ $user->name }}</h4>
                @if (!empty($user->getRoleNames()))
                    @foreach ($user->getRoleNames() as $roleName)
                        <h4><span class="">{{ $roleName }}</span></h4>
                    @endforeach
                @endif
                <h4>{{ $user->email }}</h4>
            </div>
            <div class="content-profile-qualification">
                @for ($i = 1; $i <= $qualification; $i++)
                    <img src="{{ URL::asset('assets/img/icons/Star.png') }}" class="star-icon">
                @endfor
            </div>
        </div>

        <div class="content-buttonsProfile-inf">
            <div class="buttons-info-profile">
                <div id="review" class="button-profile selected" onclick="showOptionSelected('review')">
                    Reseñas
                </div>
                <div id="product" class="button-profile" onclick="showOptionSelected('product')">
                    Productos
                </div>
                <div id="history" class="button-profile" onclick="showOptionSelected('history')">
                    Historia
                </div>
            </div>
            <div class="content-description-profile-seller">

                <div id="review-content" class="content-reviews-profile" style="display: block;">

                    <div class="content-buttons-info-profile">
                        <div class="reviews-info-profile">
                            @foreach ($qualifications as $item)
                                <div class="content-card-qualification">
                                    <div class="content-star">
                                        @for ($i = 1; $i <= $item['reviews']; $i++)
                                            <img src="{{ URL::asset('assets/img/icons/Star.png') }}"
                                                class="star-icon-reviews">
                                        @endfor
                                    </div>
                                    <div class="content-comment">
                                        <p>{{ $item['comment'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div id="product-content" class="content-products-profile" style="display: none;">
                <div class="product-content">
                    <div class="carousel-products">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($products as $product)
                                    <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                                        <img src="{{ URL::asset($product->image) }}" style="width: 350px;">
                                        <div class="card-carousel-inf">
                                            <br><b>Producto:</b> {{ $product->title }}
                                            <br><b>Descripción:</b> {{ $product->body }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="content-create-newProduct">
                        <form role="form" method="POST" action="{{ route('postCreate') }}">
                            @csrf
                            <div class="mb-3">
                                <b>
                                    <center><label for="formFile" class="form-label">Foto del producto</label></center>
                                </b>
                                <input class="form-control" type="file" id="formFile" name="image">
                            </div>
                            <div class="mb-3">
                                <b>
                                    <center><label for="exampleFormControlTextarea1" class="form-label">Nombre del
                                            producto</label></center>
                                </b>
                                <input class="form-control" id="exampleFormControlInputTitle" type="text" name="title" />
                            </div>
                            <div class="mb-3">
                                <b>
                                    <center><label for="exampleFormControlTextarea1" class="form-label">Descripción del
                                            producto</label></center>
                                </b>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body"></textarea>
                            </div>
                            <center><button class="button-login circle-button" name="create-newProduct">+</button></center>
                        </form>
                    </div>
                </div>
            </div>
            <div id="history-content" class="content-history-profile" style="display: none;">
                <div class="content-create-newProduct">
                    <div class="mb-3">
                        <b>
                            <center><label for="formFile" class="form-label">Fotos de su historia</label></center>
                        </b>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <b>
                            <center><label for="exampleFormControlTextarea1" class="form-label">Escriba su historia</label>
                            </center>
                        </b>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="buttons-history-seller">
                        <button class="button-login circle-button" name="buttons-history-seller">Subir</button>
                        <button class="button-login circle-button" name="buttons-history-seller">Editar</button>
                    </div>
                </div>
            </div>
            <div class="f1"></div>
        </div>
    @endsection
