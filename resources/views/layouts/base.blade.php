{{-- szablon strony - bedziemy 'punktem wyjscia' do budowania kazdego widoku w aplikacji --}}

{{-- bedziemy przekazywac lokalne style CSS oraz skrypty (kazda strona bedzie miala dodatkowe - swoje, lokalne style) --}}
@props( [ 'styles' => '', 'scripts' => '' ] );

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- globalne style CSS  --}}
    <link rel="stylesheet" href=" {{ asset('css/app.css') }}">
    {{-- lokalne style CSS (przekazujemy ten parametr w @props) --}}
    {{ $styles }}
</head>
<body>

    {{-- tresc strony, ktora ma zostac wyswietlona --}}
    {{ $slot }}

    {{-- globalne skrypty JS --}}
    <script src=" {{ asset('js/app.js') }} "></script>
    {{-- lokalne skrypty JS --}}
    {{ $scripts }}

</body>
</html>