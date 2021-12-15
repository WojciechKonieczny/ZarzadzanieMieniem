{{-- szablon bedziie wykorzystywal app.blade.php --}} 
<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/manufacturers.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('js/manufacturers.js') }}"></script>
    </x-slot>

    <div class="container">
        <h1>{{ __('translations.manufacturers.title') }}</h1>

        <div class="d-flex flex-row-reverse mb-4">
            <a href=" {{ route('manufacturers.create') }} " type="button" class="btn btn-primary" role="button"> 
                {{ __('translations.manufacturers.labels.create') }}
            </a>
        </div>

        <div class="table-container table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('translations.manufacturers.attribute.name') }}</th>
                        <th>{{ __('translations.manufacturers.attribute.count') }}</th>
                        <th>{{ __('translations.attribute.created_at') }}</th>
                        <th>{{ __('translations.attribute.updated_at') }}</th>
                        <th>{{ __('translations.attribute.deleted_at') }}</th>
                        <th class="always-visible"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($manufacturers as $manufacturer)
                    <tr>
                        <td> {{ $manufacturer->id }} </td>
                        <td> {{ $manufacturer->name }} </td>
                        <td> {{ $manufacturer->items_count }} </td>
                        <td> {{ $manufacturer->created_at }} </td>
                        <td> {{ $manufacturer->updated_at }} </td>
                        <td> {{ $manufacturer->deleted_at }} </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="action buttons">
                                @can('manufacturers.store')
                                    <x-datatables.action-link class="btn btn-primary"
                                        url="{{ route('manufacturers.edit', $manufacturer) }}" {{-- atrybut url przekazywany do komponentu --}}
                                        title="{{ __('translations.manufacturers.labels.edit') }}">
                                        <i class="bi-pencil"></i>
                                    </x-action-link>
                                @endcan

                                @can('manufacturers.destroy')
                                    @if( $manufacturer->deleted_at == null )
                                        <x-datatables.confirm
                                            :action="route('manufacturers.destroy', $manufacturer)" method="DELETE"
                                            :confirm-text="__('translations.buttons.yes')" confirm-class="btn btn-danger me-2"
                                            :cancel-text="__('translations.buttons.no')" cancel-class="btn btn-secondary ms-2"
                                            icon="question"
                                            :message="__('translations.manufacturers.labels.destroy-question', ['name' => $manufacturer->name] )" 
                                            button-class="btn btn-danger" :button-title="__('translations.manufacturers.labels.destroy')">
                                            <i class="bi bi-trash"></i>
                                        </x-confirm>
                                    @else
                                        <x-datatables.confirm
                                            :action="route('manufacturers.restore', $manufacturer)" method="PUT"
                                            :confirm-text="__('translations.buttons.yes')" confirm-class="btn btn-success me-2"
                                            :cancel-text="__('translations.buttons.no')" cancel-class="btn btn-secondary ms-2"
                                            icon="question"
                                            :message="__('translations.manufacturers.labels.restore-question', ['name' => $manufacturer->name] )" 
                                            button-class="btn btn-success" :button-title="__('translations.manufacturers.labels.restore')">
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