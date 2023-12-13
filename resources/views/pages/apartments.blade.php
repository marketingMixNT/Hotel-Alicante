<x-layouts.master>
    {{-- @section('title', '')
    @section('description', '') --}}

    <div
        style="background-image: url('{{ asset('assets/images/arenal-a3a/arenal-a3a_12.webp') }}'); height:500px;width:100% background-position:center;background-size:cover">
    </div>

    @php
        $apartmentFiles = ['pages.apartments.cards.apartment-1', 'pages.apartments.cards.apartment-2', 'pages.apartments.cards.apartment-3', 'pages.apartments.cards.apartment-4', 'pages.apartments.cards.apartment-5'];

        shuffle($apartmentFiles);
    @endphp

    <x-apartments.grid>

        @foreach ($apartmentFiles as $file)
            @include($file)
        @endforeach

    </x-apartments.grid>

</x-layouts.master>
