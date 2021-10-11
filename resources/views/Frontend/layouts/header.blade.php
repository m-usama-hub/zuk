<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container custom_container">
            <a class="navbar-brand" href="/"><img src="{{ asset('Frontend/img/logo.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::url() == route('indexProfessional') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('indexProfessional') }}">Find a Professional <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{ Request::url() == route('indexItem') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('indexItem') }}">Buy & Sell Items</a>
                    </li>
                    <li class="nav-item {{ Request::url() == route('indexProperty') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('indexProperty') }}">Find a Property</a>
                    </li>
                    <li class="nav-item {{ Request::url() == route('indexHousemate') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('indexHousemate') }}">Find a Housemate</a>
                    </li>
                    <li class="nav-item {{ Request::url() == route('indexMessage') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('indexMessage') }}">Share a Message</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            More
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            @if (Auth::user())

                                @if (Auth::user()->UserHasBusinessProfile())

                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                        data-target="#postproject">Post your
                                        project/job</a>
                                @endif
                            @endif

                            <a class="dropdown-item pt-5" href="#">Search projects/jobs</a>

                    </li>
                    @if (!Auth::user())
                        <li class="nav-item login-btn">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#signup"
                                style="color:white !important">Join</a>
                        </li>
                        <li class="nav-item dropdown sign_up_btn">
                            <a class="nav-link" href="#" id="navbarDropdown" data-toggle="modal"
                                data-target="#welcome" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Sign In
                            </a>
                            {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div> --}}
                        </li>
                    @else
                        @if (Auth::user()->isUserLoggedIn())
                            <li class="nav-item login-btn">
                                <a class="nav-link" href="#" data-toggle="modal" data-target="#myaccount"
                                    style="color:white !important">{{ Auth::user()->name }}</a>
                            </li>
                        @else

                            <li class="nav-item login-btn">
                                <a class="nav-link" href="{{ route('home') }}"
                                    style="color:white !important">{{ Auth::user()->name }}</a>
                            </li>

                        @endif

                    @endif

                    <li class="nav-item dropdown language-btn">
                        <a class="nav-link dropdown-toggle" href="#" id="language-dropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img
                                src="{{ asset('Frontend/img/england-flag.png') }}" alt=""> </a>
                        <div class="dropdown-menu" aria-labelledby="language-dropdown"> <a class="dropdown-item"
                                href="#">French</a> </div>
                    </li>

                </ul>
                <!-- <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>
</header>
