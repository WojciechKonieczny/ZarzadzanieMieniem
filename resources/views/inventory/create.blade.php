<x-app-layout>

    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/inventory.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('js/inventory.js') }}"></script>
        {{-- niestety, JsValidator nie radzi sobie z datami, więc w requeście po stronie klienta, nie mogę zwalidować tych danych --}}
        {{-- {!!
            JsValidator::formRequest('App\Http\Requests\Inventories\InventoryRequest')
        !!} --}}
    </x-slot>

    <div class="container">

        <h1> {{ __('translations.inventory.title') }} </h1>

        <div class="card">
            <div class="card-body">

                <h5 class="card-title"> 

                    {{ ( isset($isEdit) && $isEdit == true ) ? __('translations.inventory.labels.edit') : __('translations.inventory.labels.create') }}
                </h5>
                

                <form id="item-form" method="POST"
                    @if( isset( $isEdit ) && $isEdit == true )
                        action="{{ route('inventory.update', $inventoryId) }}"
                    @else
                        action="{{ route('inventory.store') }}"
                    @endif

                >
                    @csrf

                    @if( isset( $isEdit ) && $isEdit == true )
                        @method('PATCH')
                    @endif
                    
                    <div class="row mb-3 ">
                        <label for="item" class="col-sm-2 col-form-label">{{ __('translations.inventory.attribute.item') }}:</label>
                        <div class="col-sm-10">

                            <select name="item_id" id="item" data-placeholder="{{ __('translations.labels.select2.placeholders.manufacturer_and_model') }}"
                                    class="form-control select2 @error('item_id') is-invalid @enderror">

                                    <option></option>
                                    
                                    @foreach ($items as $it)
                                        <option value="{{ $it->id }}"
                                            @if( isset($isEdit) && $isEdit == true && $it->id == $item->id )
                                                selected
                                            @elseif( old('item_id') && old('item_id') == $it->id ) 
                                                selected
                                            @endif   
                                        >{{ $it->manufacturer->name . ' ' . $it->modelorname->name }}</option>
                                    @endforeach
                            </select>
                            @error('item_id')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3 ">
                        <label for="user_id" class="col-sm-2 col-form-label">{{ __('translations.inventory.attribute.user') }}:</label>
                        <div class="col-sm-10">

                            <select name="user_id" id="user_id" data-placeholder="{{ __('translations.labels.select2.placeholders.user') }}"
                                    class="form-control select2 @error('user_id') is-invalid @enderror">

                                    <option></option>
                                    
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"
                                            @if( isset($isEdit) && $isEdit == true && $user->id == $oldUser->id)
                                                selected
                                            @elseif( old('user_id') && old('user_id') == $user->id ) 
                                                selected
                                            @endif   
                                        >{{ $user->name . ' (' . $user->email . ')' }}</option>
                                    @endforeach
                            </select>
                            @error('user_id')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">

                        <label for="serial_number" class="col-sm-2 col-form-label">{{ __('translations.inventory.attribute.serial_number') }}:</label>
                        <div class="col-sm-10">
                            <input type="text" name="serial_number" class="form-control @error('serial_number') is-invalid @enderror" id="serial_number"
                                placeholder="{{ __('translations.labels.select2.other.placeholders.serialnumber') }}"
                                @if( old('serial_number'))
                                    value="{{ old('serial_number') }}"
                                @elseif( isset($isEdit) && $isEdit == true )
                                    value="{{ $oldSerial }}"
                                @endif
                            >
                            @error('serial_number')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                            @enderror
                        </div>

                    </div>

                    
                    <div class="row mb-3">
                        <label for="purcharse_date" class="col-sm-2 col-form-label">{{ __('translations.inventory.attribute.purcharse_date') }}:</label>
                        <div class="col-sm-10">
                            <input type="date" name="purcharse_date" class="form-control @error('purcharse_date') is-invalid @enderror" max="{{ now()->format('Y-m-d') }}" id="purcharse_date" 
                                
                                @if( old('purcharse_date') )
                                    value="{{ old('purcharse_date') }}"
                                @elseif( isset($isEdit) && $isEdit == true )
                                    value="{{ $oldPurcharse }}"
                                @endif
                            >

                            @error('purcharse_date')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="warranty_end" class="col-sm-2 col-form-label">{{ __('translations.inventory.attribute.warranty_end') }}:</label>
                        <div class="col-sm-10">
                            <input type="date" name="warranty_end" class="form-control @error('warranty_end') is-invalid @enderror" id="warranty_end" 
                                
                                @if( old('warranty_end') )
                                    value="{{ old('warranty_end') }}"
                                @elseif( isset($isEdit) && $isEdit == true )
                                    value="{{ $oldWarranty }}"
                                @endif
                            >
                            @error('warranty_end')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                            @enderror
                        </div>

                    </div>

                    <div class="row mb-3">
                        <label for="assignment_date" class="col-sm-2 col-form-label">{{ __('translations.inventory.attribute.assignment_date') }}:</label>
                        <div class="col-sm-10">
                            <input type="date" name="assignment_date" class="form-control @error('assignment_date') is-invalid @enderror" max="{{ now()->format('Y-m-d') }}"
                                id="assignment_date" 

                                @if( old('assignment_date') )
                                    value="{{ old('assignment_date') }}"
                                @elseif( isset($isEdit) && $isEdit == true )
                                    value="{{ $oldAssignment }}"
                                @else
                                    value="{{ now()->format('Y-m-d') }}"
                                @endif
                                    
                            >
                            @error('assignment_date')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                            @enderror
                        </div>

                    </div>


                    <div class="d-flex justify-content-end mb-3">
                        <div class="btn-group" role="group" aria-label="Cancel or submit form">
                            <a href="{{ route('inventory.index') }}" type="submit" class="btn btn-secondary"> {{ __('translations.buttons.cancel') }} </a>
                            
                            <button type="submit" class="btn btn-primary"> 
                                @if( isset($isEdit) && $isEdit == true )
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