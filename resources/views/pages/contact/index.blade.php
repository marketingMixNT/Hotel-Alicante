<x-layouts.master>
    {{-- @section('title', '')
    @section('description', '') --}}
<x-breadcrumbs title="Contact" bgi="{{asset('assets/images/hotel_1.webp')}}"/>

@include('pages.contact.partials.contact')
@include('pages.contact.partials.contact-form')
@include('pages.contact.partials.contact-map')

</x-layouts.master>
