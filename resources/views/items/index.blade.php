{{-- szablon bedziie wykorzystywal app.blade.php --}} 
<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/items.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('js/items.js') }}"></script>
    </x-slot>

    <div class="container">
        <h1>{{ __('translations.items.title') }}</h1>

        <div class="d-flex flex-row-reverse mb-4">
            <div class="btn-group" role="group" aria-label="action buttons">
                <a href=" {{ route('items.export') }} " type="button" class="btn btn-dark" role="button"> 
                    {{ __('translations.buttons.export') }}
                </a>
                <a href=" {{ route('items.create') }} " type="button" class="btn btn-primary" role="button"> 
                    {{ __('translations.items.labels.create') }}
                </a>
            </div>
        </div>

        <div class="table-container table-responsive">
            @include('items.table')
        </div>
    </div>
</x-app-layout>