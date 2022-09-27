<header>
    <nav class="navbar navbar-expand-lg navbar-custom navbar-light">
        <div class="container">

            <a class="navbar-brand  mr-auto " href="{{ route('home.index') }}">RM</a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarToggler" style="">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li><a href="{{ route('home.index') }}">Home</a></li>
                    <li><a href="{{ route('guitars.index') }}">Guitars</a></li>
                    <li><a href="{{ route('home.about') }}">About</a></li>
                    <li><a href="{{ route('home.contact') }}">Contact</a></li>
                    <li><a href="{{ route('admin.users.index') }}">Users</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
</header>