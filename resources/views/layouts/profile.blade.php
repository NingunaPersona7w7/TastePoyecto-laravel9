
<div class="content-header-profile">
    <div class="content-image-profile" onclick="viewProfile()">
        <img src="{{URL::asset('assets/img/profile/profile.jpg')}}" alt="">
    </div>
    <div class="content-info-profile"{{$user = Auth::user()}}>

        <h4>
        @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $roleName)
                <span class="">{{ $roleName }}</span>
            @endforeach
        @endif
        {{$user->name}}</h4>
    </div>
</div>



<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<div id="profile-box" class="profile-box">
    <div class="content-profile">
        <a href="{{ url('/user') }}">
            <div class="option-profile">crud</div>
        </a>
        <a href="{{ url('/profile') }}">
            <div class="option-profile">Mi perfil</div>
        </a>
        <a href="{{ url('/roles') }}">
            <div class="option-profile">roles</div>
        </a>
        <a href="{{ url('/posts') }}">
            <div class="option-profile">comida</div>
        </a>

        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <div class="option-profile">Cerrar sesion</div>
        </a>
    </div>
</div>
