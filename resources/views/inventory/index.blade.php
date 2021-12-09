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
                    </tr>
                </thead>

                <tbody>
                    @foreach($items as $item)
                        @foreach ($item->users as $it )
                            @hasrole('admin')
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