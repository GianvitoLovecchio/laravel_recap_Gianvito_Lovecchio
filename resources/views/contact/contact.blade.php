<x-layout>
    <x-navbar/>
    <h1 class="display-2 fw-normal text-center">CONTATTACI</h1>

    <div class="d-flex justify-content-center">
        <form method="POST" action="{{route('contact.send')}}"
            class="bg-secondary-subtle border rounded pt-3 border-dark px-3 mb-5 font-form form-size">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="p-2">
                            <label class="form-label fw-semibold" for="name">Nome:</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}">
                        </div>
                        <div class="p-2">
                            <label class="form-label fw-semibold" for="surname">Cognome:</label>
                            <input class="form-control" type="text" name="surname" id="surname" value="{{old('surname')}}">
                        </div>
                        <div class="p-2">
                            <label class="form-label fw-semibold" for="object">Oggetto richiesta: </label>
                            <input class="form-control" type="text" name="object" id="object" value="{{old('object')}}">
                        </div>
                        <div class="p-2">
                            <label class="form-label fw-semibold" for="argument">Richiesta: </label>
                            <textarea class="text-area-size" placeholder="Inserisci il testo della mail..." name="argument" id="argument" >{{old('object')}}</textarea>
                        </div>

                        <div class="p-2">
                            <label class="form-label fw-semibold" for="mail">Indirizzo e-mail</label>
                            <input class="form-control" type="mail" name="mail" id="mail" value="{{old('mail')}}">
                        </div>
                    </div> 
                </div>
                <div class="row justify-content-center p-4">
                    <button type="submit" class="btn btn-secondary w-50 fw-semibold">Inserisci</button>
                </div>
            </div>
        </form>
    </div>
</x-layout>