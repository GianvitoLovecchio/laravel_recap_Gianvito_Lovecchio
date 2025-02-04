<x-layout>
    <x-navbar />

    <h1 class="display-2 fw-normal text-center p-5">AGGIUNGI PRODOTTO</h1>

    {{-- eventuale messaggio di errore inserimento dati --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
    <div class="d-flex justify-content-center">
        <form method="POST" action="{{route('put.element',compact('product'))}}" enctype="multipart/form-data"
            class="bg-secondary-subtle border rounded border-dark pt-5 px-3 mb-5 font-form form-size">
            @csrf
            @method('PUT')
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="p-2">
                            <label class="form-label fw-semibold" for="name">Nome Prodotto:</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{$product->name}}">
                        </div>
                        <div class="p-2">
                            <label class="form-label fw-semibold" for="brand">Marca Prodotto:</label>
                            <input class="form-control" type="text" name="brand" id="brand" value="{{$product->brand}}">
                        </div>
                        <div class="p-2">
                            <label class="form-label fw-semibold" for="category">Categoria Prodotto:</label>
                            <input class="form-control" type="text" name="category" id="category" value="{{$product->category}}">
                        </div>
                        <div class="p-2">
                            <label class="form-label fw-semibold " for="image">Immagine Prodotto:</label>
                            <input class="form-control border border-secondary-subtle" type="file" name="image" id="image">
                        </div>
                        <div class="p-2">
                            <label class="form-label fw-semibold" for="price">Prezzo Prodotto:</label>
                            <input class="form-control" type="text" name="price" id="price" value="{{$product->price}}">
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="p-2">
                            <label class="form-label fw-semibold" for="name">Descrizione Prodotto:</label>
                            <textarea name="description" id="description" class="text-area-size" placeholder="Inserisci una descrizione"></textarea>
                        </div>
                        <div class="p-2">
                            <label class="form-label fw-semibold" for="color">Colore Prodotto:</label>
                            <input class="form-control" type="text" name="color" id="color" value="{{$product->color}}">
                        </div>
                        <div class="p-2">
                            <label class="form-label fw-semibold" for="size">Taglia Prodotto:</label>
                            <input class="form-control" type="text" name="size" id="size" value="{{$product->size}}">
                        </div>
                        <div class="p-2">
                            <label class="form-label fw-semibold" for="weight">Peso Prodotto:</label>
                            <input class="form-control" type="text" name="weight" id="weight" value="{{$product->weight}}">
                        </div>
                        <div class="p-2">
                            <label class="form-label fw-semibold" for="year">Anno creazione Prodotto:</label>
                            <input class="form-control" type="text" name="year" id="year" value="{{$product->year}}">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center p-4">
                    <button type="submit" class="btn btn-secondary w-25 fw-semibold">Modifica</button>
                </div>
            </div>
        </form>
    </div>
</x-layout>
