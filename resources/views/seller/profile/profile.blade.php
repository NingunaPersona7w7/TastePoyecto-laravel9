@extends('layouts.app')

@section('content')
    <div class="content-profile-seller">
        <div class="content-info-profile-seller">
            <div class="content-profile-avatar">
                <div class="photo-profile">
                    <img src="{{ URL::asset($user->image) }}">
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

                                                                    <!-- Botones del perfil -->

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
                                                                    <!-- Fin botones -->

                                                                    <!-- Reseñas -->

            <div class="content-description-profile-seller">

                <div id="review-content" class="content-reviews-profile" style="display: none;">

                    <div class="content-buttons-info-profile">
                        <div class="reviews-info-profile">
                            @foreach ($qualifications as $comment)
                                <div class="content-card-qualification">
                                    <div class="content-star">
                                        @for ($i = 1; $i <= $comment->calification; $i++)
                                            <img src="{{ URL::asset('assets/img/icons/Star.png') }}"
                                                class="star-icon-reviews">
                                        @endfor
                                    </div>
                                    <div class="content-comment">
                                        <h5>{{ $comment->title }}</h5>
                                        <p>{{ $comment->body }}</p>
                                        <hr>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

                                                                    <!-- Productos -->

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
                        <a href="{{ route('posts.create') }}">
                            <center><button class="button-login circle-button" name="create-newProduct">Crear</button></center>
                        </a>
                    </div>
                </div>
            </div>

                                                                    <!-- Historia conmovedora -->

            <div id="history-content" class="content-history-profile" style="display: none;">
                <div class="content-create-newProduct">
                    <div class="mb-3">
                        <b>
                            <center><label for="exampleFormControlTextarea1" class="form-label">Escriba su historia</label>
                            </center>
                        </b>

                <div class="make-stories">
                    <h3>Escribe tu historia aquí</h3>
                        <form action="{{URL::route('stories.store')}}" method="POST">
                            @csrf
                                <input type="text" name="user_id" value="{{$user->id}}" hidden>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Titulo</label>
                                        <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Título de la historia">
                                    </div>
                                        <div class="form-group">
                                        <label for="exampleFormControlInput1">Cuerpo</label>
                                        <textarea class="form-control" name="body" id="exampleFormControlInput1" rows="3" placeholder="Contenido de la historia"></textarea>
                                        </div>
                                <input type="submit" class="button-login buttom-reviews" value="Enviar">
                        </form>
                </div>
            </div>
            <div class="f1"></div>
        </div>
    @endsection