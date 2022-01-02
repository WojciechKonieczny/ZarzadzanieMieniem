{{-- szablon bedziie wykorzystywal app.blade.php --}} 
<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/inventory.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('js/inventory.js') }}"></script>
    </x-slot>

    <div class="container">
        <h1>
            @hasrole('admin')
                {{ __('translations.inventory.title') }}

                <div class="d-flex flex-row-reverse mb-4">
                    <div class="btn-group" role="group" aria-label="action buttons">
                        <a href=" {{ route('inventory.export') }} " type="button" class="btn btn-dark" role="button"> 
                            {{ __('translations.buttons.export') }}
                        </a>
                        <a href=" {{ route('inventory.create') }} " type="button" class="btn btn-primary" role="button"> 
                            {{ __('translations.inventory.labels.create') }}
                        </a>
                    </div>
                    
                </div>
            @endhasrole

            @hasrole('user')
                {{ __('translations.inventory.titleForUsers') }}
            @endhasrole
        </h1>

        <div class="table-container table-responsive">
            @include('inventory.table')
        </div>
    </div>
</x-app-layout>