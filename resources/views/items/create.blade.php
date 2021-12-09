<x-app-layout>

    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/items.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('js/items.js') }}"></script>
    </x-slot>

    <div class="container">

        <h1> {{ __('translations.items.title') }} </h1>

        <div class="card">
            <div class="card-body">

                <h5 class="card-title"> {{ __('translations.items.labels.create') }} </h5>
                

                <form action="{{ route('items.store') }}" id="item-form" method="POST">
                    @csrf

                    <div class="row mb-3 ">
                        <label for="manufacturer" class="col-sm-2 col-form-label">{{ __('translations.items.attribute.manufacturer') }}</label>
                        <div class="col-sm-10">

                            <select name="manufacturer_id" id="manufacturer" data-placeholder="{{ __('translations.labels.select2.placeholders.manufacturer') }}"
                                    class="form-control select2 @error('manufacturer_id') is-invalid @enderror">

                                    <option></option>
                                    
                                    @foreach ($manufacturers as $manufacturer)
                                        <option value="{{ $manufacturer->id }}"
                                            @if( isset($item) && $item-hasManufacturer($manufacturer) )
                                                selected
                                            @elseif( old('manufacturer_id') && old('manufacturer_id') == $manufacturer->id ) 
                                                selected
                                            @endif   
                                        >{{ $manufacturer->name }}</option>
                                    @endforeach
                            </select>
                            @error('manufacturer_id')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="model_or_name" class="col-sm-2 col-form-label">{{ __('translations.items.attribute.model_or_name') }}</label>
                        <div class="col-sm-10">

                            <select name="model_or_name_id" id="model_or_name"data-placeholder="{{ __('translations.labels.select2.placeholders.model') }}"
                                    class="form-control select2 @error('model_or_name_id') is-invalid @enderror">

                                    <option></option>
                                    
                                    @foreach ($modelornames as $model_or_name)
                                        <option value="{{ $model_or_name->id }}"
                                            @if( isset($item) && $item-hasModelOrName($model_or_name) )
                                                selected
                                            @elseif( old('model_or_name_id') && old('model_or_name_id') == $model_or_name->id ) 
                                                selected
                                            @endif   
                                        >{{ $model_or_name->name }}</option>
                                    @endforeach
                            </select>
                            @error('model_or_name_id')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="category" class="col-sm-2 col-form-label">{{ __('translations.items.attribute.category') }}</label>
                        <div class="col-sm-10">

                            <select name="category_id" id="category" data-placeholder="{{ __('translations.labels.select2.placeholders.category') }}"
                                    class="form-control select2 @error('category_id') is-invalid @enderror">

                                    <option></option>
                                    
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            @if( isset($item) && $item-hasCategory($category) )
                                                selected
                                            @elseif( old('category_id') && old('category_id') == $category->id ) 
                                                selected
                                            @endif   
                                        >{{ $category->name }}</option>
                                    @endforeach
                            </select>
                            @error('category_id')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>


                    <div class="d-flex justify-content-end mb-3">
                        <div class="btn-group" role="group" aria-label="Cancel or submit form">
                            <a href="{{ route('items.index') }}" type="submit" class="btn btn-secondary"> {{ __('translations.buttons.cancel') }} </a>
                            <button type="submit" class="btn btn-primary"> {{ __('translations.buttons.store') }} </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>

</x-app-layout>