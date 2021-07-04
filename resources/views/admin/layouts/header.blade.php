<nav class="navbar navbar-dark navbar-expand-lg bg-dark py-lg-4" id="mainNav">
    <div class="container"><a class="navbar-brand text-uppercase d-lg-none text-expanded" href="#">WMS</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.main') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.profile') }}">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.complaint') }}">Complaints</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.sms') }}">SMS</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div><button data-target="#navbarResponsive" data-toggle="collapse" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
    </div>
</nav>
