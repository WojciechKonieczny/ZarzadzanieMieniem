<x-app-layout>

    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/manufacturers.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('js/manufacturers.js') }}"></script>
    </x-slot>

    <div class="container">

        <h1> {{ __('translations.manufacturers.title') }} </h1>

        <div class="card">
            <div class="card-body">

                <h5 class="card-title"> {{ __('translations.manufacturers.labels.create') }} </h5>

                <form action="{{ route('manufacturers.store') }}" id="manufacturer-form" method="POST">
                    @csrf

                    <div class="row mb-3">

                        <label for="manufacturer-name" class="col-sm-2 col-form-label">{{ __('translations.manufacturers.attribute.name') }}:</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="manufacturer-name" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                            @enderror
                        </div>

                    </div>

                    <div class="d-flex justify-content-end mb-3">
                        <div class="btn-group" role="group" aria-label="Cancel or submit form">
                            <a href="{{ route('manufacturers.index') }}" type="submit" class="btn btn-secondary"> {{ __('translations.buttons.cancel') }} </a>
                            <button type="submit" class="btn btn-primary"> {{ __('translations.buttons.store') }} </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>

</x-app-layout>