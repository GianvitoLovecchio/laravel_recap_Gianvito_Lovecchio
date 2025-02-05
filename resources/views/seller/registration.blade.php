<x-layout>
    <x-navbar />

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    @if (!Auth::user()->seller)

    <form method="POST" action="{{ route('seller.post') }}"
        class=" container mt-5 w-50 bg-secondary-subtle border rounded border-dark py-4 px-3 mb-5 font-form d-flex justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                @csrf
                <div class="mb-3">
                    <label for="companyName" class="form-label fw-semibold">Inserisci il nome della
                        compagnia</label>
                    <input type="text" class="form-control" name="companyName">
                </div>
                <div class="mb-3">
                    <label for="iva" class="form-label fw-semibold">Inserisci il Numero di partita
                        iva:</label>
                    <input type="text" class="form-control" name="iva">
                </div>
                <div class="mb-3">
                    <label for="contactEmail" class="form-label fw-semibold">Inserisci la mail della compagnia:
                    </label>
                    <input type="email" class="form-control" name="contactEmail">
                </div>
                <div class="mb-3">
                    <label for="contactNumber" class="form-label fw-semibold">Inserisci il numero di telefono
                        della compagnia: </label>
                    <input type="text" class="form-control" name="contactNumber">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="buisnessAddress" class="form-label fw-semibold">Inserisci l'indirizzo della
                        compagnia: </label>
                    <input type="text" class="form-control" name="buisnessAddress">
                </div>
                <div class="mb-3">
                    <label for="buisnessCity" class="form-label fw-semibold">Inserisci la città della
                        compagnia: </label>
                    <input type="text" class="form-control" name="buisnessCity">
                </div>
                
                <div class="mb-3">
                    <label for="companyWebSite" class="form-label fw-semibold">Inserisci il sito web della
                        compagnia: </label>
                    <input type="text" class="form-control" name="companyWebSite">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn w-25 btn-secondary">Invia Dati</button>
            </div>
    </form>
    </div>
    @else

    <div class="my-5">
        <h1 class="display-2 text-center">Sezione gia compilata</h1>
        <div class="d-flex justify-content-center">
            <a href="{{route('homepage')}}" class="m-4 w-25 btn btn-secondary">HOMEPAGE</a>
        </div>
    </div>
    @endif
</x-layout>
