@extends('layouts.app')

@section('content')
    <div class="content-profile-seller">
        <div class="content-info-profile-seller">
            <div class="content-profile-avatar">
                <div class="photo-profile">
                    <img src="{{URL::asset('assets/img/profile/profile.jpg')}}">
                </div>
                <center><a class="button-login" href="{{ route('users.edit', $user->id) }}">Editar usuario</a></center>
                <button class="button-login">Mensajes</button>
            </div>
            <div class="profile-info">
                <h4>{{$user->name}}</h4>
                @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $roleName)
                    <h4><span class="">{{ $roleName }}</span></h4>
                @endforeach
            @endif
                <h4>{{$user->email}}</h4>
            </div>
            <div class="content-profile-qualification">
                @for ($i = 1; $i <=$qualification; $i++)
                    <img src="{{URL::asset('assets/img/icons/Star.png')}}" class="star-icon">
                @endfor
            </div>
        </div>
        <div class="f1"></div>
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
                                    @for ($i = 1; $i <=$item["reviews"]; $i++)
                                        <img src="{{URL::asset('assets/img/icons/Star.png')}}" class="star-icon-reviews">
                                    @endfor
                                </div>
                                <div class="content-comment">
                                    <p>{{$item["comment"]}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                </div>
            </div>
            <div id="product-content" style="display: none;"></div>
            <div id="history-content" style="display: none;"></div>
        </div>
        <div class="f1"></div>
    </div>
@endsection
