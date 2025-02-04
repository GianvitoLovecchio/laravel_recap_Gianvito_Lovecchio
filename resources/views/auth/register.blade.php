<x-layout>
    <x-navbar />

    <h1 class="display-2 p-4 fw-normal text-center">REGISTRATI</h1>

    {{-- eventuale messaggio di errore dalla registrazione --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container w-50">
        <div class="row justify-content-center">
            <div class="col-12">
                <form method="POST" action="{{ route('register')}}"
                    class="bg-secondary-subtle border rounded border-dark py-4 px-3 mb-5 font-form align-self-center">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fw-semibold">Scegli il tuo nome utente:</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fw-semibold">Inserisci il tuo indirizzoe-mail:</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">Scegli la tua Password:</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">Ripeti la Password:</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-secondary">Registrati</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
