<x-layout>
    <x-navbar />
    <h1 class="display-2 text-center m-3">I TUOI ARTICOLI</h1>

    @if (count(Auth::user()->product) != 0)

        <div class="container">
            <div class="row">
                @foreach (Auth::user()->product as $item)
                    <x-card :product="$item" />
                @endforeach
            </div>
        </div>
    @else
        <h2 class="display-5 text-center m-5">Non hai ancora caricato nessun articolo.</h2>
        <a class="btn btn-secondary d-block w-25 mx-auto" href={{ route('product.add') }}>Aggiungi Articolo</a>
    @endif
</x-layout>
