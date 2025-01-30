<x-layout>
    <x-navbar />
    <h1 class="display-5 p-4 fw-normal">{{ $product->name }}</h1>

    <div class="d-flex justify-content-center" >
        <div class="container border rounded border-dark-subtle m-3 mb-5 w-75">
            <div class="row m-0">
                <div class="col-12 col-md-6 p-3">
                    <div class="m-3 border rounded border-dark-subtle text-dark bg-secondary-subtle category-custom text-center">
                        {{ $product->category }}</div>
                    <h3 class="detail-title">Nome: <span class="detail-text">{{ $product->name }}</span></h3>
                    <h3 class="detail-title">Marca: <span class="detail-text">{{ $product->brand }}</span></h3>
                    <h3 class="detail-title">Prezzo: <span class="detail-text">{{ $product->price }} €</span></h3>
                    @if ($product->color)
                        <h3 class="detail-title">Colore: <span class="detail-text">{{ $product->color }} </span></h3>
                    @endif
                    @if ($product->size)
                        <h3 class="detail-title">Colore: <span class="detail-text">{{ $product->size }} </span></h3>
                    @endif
                    <h3 class="detail-title">Anno di produzione: <span class="detail-text">{{ $product->year }} </span>
                    </h3>
                    <h3 class="detail-title">Descrizione: <span class="detail-text">{{ $product->description }} </span>
                    </h3>
                </div>
                <div class="col-12 col-md-6 p-3 d-flex justify-content-center">
                    <img src="@if ($product->image === '/img/no_image.jpeg') /img/no_image.jpeg @else {{ Storage::url($product->image) }} @endif"
                        class="w-50">
                </div>
            </div>
        </div>
    </div>




</x-layout>
