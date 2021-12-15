{{-- szablon bedziie wykorzystywal app.blade.php --}} 
<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/models_or_names.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('js/models_or_names.js') }}"></script>
    </x-slot>

    <div class="container">
        <h1>{{ __('translations.models_or_names.title') }}</h1>
        <div class="d-flex flex-row-reverse mb-4">
            <a href=" {{ route('models.create') }} " type="button" class="btn btn-primary" role="button"> 
                {{ __('translations.models_or_names.labels.create') }}
            </a>
        </div>

        <div class="table-container table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('translations.models_or_names.attribute.name') }}</th>
                        <th>{{ __('translations.attribute.created_at') }}</th>
                        <th>{{ __('translations.attribute.updated_at') }}</th>
                        <th>{{ __('translations.attribute.deleted_at') }}</th>
                        <th class="always-visible"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($models as $model)
                    <tr>
                        <td> {{ $model->id }} </td>
                        <td> {{ $model->name }} </td>
                        <td> {{ $model->created_at }} </td>
                        <td> {{ $model->updated_at }} </td>
                        <td> {{ $model->deleted_at }} </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="action buttons">
                                @can('models.store')
                                    <x-datatables.action-link class="btn btn-primary"
                                        url="{{ route('models.edit', $model) }}" {{-- atrybut url przekazywany do komponentu --}}
                                        title="{{ __('translations.models_or_names.labels.edit') }}">
                                        <i class="bi-pencil"></i>
                                    </x-action-link>
                                @endcan

                                @can('models.destroy')
                                    @if( $model->deleted_at == null )
                                        <x-datatables.confirm
                                            :action="route('models.destroy', $model)" method="DELETE"
                                            :confirm-text="__('translations.buttons.yes')" confirm-class="btn btn-danger me-2"
                                            :cancel-text="__('translations.buttons.no')" cancel-class="btn btn-secondary ms-2"
                                            icon="question"
                                            :message="__('translations.models_or_names.labels.destroy-question', ['name' => $model->name] )" 
                                            button-class="btn btn-danger" :button-title="__('translations.models_or_names.labels.destroy')">
                                            <i class="bi bi-trash"></i>
                                        </x-confirm>
                                    @else
                                        <x-datatables.confirm
                                            :action="route('models.restore', $model)" method="PUT"
                                            :confirm-text="__('translations.buttons.yes')" confirm-class="btn btn-success me-2"
                                            :cancel-text="__('translations.buttons.no')" cancel-class="btn btn-secondary ms-2"
                                            icon="question"
                                            :message="__('translations.models_or_names.labels.restore-question', ['name' => $model->name] )" 
                                            button-class="btn btn-success" :button-title="__('translations.models_or_names.labels.restore')">
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