{{-- szablon bedziie wykorzystywal app.blade.php --}} 
<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/categories.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('js/categories.js') }}"></script>
    </x-slot>

    <div class="container">
        <h1>{{ __('translations.categories.title') }}</h1>

        <div class="d-flex flex-row-reverse mb-4">
            <a href=" {{ route('categories.create') }} " type="button" class="btn btn-primary" role="button"> 
                {{ __('translations.categories.labels.create') }}
            </a>
        </div>

       <div class="table-container table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('translations.categories.attribute.name') }}</th>
                        <th>{{ __('translations.attribute.created_at') }}</th>
                        <th>{{ __('translations.attribute.updated_at') }}</th>
                        <th>{{ __('translations.attribute.deleted_at') }}</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td> {{ $category->id }} </td>
                        <td> {{ $category->name }} </td>
                        <td> {{ $category->created_at }} </td>
                        <td> {{ $category->updated_at }} </td>
                        <td> {{ $category->deleted_at }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>