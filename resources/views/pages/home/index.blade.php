<x-layouts.master>

    {{-- MOBILE-NAV --}}
    @include('partials.nav.mobile')

    <div class="hotale-body-outer-wrapper">
        <div class="hotale-body-wrapper clearfix hotale-with-frame ">

            {{-- TOP-BAR --}}
            @include('partials.top-bar')

            <header
                class="hotale-header-wrap hotale-header-style-plain hotale-style-top-bar-logo hotale-sticky-navigation hotale-style-slide"
                data-navigation-offset="75">
                <div class="hotale-header-background"></div>
                <div class="hotale-header-container hotale-header-full">
                    <div class="hotale-header-container-inner clearfix">

                        {{-- NAV-DESKTOP --}}
                        @include('partials.nav.desktop')

                    </div>
                </div>
            </header>


            {{-- MAIN --}}
            <div class="hotale-page-wrapper" id="hotale-page-wrapper">
                <div class="gdlr-core-page-builder-body">

                    {{-- HERO--BOOKING --}}
                    @include('pages.home.partials.hero')


                    {{-- OUR-ROOMS --}}
                    @include('pages.home.partials.rooms')

                    {{-- ATTRACTIONS --}}
                    @include('pages.home.partials.attractions')

                    {{-- CTA --}}
                    @include('pages.home.partials.cta')

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


            {{-- FOOTER --}}
            @include('partials.footer')


        </div>
    </div>




</x-layouts.master>
