<header class="bg-white">
    <div class="container header-box px-0">
        <div class="d-flex justify-content-between align-items-center m-0">
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/logo-one-1-1024x160.png') }}" alt="">
            </div>
            <div>
                <ul class="d-flex my-0 gap-4">
                    <li><a class=" {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home')}}">Home</a></li>
                    <li><a class=" {{ Route::currentRouteName() == 'movies.index' ? 'active' : '' }}" href="{{ route('movies.index')}}">All Movies</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>











