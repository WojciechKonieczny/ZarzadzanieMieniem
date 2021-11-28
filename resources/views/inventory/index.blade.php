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
                        {{-- <th>{{ __('translations.attribute.created_at') }}</th>
                        <th>{{ __('translations.attribute.updated_at') }}</th>
                        <th>{{ __('translations.attribute.deleted_at') }}</th> --}}
                    </tr>
                </thead>

                <tbody>
                    @foreach($items as $item)
                        @hasrole('admin')
                        <tr>
                            <td> {{ $item->id }} </td>
                            <td> {{ $item->manufacturer}} </td>
                            <td> {{ $item->model }} </td>
                            <td> {{ $item->category }} </td>
                            <td> {{ $item->serial_number }} </td>
                            <td> {{ $item->purcharse_date }} </td>
                            <td> {{ $item->warranty_end }} </td>
                            <td> {{ $item->email }} </td>
                            <td> {{ $item->assignment_date }} </td>
                            {{-- <td> {{ $item->created_at }} </td>
                            <td> {{ $item->updated_at }} </td>
                            <td> {{ $item->deleted_at }} </td> --}}
                        </tr>
                        @endhasrole

                        @hasrole('user')
                            @if( $item->email == Auth::user()->email  )
                                <tr>
                                    <td> {{ $item->id }} </td>
                                    <td> {{ $item->manufacturer}} </td>
                                    <td> {{ $item->model }} </td>
                                    <td> {{ $item->category }} </td>
                                    <td> {{ $item->serial_number }} </td>
                                    <td> {{ $item->purcharse_date }} </td>
                                    <td> {{ $item->warranty_end }} </td>
                                    <td> {{ $item->email }} </td>
                                    <td> {{ $item->assignment_date }} </td>
                                    {{-- <td> {{ $item->created_at }} </td>
                                    <td> {{ $item->updated_at }} </td>
                                    <td> {{ $item->deleted_at }} </td> --}}
                                </tr>
                            @endif
                        @endhasrole
                    @endforeach
            </table>
        </div>
    </div>
</x-app-layout>