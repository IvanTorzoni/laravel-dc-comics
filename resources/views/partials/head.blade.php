<header>
    <div class="container">
        <img src="{{ Vite::asset('resources/img/logo.png')}}" alt="Logo">
    
        <nav>
            <li><a href="{{route ("home") }}" class="btn btn-primary">HOME</a></li>
            <li><a href="{{route('comics.index')}}" class="btn btn-primary">COMICS</a></li>
            <li><a href="{{route('comics.create')}}" class="btn btn-primary">ADD COMICS</a></li>
        </nav>
    </div>

</header>