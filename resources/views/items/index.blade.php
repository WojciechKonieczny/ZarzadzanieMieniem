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
            <a href=" {{ route('items.create') }} " type="button" class="btn btn-primary" role="button"> 
                {{ __('translations.items.labels.create') }}
            </a>
        </div>

        <div class="table-container table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('translations.items.attribute.manufacturer') }}</th>
                        <th>{{ __('translations.items.attribute.model_or_name') }}</th>
                        <th>{{ __('translations.items.attribute.category') }}</th>
                        <th>{{ __('translations.attribute.created_at') }}</th>
                        <th>{{ __('translations.attribute.updated_at') }}</th>
                        <th>{{ __('translations.attribute.deleted_at') }}</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($items as $item)
                    <tr>
                        <td> {{ $item->id }} </td>
                        <td> {{ $item->manufacturer->name}} </td>
                        <td> {{ $item->modelorname->name }} </td>
                        <td> {{ $item->category->name }} </td>
                        <td> {{ $item->created_at }} </td>
                        <td> {{ $item->updated_at }} </td>
                        <td> {{ $item->deleted_at }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>