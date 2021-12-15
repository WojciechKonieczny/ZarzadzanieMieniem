{{-- szablon bedziie wykorzystywal app.blade.php --}} 
<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/categories.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('js/categories.js') }}"></script>
    </x-slot>

    <div class="container">
        <h1>{{ __('translations.categories.title') }}</h1>

        <div class="d-flex flex-row-reverse mb-4">
            <a href=" {{ route('categories.create') }} " type="button" class="btn btn-primary" role="button"> 
                {{ __('translations.categories.labels.create') }}
            </a>
        </div>

       <div class="table-container table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('translations.categories.attribute.name') }}</th>
                        <th>{{ __('translations.attribute.created_at') }}</th>
                        <th>{{ __('translations.attribute.updated_at') }}</th>
                        <th>{{ __('translations.attribute.deleted_at') }}</th>
                        <th class="always-visible"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td> {{ $category->id }} </td>
                        <td> {{ $category->name }} </td>
                        <td> {{ $category->created_at }} </td>
                        <td> {{ $category->updated_at }} </td>
                        <td> {{ $category->deleted_at }} </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="action buttons">
                                @can('categories.store')
                                    <x-datatables.action-link class="btn btn-primary"
                                        url="{{ route('categories.edit', $category) }}" {{-- atrybut url przekazywany do komponentu --}}
                                        title="{{ __('translations.categories.labels.edit') }}">
                                        <i class="bi-pencil"></i>
                                    </x-action-link>
                                @endcan

                                @can('categories.destroy')
                                    @if( $category->deleted_at == null )
                                        <x-datatables.confirm
                                            :action="route('categories.destroy', $category)" method="DELETE"
                                            :confirm-text="__('translations.buttons.yes')" confirm-class="btn btn-danger me-2"
                                            :cancel-text="__('translations.buttons.no')" cancel-class="btn btn-secondary ms-2"
                                            icon="question"
                                            :message="__('translations.categories.labels.destroy-question', ['name' => $category->name] )" 
                                            button-class="btn btn-danger" :button-title="__('translations.categories.labels.destroy')">
                                            <i class="bi bi-trash"></i>
                                        </x-confirm>
                                    @else
                                        <x-datatables.confirm
                                            :action="route('categories.restore', $category)" method="PUT"
                                            :confirm-text="__('translations.buttons.yes')" confirm-class="btn btn-success me-2"
                                            :cancel-text="__('translations.buttons.no')" cancel-class="btn btn-secondary ms-2"
                                            icon="question"
                                            :message="__('translations.categories.labels.restore-question', ['name' => $category->name] )" 
                                            button-class="btn btn-success" :button-title="__('translations.categories.labels.restore')">
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