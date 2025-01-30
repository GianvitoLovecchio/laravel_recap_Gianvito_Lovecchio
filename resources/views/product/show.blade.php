<x-layout>
    <x-navbar/>
    <h1 class="display-2 p-3 fw-normal text-center">ELENCO DEI NOSTRI PRODOTTI</h1>

    <div class="container">
        <div class="row">
            @foreach ($products as $product)
            <x-card :product=$product/>
            @endforeach
        </div>
    </div>

</x-layout>