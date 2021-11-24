{{-- szablon bedziie wykorzystywal app.blade.php --}} 
<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/users.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('js/users.js') }}"></script>
    </x-slot>

    <div class="container">
        <h1>{{ __('translations.users.title') }}</h1>

        <div class="table-container table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('translations.users.attribute.name') }}</th>
                        <th>{{ __('translations.users.attribute.mail') }}</th>
                        <th>{{ __('translations.users.attribute.role') }}</th>
                        <th>{{ __('translations.users.attribute.count') }}</th>
                        <th>{{ __('translations.attribute.created_at') }}</th>
                        <th>{{ __('translations.attribute.updated_at') }}</th>
                        <th>{{ __('translations.attribute.deleted_at') }}</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td> {{ $user->id }} </td>
                        <td> {{ $user->name }} </td>
                        <td> {{ $user->email }} </td>
                        <td> 
                            @foreach ($user->getRoleNames() as $role )
                                {{ $role }}
                            @endforeach
                        </td>
                        <td> {{ $user->items_count }}  </td>
                        <td> {{ $user->created_at }} </td>
                        <td> {{ $user->updated_at }} </td>
                        <td> {{ $user->deleted_at }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>