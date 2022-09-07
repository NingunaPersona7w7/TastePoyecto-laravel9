
<div class="content-header-profile">
    <div class="content-image-profile" onclick="viewProfile()">
    <a class="name-profile" href="{{ url('/profile') }}">
            <img src="{{URL::asset('assets/img/profile/profile.jpg')}}" alt="">
        </div>
        <div class="content-info-profile"{{$user = Auth::user()}}>
            
                <h5>
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $roleName)
                        <span class="">{{ $roleName }}</span><br>
                    @endforeach
                @endif
                {{$user->name}}</h5>
    </a>
    </div>
</div>



<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>