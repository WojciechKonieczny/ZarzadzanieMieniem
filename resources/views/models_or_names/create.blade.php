<x-app-layout>

    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/models_or_names.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('js/models_or_names.js') }}"></script>

        {!!
            JsValidator::formRequest('App\Http\Requests\ModelsOrNames\ModelOrNameRequest')
        !!}
    </x-slot>

    <div class="container">

        <h1> {{ __('translations.models_or_names.title') }} </h1>

        <div class="card">
            <div class="card-body">

                <h5 class="card-title">
                     {{-- sprawdzam czy to formularz dodawania, czy edycji - jeśli obiekt jest ustawiony, to musi być to formularz do edycji, bo przekazujemy go w parametrze --}}
                     {{ (isset( $model_or_name )) ? __('translations.models_or_names.labels.edit') : __('translations.models_or_names.labels.create') }}
                </h5>

                <form id="category-form" method="POST"
                    @if( isset( $isEdit ) && $isEdit == true )
                        action="{{ route('models.update', $model_or_name) }}"
                    @else
                        action="{{ route('models.store') }}"
                    @endif
                >
                    @csrf

                    @if( isset( $isEdit ) && $isEdit == true )
                        @method('PATCH')
                    @endif

                    <div class="row mb-3">

                        <label for="category-name" class="col-sm-2 col-form-label">{{ __('translations.models_or_names.attribute.name') }}:</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="model_or_name-name" 
                                @if( isset($model_or_name) )
                                    value="{{ $model_or_name->name }}"
                                @else
                                    value="{{ old('name') }}"
                                @endif
                            >

                            @error('name')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                            @enderror
                        </div>

                    </div>

                    <div class="d-flex justify-content-end mb-3">
                        <div class="btn-group" role="group" aria-label="Cancel or submit form">
                            <a href="{{ route('models.index') }}" type="submit" class="btn btn-secondary"> {{ __('translations.buttons.cancel') }} </a>

                            <button type="submit" class="btn btn-primary"> 
                                @if( isset($model) )
                                    {{ __('translations.buttons.update') }} 
                                @else
                                    {{ __('translations.buttons.store') }} 
                                @endif
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>

</x-app-layout>