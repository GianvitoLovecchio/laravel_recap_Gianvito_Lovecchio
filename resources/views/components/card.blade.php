<div class="col-6 col-md-3 d-flex justify-content-center p-4">
    <div class="card border rounded border-dark-subtle bg-secondary-subtle">
        <div class="d-flex flex-column justify-content-between card-body w-100 ">
            <h5 class="card-title">{{ $product->brand }} - {{ $product->name }}</h5>
            <h6 class="card-text fw-semibold">Prezzo: <span>{{ $product->price }} €</span></h6>
            <img src="@if ($product->image === '/img/no_image.jpeg') /img/no_image.jpeg @else {{ Storage::url($product->image) }} @endif"
                class="card-img" alt="immagine {{ $product->name }}">
            <a href="{{ route('product.detail', compact('product')) }}" class="m-2 custom-btn btn-primary">Mostra</a>
        </div>
    </div>
</div>
