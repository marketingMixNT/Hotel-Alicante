<x-layouts.master>

{{--MOBILE-NAV--}}
@include('partials.nav.mobile')

    <div class="hotale-body-outer-wrapper" >
        <div class="hotale-body-wrapper clearfix hotale-with-frame ">

            {{--TOP-BAR--}}
           @include('partials.top-bar')

            <header class="hotale-header-wrap hotale-header-style-plain hotale-style-top-bar-logo hotale-sticky-navigation hotale-style-slide" data-navigation-offset="75">
                <div class="hotale-header-background"></div>
                <div class="hotale-header-container hotale-header-full">
                    <div class="hotale-header-container-inner clearfix">

                        {{--NAV-DESKTOP--}}
           @include('partials.nav.desktop')

                    </div>
                </div>
            </header>


            
            <div class="hotale-page-wrapper" id="hotale-page-wrapper">
                <div class="gdlr-core-page-builder-body">

                     {{--HERO--BOOKING--}}
                   @include('pages.home.partials.hero')

                    <div class="gdlr-core-pbf-wrapper rooms-container" style="padding: 90px 0px 30px 0px;">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-background-wrap" style="top: 155px;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/hotel-room-bg.png); background-repeat: no-repeat; background-position: top center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            
{{--OUR-ROOMS--}}
@include('pages.home.partials.rooms')

                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper attractions-container"  id="gdlr-core-wrapper-2">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">

                            {{--ATTRACTIONS--}}
                           @include('pages.home.partials.attractions')
                           
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper cta-container" style="padding: 115px 0px 75px 0px;" id="gdlr-core-wrapper-3">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #f6f6f6;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/hotel-about-bg.png); background-repeat: no-repeat; background-position: top center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js" >
                            
                            {{--CTA--}}
@include('pages.home.partials.cta')

                        </div>
                    </div>
                   
 {{--HERO--SECOND--}}
 @include('pages.home.partials.hero-second')
                   
 {{--ATTRACTIONS--SECOND--}}
 @include('pages.home.partials.attractions-second')

               {{--TESTIMONIALS--}}
 @include('pages.home.partials.testimonials')    
 
  {{--GALLERY--}}
  @include('pages.home.partials.gallery')  
                    

                  
                </div>
            </div>


 {{--FOOTER--}}
 @include('partials.footer')  

          
        </div>
    </div>


   

</x-layouts.master>
