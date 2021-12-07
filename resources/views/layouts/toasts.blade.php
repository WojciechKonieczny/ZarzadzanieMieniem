{{-- template wykorzystywany do wyswietlania wszystkich `toastow` w sesji --}}

<div class="position-fixed bottom-0 end-0 ps-3" style='z-index:999'>

    <div class="toast-container">
        @if( session('success') )

            {{-- w sesji mozemy miec jeden toast sukcesu, badz kilka (sa wtedy przechowywane w tablicy) --}}
            @if( is_array( session('success') ) )
                @foreach ( session('success') as $msg )
                    <x-toast class="mb-4" type="success">
                        {{ $msg }}
                    </x-toast>
                @endforeach
            @else
                <x-toast class="mb-4" type="success">
                    {{ session('success') }}
                </x-toast>
            @endif
            
        @endif
            

        @if( session('warning') )

            @if( is_array( session('warning') ) )
                @foreach ( session('warning') as $msg )
                    <x-toast class="mb-4" type="warning">
                        {{ $msg }}
                    </x-toast>
                @endforeach
            @else
                <x-toast class="mb-4" type="warning">
                    {{ session('warning') }}
                </x-toast>
            @endif

        @endif

        @if( session('danger') )

            @if( is_array( session('danger') ) )
                @foreach ( session('danger') as $msg )
                    <x-toast class="mb-4" type="danger">
                        {{ $msg }}
                    </x-toast>
                @endforeach
            @else
                <x-toast class="mb-4" type="danger">
                    {{ session('danger') }}
                </x-toast>
            @endif
            
        @endif
    </div>

</div>