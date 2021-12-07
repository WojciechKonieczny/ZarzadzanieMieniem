<x-app-layout>

    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/users.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('js/users.js') }}"></script>
    </x-slot>

    <div class="container">

        <h1> {{ __('translations.users.title') }} </h1>

        <div class="card">
            <div class="card-body">

                <h5 class="card-title"> {{ __('translations.users.labels.create') }} </h5>

                <form action="{{ route('users.store') }}" id="category-form" method="POST">
                    @csrf

                    <div class="row mb-3">
                        <label for="user-name" class="col-sm-2 col-form-label">{{ __('translations.users.attribute.name') }}:</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="user-name" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="user-mail" class="col-sm-2 col-form-label">{{ __('translations.users.attribute.mail') }}:</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="user-mail" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="user-password" class="col-sm-2 col-form-label">{{ __('translations.users.attribute.password') }}:</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control @error('email') is-invalid @enderror" id="user-password" value="{{ old('email') }}">
                            @error('password')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mb-3">
                        <div class="btn-group" role="group" aria-label="Cancel or submit form">
                            <a href="{{ route('users.index') }}" type="submit" class="btn btn-secondary"> {{ __('translations.buttons.cancel') }} </a>
                            <button type="submit" class="btn btn-primary"> {{ __('translations.buttons.store') }} </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>

</x-app-layout>