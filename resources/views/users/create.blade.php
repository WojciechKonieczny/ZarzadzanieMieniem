<x-app-layout>

    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/users.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('js/users.js') }}"></script>

        {!!
            JsValidator::formRequest('App\Http\Requests\Users\UserRequest')
        !!}
    </x-slot>

    <div class="container">

        <h1> {{ __('translations.users.title') }} </h1>

        <div class="card">
            <div class="card-body">

                <h5 class="card-title"> 
                    {{ (isset( $category )) ? __('translations.users.labels.edit') : __('translations.users.labels.create') }}
                </h5>

                <form id="category-form" method="POST"
                    @if( isset( $isEdit ) && $isEdit == true )
                        action="{{ route('users.update', $user) }}"
                    @else
                        action="{{ route('users.store') }}"
                    @endif
                >
                    @csrf

                    @if( isset( $isEdit ) && $isEdit == true )
                        @method('PATCH')
                    @endif

                    <div class="row mb-3">
                        <label for="user-name" class="col-sm-2 col-form-label">{{ __('translations.users.attribute.name') }}:</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('translations.labels.select2.other.placeholders.name_and_surname') }}" id="user-name" 
                            
                                @if( isset($user) )
                                    value="{{ $user->name }}"
                                @else
                                    value="{{ old('name') }}"
                                @endif
                            >
                            
                            @error('name')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="user-mail" class="col-sm-2 col-form-label">{{ __('translations.users.attribute.mail') }}:</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('translations.labels.select2.other.placeholders.email') }}"
                                id="user-mail" 
                                
                                @if( isset($user) )
                                    value="{{ $user->email }}"
                                @else
                                    value="{{ old('email') }}"
                                @endif
                            >
                            @error('email')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="user-password" class="col-sm-2 col-form-label">{{ __('translations.users.attribute.password') }}:</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('translations.labels.select2.other.placeholders.password') }}" id="user-password"
                            >
                            @error('password')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3 ">
                        <label for="role_id" class="col-sm-2 col-form-label">{{ __('translations.users.attribute.role') }}:</label>
                        <div class="col-sm-10">

                            <select name="role_id" id="role_id" data-placeholder="{{ __('translations.labels.select2.placeholders.role') }}"
                                class="form-control select2 @error('role_id') is-invalid @enderror">

                                    <option></option>
                                    
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}"
                                            @if( isset($user) && $user->hasRole($role))
                                                selected
                                            @elseif( old('role_id') && old('role_id') == $role->id ) 
                                                selected
                                            @endif   
                                        >{{ $role->name }}</option>
                                    @endforeach
                            </select>
                            @error('role_id')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mb-3">
                        <div class="btn-group" role="group" aria-label="Cancel or submit form">
                            <a href="{{ route('users.index') }}" type="submit" class="btn btn-secondary"> {{ __('translations.buttons.cancel') }} </a>

                            <button type="submit" class="btn btn-primary"> 
                                @if( isset($user) )
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