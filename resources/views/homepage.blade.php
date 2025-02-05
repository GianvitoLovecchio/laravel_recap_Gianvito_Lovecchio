<x-layout>
    <x-navbar />
    <h1 class="display-1 fw-normal text-center mt-1 mb-4">E-COMMERCE</h1>
    <div class="container-fluid">
        <div class="row py-3">
            <div class="col-12 col-md-5 d-flex align-self-center">
                <h2 class="display-3">Tutto ciò che cerchi, lo trovi proprio QUI!</h2>
            </div>
            <div class="col-12 col-md-7 p-0">
                <img src="./img/ecommerce.jpg" alt="Immagine generica e-commerce" class="w-100">
            </div>
        </div>
        <div class="row py-3 ">
            <div class="col-12 col-md-6 p-3 d-flex bg-secondary-subtle align-self-center">
                <h2 class="display-5">Nel nostro store puoi trovare diverse categorie di prodotti: dai sfogo alla tua
                    voglia di fare shopping, comodamente dal tuo pc!</h2>
            </div>
            <div class="col-12 col-md-6 p-3 bg-white">
                <ul class="list_homepage display-5">
                    <li class="p-2">Elettronica</li>
                    <li class="text-end p-2">Abbigliamento</li>
                    <li class="p-2">Articoli per la casa</li>
                    <li class="text-end p-2">Libri</li>
                    <li class="text-center p-2">E molto altro...</li>
                </ul>
            </div>
        </div>
        <div class="row py-3 vh-50">
            <h2 class="display-2 fw-normal text-center mt-1 mb-4">I nostri ultimi articoli:</h2>
            @for($i = count($products) - 1; $i >= count($products) - 3; $i--)
            <div class="col-12 col-md-4 d-flex justify-content-center p-4">
                <div class=" card card_home_custom border rounded border-dark-subtle bg-secondary-subtle">
                    <div class="d-flex flex-column justify-content-start card-body ">
                        <h5 class="card-title">{{ $products[$i]->brand }} - {{ $products[$i]->name }}</h5>
                        <h6 class="card-text fw-semibold">Prezzo: <span>{{ $products[$i]->price }} €</span></h6>
                    </div>
                    <div>
                        <img src="@if ($products[$i]->image === '/img/no_image.jpeg') /img/no_image.jpeg @else {{ Storage::url($products[$i]->image) }} @endif"
                            class="home_img_card_custom" alt="immagine {{ $products[$i]->name }}">
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>

</x-layout>
