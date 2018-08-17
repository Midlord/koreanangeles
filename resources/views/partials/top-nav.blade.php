<nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
<a class="navbar-brand" href="{{url('/')}}">Korean Angeles</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
            <form class="form-inline my-1 mr-3">
                <div class="md-form form-sm my-0">
                    <input class="form-control form-control-sm mr-sm-2 mb-0" type="text" placeholder="Search" aria-label="Search">
                </div>
                <button class="btn btn-outline-white btn-sm my-0" type="submit">Search</button>
            </form>
            @if(auth()->check())
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-gear"></i> Settings</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i> Profile </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                <a class="dropdown-item" href="profile/{{Auth::user()->id}}">My account</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">Log out</a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
            @else
            <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}"><i class="fa fa-sign-in ml-1"></i>Login</a>
            </li>
            @endauth
        </ul>
    </div>
</nav>
