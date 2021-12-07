{{-- szablon bedziie wykorzystywal app.blade.php --}} 
<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/manufacturers.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('js/manufacturers.js') }}"></script>
    </x-slot>

    <div class="container">
        <h1>{{ __('translations.manufacturers.title') }}</h1>

        <div class="d-flex flex-row-reverse mb-4">
            <a href=" {{ route('manufacturers.create') }} " type="button" class="btn btn-primary" role="button"> 
                {{ __('translations.manufacturers.labels.create') }}
            </a>
        </div>

        <div class="table-container table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('translations.manufacturers.attribute.name') }}</th>
                        <th>{{ __('translations.manufacturers.attribute.count') }}</th>
                        <th>{{ __('translations.attribute.created_at') }}</th>
                        <th>{{ __('translations.attribute.updated_at') }}</th>
                        <th>{{ __('translations.attribute.deleted_at') }}</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($manufacturers as $manufacturer)
                    <tr>
                        <td> {{ $manufacturer->id }} </td>
                        <td> {{ $manufacturer->name }} </td>
                        <td> {{ $manufacturer->items_count }} </td>
                        <td> {{ $manufacturer->created_at }} </td>
                        <td> {{ $manufacturer->updated_at }} </td>
                        <td> {{ $manufacturer->deleted_at }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>