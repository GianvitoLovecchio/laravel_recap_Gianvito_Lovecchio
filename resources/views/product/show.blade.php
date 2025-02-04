<x-layout>
    <x-navbar/>
    
    <h1 class="display-2 p-3 fw-normal text-center">ELENCO DEI NOSTRI PRODOTTI</h1>

    @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show text-center mx-auto w-25" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($products as $product)
            <x-card :product="$product"/>
            @endforeach
        </div>
    </div>
    
</x-layout>