
<div class="content-header-profile">
    <div class="content-image-profile" onclick="viewProfile()">
        <img src="{{URL::asset('assets/img/profile/profile.jpg')}}" alt="">
    </div>
    <div class="content-info-profile"{{$user = Auth::user()}}>

        <h4>{{$user->name}}</h4>
    </div>
 </div>



 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<div id="profile-box" class="profile-box">
    <div class="content-profile">
        <a href="{{ url('/profile') }}">
            <div class="option-profile">Mi perfil</div>
        </a>
        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <div class="option-profile">Cerrar sesion</div>
        </a>
    </div>
</div>
