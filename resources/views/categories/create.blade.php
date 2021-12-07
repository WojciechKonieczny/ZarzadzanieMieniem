<x-app-layout>

    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/categories.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('js/categories.js') }}"></script>
    </x-slot>

    <div class="container">

        <h1> {{ __('translations.categories.title') }} </h1>

        <div class="card">
            <div class="card-body">

                <h5 class="card-title"> {{ __('translations.categories.labels.create') }} </h5>

                <form action="{{ route('categories.store') }}" id="category-form" method="POST">
                    @csrf

                    <div class="row mb-3">

                        <label for="category-name" class="col-sm-2 col-form-label">{{ __('translations.categories.attribute.name') }}:</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="category-name" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                            @enderror
                        </div>

                    </div>

                    <div class="d-flex justify-content-end mb-3">
                        <div class="btn-group" role="group" aria-label="Cancel or submit form">
                            <a href="{{ route('categories.index') }}" type="submit" class="btn btn-secondary"> {{ __('translations.buttons.cancel') }} </a>
                            <button type="submit" class="btn btn-primary"> {{ __('translations.buttons.store') }} </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>

</x-app-layout>