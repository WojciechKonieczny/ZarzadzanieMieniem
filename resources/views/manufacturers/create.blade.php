<x-app-layout>

    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/manufacturers.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('js/manufacturers.js') }}"></script>

        {!!
            JsValidator::formRequest('App\Http\Requests\Manufacturers\ManufacturerRequest');
        !!}
    </x-slot>

    <div class="container">
        <h1> {{ __('translations.manufacturers.title') }} </h1>

        <div class="card">
            <div class="card-body">

                <h5 class="card-title"> 
                    {{-- sprawdzam, czy to formularz dodawania, czy edycji - przekazuje w kontrolerze zmienna $isEdit, jesli edytuje  --}}
                    {{-- {{ ( isset($isEdit) && $isEdit==true )? __('translations.manufacturers.labels.edit') : __('translations.manufacturers.labels.create') }} --}}

                    {{-- sprawdzam czy to formularz dodawania, czy edycji - jeśli obiekt jest ustawiony, to musi być to formularz do edycji, bo przekazujemy go w parametrze --}}
                    {{ (isset( $manufacturer )) ? __('translations.manufacturers.labels.edit') : __('translations.manufacturers.labels.create') }}
                </h5>

                <form id="manufacturer-form" method="POST"
                    @if( isset( $isEdit ) && $isEdit == true )
                        action="{{ route('manufacturers.update', $manufacturer) }}"
                    @else
                        action="{{ route('manufacturers.store') }}"
                    @endif
                >
                    @csrf

                    @if( isset( $isEdit ) && $isEdit == true )
                        @method('PATCH')
                    @endif

                    <div class="row mb-3">

                        <label for="manufacturer-name" class="col-sm-2 col-form-label">{{ __('translations.manufacturers.attribute.name') }}:</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="manufacturer-name" 
                                @if( isset($manufacturer) )
                                    value="{{ $manufacturer->name }}"
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
                            <a href="{{ route('manufacturers.index') }}" type="submit" class="btn btn-secondary"> {{ __('translations.buttons.cancel') }} </a>

                            <button type="submit" class="btn btn-primary"> 
                                @if( isset($manufacturer) )
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