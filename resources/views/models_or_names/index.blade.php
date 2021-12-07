{{-- szablon bedziie wykorzystywal app.blade.php --}} 
<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/models_or_names.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('js/models_or_names.js') }}"></script>
    </x-slot>

    <div class="container">
        <h1>{{ __('translations.models_or_names.title') }}</h1>
        <div class="d-flex flex-row-reverse mb-4">
            <a href=" {{ route('models.create') }} " type="button" class="btn btn-primary" role="button"> 
                {{ __('translations.models_or_names.labels.create') }}
            </a>
        </div>

        <div class="table-container table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('translations.models_or_names.attribute.name') }}</th>
                        <th>{{ __('translations.attribute.created_at') }}</th>
                        <th>{{ __('translations.attribute.updated_at') }}</th>
                        <th>{{ __('translations.attribute.deleted_at') }}</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($models as $model)
                    <tr>
                        <td> {{ $model->id }} </td>
                        <td> {{ $model->name }} </td>
                        <td> {{ $model->created_at }} </td>
                        <td> {{ $model->updated_at }} </td>
                        <td> {{ $model->deleted_at }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>