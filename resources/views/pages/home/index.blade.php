<x-layouts.master>
            {{-- MAIN --}}
            <div class="hotale-page-wrapper" id="hotale-page-wrapper">
                <div class="gdlr-core-page-builder-body">

                    {{-- HERO--BOOKING --}}
                    @include('pages.home.partials.hero')


                    {{-- OUR-ROOMS --}}
                    @include('pages.home.partials.rooms')

                    {{-- SPACIOUS-APARTMENTS --}}
                    @include('pages.home.partials.features')

                    {{-- HERO--SECOND --}}
                    @include('pages.home.partials.hero-second')

                    {{-- ATTRACTIONS--SECOND --}}
                    @include('pages.home.partials.attractions-second')

                    {{-- TESTIMONIALS --}}
                    @include('pages.home.partials.testimonials')

                    {{-- GALLERY --}}
                    @include('pages.home.partials.gallery')

                </div>
            </div>

</x-layouts.master>
