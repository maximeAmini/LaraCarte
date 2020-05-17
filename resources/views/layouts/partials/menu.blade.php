<!-- Menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand text-center" href="{{ route('home') }}"> LaraCarte </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active"> <a class="nav-link" href="{{ route('home1') }}">home</a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('about') }}">about</a> </li>
                <li class="nav-item"><a class="nav-link" href="#">artisan</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Planet
                    </a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="Laravel.com"> Laravel.com</a>
                        <a class="dropdown-item" href="Laravel.io"> Laravel.io</a>
                        <a class="dropdown-item" href="#"> Lara Jobs</a>
                        <a class="dropdown-item" href="#"> Laravel News</a>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">contact</a></li>

            </ul>

            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-plus"></i> login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-plus"></i> register
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
