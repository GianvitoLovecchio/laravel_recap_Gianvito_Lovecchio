
<nav class="navbar navbar-expand-lg bg-secondary bg-gradient">
    <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link fw-normal @if (Route::currentRouteName() == 'homepage') fw-bold active text-white fs-5 @endif" aria-current="page" href="{{Route('homepage')}}">Homepage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-normal @if (Route::currentRouteName() == 'contact') fw-bold active text-white fs-5 @endif" aria-current="page" href="{{Route('contact')}}">Contattaci</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (Route::currentRouteName() == 'product.add') fw-bold active text-white fs-5 @endif" aria-current="page" href="{{Route('product.add')}}">Aggiungi Prodotto</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link @if (Route::currentRouteName() == 'product.show') fw-bold active text-white fs-5 @endif" aria-current="page" href="{{Route('product.show')}}">Mostra Prodotti</a>
            </li> 
        </ul>

    </div>
</nav>
