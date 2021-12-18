{{-- szablon bedziie wykorzystywal app.blade.php --}} 
<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/inventory.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('js/inventory.js') }}"></script>
    </x-slot>

    <div class="container">
        <h1>
            @hasrole('admin')
                {{ __('translations.inventory.title') }}

                <div class="d-flex flex-row-reverse mb-4">
                    <a href=" {{ route('inventory.create') }} " type="button" class="btn btn-primary" role="button"> 
                        {{ __('translations.inventory.labels.create') }}
                    </a>
                </div>
            @endhasrole

            @hasrole('user')
                {{ __('translations.inventory.titleForUsers') }}
            @endhasrole
        </h1>

        <div class="table-container table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('translations.inventory.attribute.manufacturer') }}</th>{{-- szablon bedziie wykorzystywal app.blade.php --}} 
                        <th>{{ __('translations.inventory.attribute.model_or_name') }}</th>
                        <th>{{ __('translations.inventory.attribute.category') }}</th>
                        <th>{{ __('translations.inventory.attribute.serial_number') }}</th>
                        <th>{{ __('translations.inventory.attribute.purcharse_date') }}</th>
                        <th>{{ __('translations.inventory.attribute.warranty_end') }}</th>
                        <th>{{ __('translations.inventory.attribute.user') }}</th>
                        <th>{{ __('translations.inventory.attribute.assignment_date') }}</th>
                        @hasrole('admin')
                            <th class="always-visible"></th>
                        @endhasrole
                    </tr>
                </thead>

                <tbody>
                    @foreach($items as $item)
                        @foreach ($item->users as $it )
                            @hasrole('admin')
                            <tr>
                                <td> {{ $it->pivot->id }} </td>
                                <td> {{ $item->manufacturer? $item->manufacturer->name : '' }} </td>
                                <td> {{ $item->modelorname? $item->modelorname->name : '' }} </td>
                                <td> {{ $item->category? $item->category->name  : '' }} </td>
                                <td> {{ $it->pivot->serial_number }} </td>
                                <td> {{ $it->pivot->purcharse_date }} </td>
                                <td> {{ $it->pivot->warranty_end }} </td>
                                <td> {{ $it->email }} </td>
                                <td> {{ $it->pivot->assignment_date }} </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="action buttons">
                                        @can('itemsUsers.store')
                                            <x-datatables.action-link class="btn btn-primary"
                                                url="{{ route('inventory.edit', $it->pivot->id) }}" {{-- atrybut url przekazywany do komponentu --}}
                                                title="{{ __('translations.inventory.labels.edit') }}">
                                                <i class="bi-pencil"></i>
                                            </x-action-link>
                                        @endcan

                                        @can('itemsUsers.destroy')
                                            <x-datatables.confirm
                                                :action="route('inventory.destroy', $it->pivot->id)" method="DELETE"
                                                :confirm-text="__('translations.buttons.yes')" confirm-class="btn btn-danger me-2"
                                                :cancel-text="__('translations.buttons.no')" cancel-class="btn btn-secondary ms-2"
                                                icon="question"
                                                :message="__('translations.inventory.labels.destroy-question', ['manufacturer' => $item->manufacturer->name, 'model_or_name' => $item->modelorname->name, 'serial_number' => $it->pivot->serial_number] )" 
                                                button-class="btn btn-danger" :button-title="__('translations.inventory.labels.destroy')">
                                                <i class="bi bi-trash"></i>
                                            </x-confirm>
                                    @endcan
                                    </div>
                                </td>
                            @endhasrole
                        
                            {{-- uzytkownik widzi tylko mienie, przypisane do niego --}}
                            @hasrole('user')
                                @if( $it->email == Auth::user()->email  )
                                    <tr>
                                        <td> {{ $it->pivot->id }} </td>
                                        <td> {{ $item->manufacturer->name}} </td>
                                        <td> {{ $item->modelorname->name }} </td>
                                        <td> {{ $item->category->name }} </td>
                                        <td> {{ $it->pivot->serial_number }} </td>
                                        <td> {{ $it->pivot->purcharse_date }} </td>
                                        <td> {{ $it->pivot->warranty_end }} </td>
                                        <td> {{ $it->email }} </td>
                                        <td> {{ $it->pivot->assignment_date }} </td>
                                    </tr>
                                @endif
                            @endhasrole
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>