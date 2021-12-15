{{-- szablon bedziie wykorzystywal app.blade.php --}} 
<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/items.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('js/items.js') }}"></script>
    </x-slot>

    <div class="container">
        <h1>{{ __('translations.items.title') }}</h1>

        <div class="d-flex flex-row-reverse mb-4">
            <a href=" {{ route('items.create') }} " type="button" class="btn btn-primary" role="button"> 
                {{ __('translations.items.labels.create') }}
            </a>
        </div>

        <div class="table-container table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('translations.items.attribute.manufacturer') }}</th>
                        <th>{{ __('translations.items.attribute.model_or_name') }}</th>
                        <th>{{ __('translations.items.attribute.category') }}</th>
                        <th>{{ __('translations.items.attribute.users_count') }}</th>
                        <th>{{ __('translations.attribute.created_at') }}</th>
                        <th>{{ __('translations.attribute.updated_at') }}</th>
                        <th>{{ __('translations.attribute.deleted_at') }}</th>
                        <th class="always-visible"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($items as $item)
                    <tr>
                        <td> {{ $item->id }} </td>
                        <td> {{ $item->manufacturer? $item->manufacturer->name : '' }} </td>
                        <td> {{ $item->modelorname? $item->modelorname->name : '' }} </td>
                        <td> {{ $item->category? $item->category->name  : '' }} </td>
                        <td> {{ $item->users_count}} </td>
                        <td> {{ $item->created_at }} </td>
                        <td> {{ $item->updated_at }} </td>
                        <td> {{ $item->deleted_at }} </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="action buttons">
                                @can('items.store')
                                    <x-datatables.action-link class="btn btn-primary"
                                        url="{{ route('items.edit', $item) }}" {{-- atrybut url przekazywany do komponentu --}}
                                        title="{{ __('translations.items.labels.edit') }}">
                                        <i class="bi-pencil"></i>
                                    </x-action-link>
                                @endcan

                                @can('items.destroy')
                                    @if( $item->deleted_at == null )
                                        <x-datatables.confirm
                                            :action="route('items.destroy', $item)" method="DELETE"
                                            :confirm-text="__('translations.buttons.yes')" confirm-class="btn btn-danger me-2"
                                            :cancel-text="__('translations.buttons.no')" cancel-class="btn btn-secondary ms-2"
                                            icon="question"
                                            :message="__('translations.items.labels.destroy-question', ['manufacturer' => $item->manufacturer->name, 'model_or_name' => $item->modelorname->name] )" 
                                            button-class="btn btn-danger" :button-title="__('translations.items.labels.destroy')">
                                            <i class="bi bi-trash"></i>
                                        </x-confirm>
                                    @else
                                        <x-datatables.confirm
                                            :action="route('items.restore', $item)" method="PUT"
                                            :confirm-text="__('translations.buttons.yes')" confirm-class="btn btn-success me-2"
                                            :cancel-text="__('translations.buttons.no')" cancel-class="btn btn-secondary ms-2"
                                            icon="question"
                                            :message="__('translations.items.labels.restore-question', ['manufacturer' => $item->manufacturer->name, 'model_or_name' => $item->modelorname->name]  )" 
                                            button-class="btn btn-success" :button-title="__('translations.items.labels.restore')">
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