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

        <div class="d-flex flex-row-reverse mb-4">
            <a href=" {{ route('users.create') }} " type="button" class="btn btn-primary" role="button"> 
                {{ __('translations.users.labels.create') }}
            </a>
        </div>

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
                        <th class="always-visible"></th>
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
                        <td>
                            <div class="btn-group" role="group" aria-label="action buttons">
                                @can('users.store')
                                    <x-datatables.action-link class="btn btn-primary"
                                        url="{{ route('users.edit', $user) }}" {{-- atrybut url przekazywany do komponentu --}}
                                        title="{{ __('translations.users.labels.edit') }}">
                                        <i class="bi-pencil"></i>
                                    </x-action-link>
                                @endcan

                                @can('users.destroy')
                                @if( $user->deleted_at == null )
                                    <x-datatables.confirm
                                        :action="route('users.destroy', $user)" method="DELETE"
                                        :confirm-text="__('translations.buttons.yes')" confirm-class="btn btn-danger me-2"
                                        :cancel-text="__('translations.buttons.no')" cancel-class="btn btn-secondary ms-2"
                                        icon="question"
                                        :message="__('translations.users.labels.destroy-question', ['email' => $user->email] )" 
                                        button-class="btn btn-danger" :button-title="__('translations.users.labels.destroy')">
                                        <i class="bi bi-trash"></i>
                                    </x-confirm>
                                @else
                                    <x-datatables.confirm
                                        :action="route('users.restore', $user)" method="PUT"
                                        :confirm-text="__('translations.buttons.yes')" confirm-class="btn btn-success me-2"
                                        :cancel-text="__('translations.buttons.no')" cancel-class="btn btn-secondary ms-2"
                                        icon="question"
                                        :message="__('translations.users.labels.restore-question', ['email' => $user->email] )" 
                                        button-class="btn btn-success" :button-title="__('translations.users.labels.restore')">
                                        <i class="bi bi-trash"></i>
                                    </x-confirm>
                                @endif
                            @endcan
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>