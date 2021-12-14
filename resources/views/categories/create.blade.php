<x-app-layout>

    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/categories.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('js/categories.js') }}"></script>

        {!!
            JsValidator::formRequest('App\Http\Requests\Categories\CategoryRequest')
        !!}
    </x-slot>

    <div class="container">

        <h1> {{ __('translations.categories.title') }} </h1>

        <div class="card">
            <div class="card-body">

                <h5 class="card-title"> 
                    {{ (isset( $category )) ? __('translations.categories.labels.edit') : __('translations.categories.labels.create') }}
                </h5>

                <form id="category-form" method="POST"
                    @if( isset( $isEdit ) && $isEdit == true )
                        action="{{ route('categories.update', $category) }}"
                    @else
                        action="{{ route('categories.store') }}"
                    @endif
                >
                    @csrf

                    @if( isset( $isEdit ) && $isEdit == true )
                        @method('PATCH')
                    @endif

                    <div class="row mb-3">

                        <label for="category-name" class="col-sm-2 col-form-label">{{ __('translations.categories.attribute.name') }}:</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="category-name"
                                @if( isset($category) )
                                    value="{{ $category->name }}"
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
                            <a href="{{ route('categories.index') }}" type="submit" class="btn btn-secondary"> {{ __('translations.buttons.cancel') }} </a>

                            <button type="submit" class="btn btn-primary"> 
                                @if( isset($category) )
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