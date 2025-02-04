<x-layout>
    <x-navbar/>
    <h1 class="display-2 fw-normal text-center">ACCEDI</h1>

    <div class="container w-25 my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <form method="POST" action="{{route('login')}}" class="bg-secondary-subtle border rounded border-dark py-4 px-3 mb-5 font-form align-self-center">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label fw-semibold">Inserisci il tuo indirizzo e-mail:</label>
                      <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label fw-semibold">Inserisci la tua Password:</label>
                      <input type="password" class="form-control" name="password">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-secondary">Accedi</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</x-layout>