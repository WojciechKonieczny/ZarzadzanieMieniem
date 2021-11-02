{{-- bedziemy przekazywac lokalne style CSS oraz skrypty  --}}
@props( [ 'styles' => '', 'scripts' => '' ] );


{{-- wykorzystanie komponentu Base.blade.php --}}
<x-base-layout>

    {{-- zostanie to zaladowane do komponentu Base pod zmienna $styles --}}
    <x-slot name="styles">
        <link rel="stylesheet" href=" {{ url('css/form.css') }} ">
        {{ $styles }}
    </x-slot>

    {{-- zostanie zaladowane do komponentu Base pod zmienna $slot --}}
    <div class="form container">
        {{ $slot }}
    </div>

    {{-- zostanie zaladowane do komponentu Base pod zmienna $scripts --}}
    <x-slot name="scripts">
        {{ $scripts }}
    </x-slot>

</x-base-layout>