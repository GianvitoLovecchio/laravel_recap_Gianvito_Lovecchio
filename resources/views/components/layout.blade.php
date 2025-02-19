<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>e-Commerce</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{-- eventuale messaggio di corretto invio della mail --}}
    @if (session('emailSent'))
        <div class="alert alert-success alert-dismissible fade show text-center mx-auto w-25" role="alert">
            {{ session('emailSent') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    {{-- eventuale messaggio di corretto inserimento del numevo elemento nel DB --}}
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show text-center mx-auto w-25" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{ $slot }}
    
</body>

</html>
