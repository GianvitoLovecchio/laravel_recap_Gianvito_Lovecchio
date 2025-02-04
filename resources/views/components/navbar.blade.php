
<nav class="navbar navbar-expand-lg bg-secondary bg-gradient">
    <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link fw-normal @if (Route::currentRouteName() == 'homepage') fw-bold active text-white fs-5 @endif" aria-current="page" href="{{Route('homepage')}}">Homepage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-normal @if (Route::currentRouteName() == 'contact') fw-bold active text-white fs-5 @endif" aria-current="page" href="{{Route('contact')}}">Contattaci</a>
            </li>
            {{-- @guest --}}
            <li class="nav-item">
                <a class="nav-link @if (Route::currentRouteName() == 'product.show') fw-bold active text-white fs-5 @endif" aria-current="page" href="{{Route('product.show')}}">Mostra Prodotti</a>
            </li> 
            {{-- @endguest --}}
            @auth
            <li class="nav-item">
                <a class="nav-link @if (Route::currentRouteName() == 'product.add') fw-bold active text-white fs-5 @endif" aria-current="page" href="{{Route('product.add')}}">Aggiungi Prodotto</a>
            </li> 
            @endauth
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            @guest
            <li>
                <a class="nav-link fw-semibold fs-5 @if (Route::currentRouteName() == 'login') fw-bold active text-white @endif" href="{{route('login')}}">Accedi</a>
            </li>
            <li>
                <a class="nav-link fw-semibold fs-5  @if (Route::currentRouteName() == 'register') fw-bold active text-white @endif" href="{{route('register')}}">Registrati</a>
            </li>
            @endguest
            @auth
            <li class="nav-link fw-bold active text-white fs-5 mx-4">Ciao, {{Auth::user()->name}}!</li>
            <li>
                <form method="POST" action="{{route('logout')}}">
                    @csrf
                    <button class="btn btn-danger">Logout</button>
                </form>
            </li>
            @endauth
        </ul>
    </div>
</nav>
