<x-layout>
    <x-navbar />
    <div class="d-flex justify-content-center">
        <h1 class="display-5 p-4 fw-normal">{{ $product->name }}</h1>
        <a href="{{ route('product.show') }}" class="p-4 fs-5 text-dark ms-auto">Torna al catalogo</a>
    </div>

    <div class="d-flex justify-content-center">
        <div class="container border rounded border-dark-subtle m-3 mb-5 w-75">
            <div class="row m-0 justify-content-center">
                <div class="col-12 col-md-6">
                    <div
                        class="m-3 border rounded border-dark-subtle text-dark bg-secondary-subtle category-custom text-center">
                        {{ $product->category }}
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-12 col-md-6 pb-2">
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
                <div class="col-12 col-md-6 pb-2 d-flex justify-content-center">
                    <img src="@if ($product->image === '/img/no_image.jpeg') /img/no_image.jpeg @else {{ Storage::url($product->image) }} @endif" class="w-75 h-75 align-self-center">
                </div>
            </div>
        </div>
    </div>
    </div>

    @if (Auth::user()->id === $product->user_id)
        <div class="container p-5">
            <div class="row justify-content-around">
                <col-6 class="w-25"> <a href="{{ route('edit.element', compact('product')) }}"
                        class="btn w-100 btn-warning">Modifica</a></col-6>
                <col-6 class="w-25">
                    <form method="POST" action="{{ route('delete.element', compact('product')) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn w-100 btn-danger">Elimina</button>
                    </form>
                </col-6>
            </div>
        </div>
        {{-- <div class="d-flex justify-content-around p-5"> --}}
        {{-- </div> --}}
    @endif




</x-layout>
