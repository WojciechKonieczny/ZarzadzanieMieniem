{{-- widok uzytkownikow zalogowanych --}}

@props( ['styles' => '', 'scripts' => ''] );

{{-- wykorzystanie komponentu Base.blade.php --}}
<x-base-layout>

    {{-- zostanie to zaladowane do komponentu Base pod zmienna $styles --}}
    <x-slot name="styles">
        <style typ="text/css" media="screen">
        
        </style>

        {{ $styles }}
    </x-slot>

    {{-- zostanie zaladowane do komponentu Base pod zmienna $slot --}}
    {{-- zaladowanie menu z pliku --}}
    @include('layouts.navigation');
    <div class="container">
        {{ $slot }}
    </div>

    {{-- zostanie zaladowane do komponentu Base pod zmienna $scripts --}}
    <x-slot name="scripts">
        {{ $scripts }}
    </x-slot>

</x-base-layout>