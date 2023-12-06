<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel</title>
    @include('includes.styles')
    @include('includes.fonts')
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>

<body
    class="home page-template-default page page-id-15020 theme-hotale gdlr-core-body tourmaster-body woocommerce-no-js hotale-body hotale-body-front hotale-full hotale-with-sticky-navigation hotale-blockquote-style-3 gdlr-core-link-to-lightbox"
    data-home-url="index.html">


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

            {{ $slot }}

            {{-- FOOTER --}}
            @include('partials.footer')
            {{-- @include('partials.cookie-bar') --}}

        </div>
    </div>


    @include('includes.scripts')
</body>

</html>
