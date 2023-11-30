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
                    <div class="gdlr-core-pbf-wrapper" style="padding: 115px 0px 75px 0px;" id="gdlr-core-wrapper-3">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #f6f6f6;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/hotel-about-bg.png); background-repeat: no-repeat; background-position: top center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id="gdlr-core-column-7">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin: 0px 0px 0px 0px; padding: 40px 90px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInLeft" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 37px; font-weight: 400; letter-spacing: 0px; text-transform: none;">
                                                            Offering a series of comfortable and lavish hotels residences<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align">
                                                    <div class="gdlr-core-divider-container" style="max-width: 54px;">
                                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #193573; border-width: 5px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 22px;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 20px; text-transform: none; color: #94959b;">
                                                        <p>All our hotels are fabulous, they are destinations unto themselves. We have crossed the globe to bring you only the best.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <a
                                                        class="gdlr-core-button gdlr-core-button-solid gdlr-core-left-align gdlr-core-button-no-border"
                                                        href="/hotale/hotel1/room-search/?room_amount=1&#038;room-search="
                                                        id="gdlr-core-button-id-4"
                                                    >
                                                        <span class="gdlr-core-content">Book Now</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-30">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-item-pdlr">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-rectangle" style="border-width: 0px;">
                                                        <img src="upload/hotel-about-right-img-1.jpg" alt="" width="570" height="450" title="hotel-about-right-img" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 90px 0px 90px 0px;" id="gdlr-core-wrapper-4">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id="gdlr-core-column-8">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 30px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <div class="gdlr-core-text-box-item-content" style="text-transform: none; color: #0a0a0a;">
                                                        <p>
                                                            <span style="font-size: 55px; font-weight: 500; margin-right: 12px; letter-spacing: 4px;">5</span>
                                                            <span class="mmr30" style="font-size: 22px; font-weight: 400; margin-right: 80px; letter-spacing: 7px;">stars</span>
                                                            <span style="font-size: 55px; font-weight: 500; margin-right: 12px; letter-spacing: 4px;">25</span>
                                                            <span style="font-size: 22px; font-weight: 400; margin-right: 12px; letter-spacing: 7px;">rooms</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-9">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 30px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInRight" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 34px; line-height: 1.4; font-weight: 400; letter-spacing: 5px; text-transform: none; color: #0a0a0a;">
                                                        <p>Our hotel is located in the heart of the New Forrest. A five stars lifestyle surrounded by the forest.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <a
                                                        class="gdlr-core-button gdlr-core-button-transparent gdlr-core-left-align gdlr-core-button-with-border"
                                                        href="/hotale/hotel1/about-us/"
                                                        style="
                                                            font-size: 13px;
                                                            font-style: normal;
                                                            font-weight: 600;
                                                            letter-spacing: 4px;
                                                            color: #000000;
                                                            padding: 15px 0px 10px 0px;
                                                            text-transform: uppercase;
                                                            border-radius: 0px;
                                                            -moz-border-radius: 0px;
                                                            -webkit-border-radius: 0px;
                                                            border-width: 0px 0px 1px 0px;
                                                            border-color: #dadada;
                                                        "
                                                    >
                                                        <span class="gdlr-core-content">More About US<i class="gdlr-core-pos-right icon-arrow-right" style="font-size: 16px; color: #000000;"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 120px 0px 120px 0px;" id="gdlr-core-wrapper-5">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #f6f6f6;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-10">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" style="max-width: 1170px;">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix gdlr-core-gallery-item-style-grid-no-space gdlr-core-item-pdlr" style="padding-bottom: 0px;" id="gdlr-core-gallery-1">
                                                    <div class="gdlr-core-gallery-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                                        <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-10 gdlr-core-column-first">
                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                <img src="upload/logo1.png" alt="" width="390" height="100" title="logo1" />
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-10">
                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                <img src="upload/logo2.png" alt="" width="390" height="100" title="logo2" />
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-10">
                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                <img src="upload/logo3.png" alt="" width="390" height="100" title="logo3" />
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-10">
                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                <img src="upload/logo4.png" alt="" width="390" height="100" title="logo4" />
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-10">
                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                <img src="upload/logo5.png" alt="" width="390" height="100" title="logo5" />
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-10">
                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                <img src="upload/logo6.png" alt="" width="390" height="100" title="logo6" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 100px 0px 110px 0px;">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-background-wrap" style="top: 350px;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/hotel-testimonial-bg.png); background-repeat: no-repeat; background-position: top center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-11">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" style="max-width: 660px;">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 50px; font-weight: 400; letter-spacing: 0px; text-transform: none;">
                                                            Testimonial<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                    <span
                                                        class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption"
                                                        style="font-size: 20px; font-style: normal; letter-spacing: 0px; color: #94959b; margin-top: 20px;"
                                                    >
                                                        All our hotels are fabulous, they are destinations unto themselves. We have crossed the globe to bring you only the best.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                                                    <div class="gdlr-core-divider-container" style="max-width: 43px;">
                                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #193573; border-width: 2px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-12">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 100px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeIn" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-testimonial-item gdlr-core-item-pdb clearfix gdlr-core-testimonial-style-left-2 gdlr-core-item-pdlr">
                                                    <div
                                                        class="gdlr-core-flexslider flexslider gdlr-core-js-2 gdlr-core-bullet-style-round gdlr-core-color-bullet"
                                                        data-type="carousel"
                                                        data-column="2"
                                                        data-move="1"
                                                        data-nav="bullet"
                                                        data-controls-top-margin="70px"
                                                    >
                                                        <ul class="slides">
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="gdlr-core-testimonial clearfix gdlr-core-with-frame">
                                                                    <div
                                                                        class="gdlr-core-testimonial-frame clearfix gdlr-core-skin-e-background gdlr-core-outer-frame-element"
                                                                        style="
                                                                            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -moz-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            border-radius: 0px 0px 0px 0px;
                                                                            -moz-border-radius: 0px 0px 0px 0px;
                                                                            -webkit-border-radius: 0px 0px 0px 0px;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="gdlr-core-testimonial-frame-border"
                                                                            style="border-radius: 0px 0px 0px 0px; -moz-border-radius: 0px 0px 0px 0px; -webkit-border-radius: 0px 0px 0px 0px;"
                                                                        ></div>
                                                                        <div class="gdlr-core-testimonial-author-image gdlr-core-media-image">
                                                                            <img
                                                                                src="upload/customer1-150x150.jpg"
                                                                                alt=""
                                                                                width="150"
                                                                                height="150"
                                                                                title="customer1"
                                                                            />
                                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon">&#8220;</div>
                                                                        </div>
                                                                        <div class="gdlr-core-testimonial-content-wrap">
                                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 18px; color: #656565; padding-bottom: 25px;">
                                                                                <p>
                                                                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel
                                                                                    the charm of existence.
                                                                                </p>
                                                                            </div>
                                                                            <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                                <div class="gdlr-core-testimonial-author-content">
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"
                                                                                        style="color: #313131; font-size: 19px; font-weight: 600; font-style: normal; letter-spacing: 0px; text-transform: none;"
                                                                                    >
                                                                                        Joan Smith
                                                                                    </div>
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption"
                                                                                        style="color: #313131; font-size: 14px; font-style: normal; font-weight: 500;"
                                                                                    >
                                                                                        Solo Traveler
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="gdlr-core-testimonial clearfix gdlr-core-with-frame">
                                                                    <div
                                                                        class="gdlr-core-testimonial-frame clearfix gdlr-core-skin-e-background gdlr-core-outer-frame-element"
                                                                        style="
                                                                            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -moz-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            border-radius: 0px 0px 0px 0px;
                                                                            -moz-border-radius: 0px 0px 0px 0px;
                                                                            -webkit-border-radius: 0px 0px 0px 0px;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="gdlr-core-testimonial-frame-border"
                                                                            style="border-radius: 0px 0px 0px 0px; -moz-border-radius: 0px 0px 0px 0px; -webkit-border-radius: 0px 0px 0px 0px;"
                                                                        ></div>
                                                                        <div class="gdlr-core-testimonial-author-image gdlr-core-media-image">
                                                                            <img
                                                                                src="upload/customer03-150x150.jpg"
                                                                                alt=""
                                                                                width="150"
                                                                                height="150"
                                                                                title="customer03"
                                                                            />
                                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon">&#8220;</div>
                                                                        </div>
                                                                        <div class="gdlr-core-testimonial-content-wrap">
                                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 18px; color: #656565; padding-bottom: 25px;">
                                                                                <p>
                                                                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel
                                                                                    the charm of existence.
                                                                                </p>
                                                                            </div>
                                                                            <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                                <div class="gdlr-core-testimonial-author-content">
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"
                                                                                        style="color: #313131; font-size: 19px; font-weight: 600; font-style: normal; letter-spacing: 0px; text-transform: none;"
                                                                                    >
                                                                                        William Jones
                                                                                    </div>
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption"
                                                                                        style="color: #313131; font-size: 14px; font-style: normal; font-weight: 500;"
                                                                                    >
                                                                                        Solo Traveler
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="gdlr-core-testimonial clearfix gdlr-core-with-frame">
                                                                    <div
                                                                        class="gdlr-core-testimonial-frame clearfix gdlr-core-skin-e-background gdlr-core-outer-frame-element"
                                                                        style="
                                                                            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -moz-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            border-radius: 0px 0px 0px 0px;
                                                                            -moz-border-radius: 0px 0px 0px 0px;
                                                                            -webkit-border-radius: 0px 0px 0px 0px;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="gdlr-core-testimonial-frame-border"
                                                                            style="border-radius: 0px 0px 0px 0px; -moz-border-radius: 0px 0px 0px 0px; -webkit-border-radius: 0px 0px 0px 0px;"
                                                                        ></div>
                                                                        <div class="gdlr-core-testimonial-author-image gdlr-core-media-image">
                                                                            <img
                                                                                src="upload/customer02-150x150.jpg"
                                                                                alt=""
                                                                                width="150"
                                                                                height="150"
                                                                                title="customer02"
                                                                            />
                                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon">&#8220;</div>
                                                                        </div>
                                                                        <div class="gdlr-core-testimonial-content-wrap">
                                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 18px; color: #656565; padding-bottom: 25px;">
                                                                                <p>
                                                                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel
                                                                                    the charm of existence.
                                                                                </p>
                                                                            </div>
                                                                            <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                                <div class="gdlr-core-testimonial-author-content">
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"
                                                                                        style="color: #313131; font-size: 19px; font-weight: 600; font-style: normal; letter-spacing: 0px; text-transform: none;"
                                                                                    >
                                                                                        Ralph Clark
                                                                                    </div>
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption"
                                                                                        style="color: #313131; font-size: 14px; font-style: normal; font-weight: 500;"
                                                                                    >
                                                                                        Solo Traveler
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="gdlr-core-testimonial clearfix gdlr-core-with-frame">
                                                                    <div
                                                                        class="gdlr-core-testimonial-frame clearfix gdlr-core-skin-e-background gdlr-core-outer-frame-element"
                                                                        style="
                                                                            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -moz-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            border-radius: 0px 0px 0px 0px;
                                                                            -moz-border-radius: 0px 0px 0px 0px;
                                                                            -webkit-border-radius: 0px 0px 0px 0px;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="gdlr-core-testimonial-frame-border"
                                                                            style="border-radius: 0px 0px 0px 0px; -moz-border-radius: 0px 0px 0px 0px; -webkit-border-radius: 0px 0px 0px 0px;"
                                                                        ></div>
                                                                        <div class="gdlr-core-testimonial-author-image gdlr-core-media-image">
                                                                            <img
                                                                                src="upload/customer1-150x150.jpg"
                                                                                alt=""
                                                                                width="150"
                                                                                height="150"
                                                                                title="customer1"
                                                                            />
                                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon">&#8220;</div>
                                                                        </div>
                                                                        <div class="gdlr-core-testimonial-content-wrap">
                                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 18px; color: #656565; padding-bottom: 25px;">
                                                                                <p>
                                                                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel
                                                                                    the charm of existence.
                                                                                </p>
                                                                            </div>
                                                                            <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                                <div class="gdlr-core-testimonial-author-content">
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"
                                                                                        style="color: #313131; font-size: 19px; font-weight: 600; font-style: normal; letter-spacing: 0px; text-transform: none;"
                                                                                    >
                                                                                        Christopher Lopez
                                                                                    </div>
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption"
                                                                                        style="color: #313131; font-size: 14px; font-style: normal; font-weight: 500;"
                                                                                    >
                                                                                        Solo Traveler
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="gdlr-core-testimonial clearfix gdlr-core-with-frame">
                                                                    <div
                                                                        class="gdlr-core-testimonial-frame clearfix gdlr-core-skin-e-background gdlr-core-outer-frame-element"
                                                                        style="
                                                                            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -moz-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            border-radius: 0px 0px 0px 0px;
                                                                            -moz-border-radius: 0px 0px 0px 0px;
                                                                            -webkit-border-radius: 0px 0px 0px 0px;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="gdlr-core-testimonial-frame-border"
                                                                            style="border-radius: 0px 0px 0px 0px; -moz-border-radius: 0px 0px 0px 0px; -webkit-border-radius: 0px 0px 0px 0px;"
                                                                        ></div>
                                                                        <div class="gdlr-core-testimonial-author-image gdlr-core-media-image">
                                                                            <img
                                                                                src="upload/customer03-150x150.jpg"
                                                                                alt=""
                                                                                width="150"
                                                                                height="150"
                                                                                title="customer03"
                                                                            />
                                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon">&#8220;</div>
                                                                        </div>
                                                                        <div class="gdlr-core-testimonial-content-wrap">
                                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 18px; color: #656565; padding-bottom: 25px;">
                                                                                <p>
                                                                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel
                                                                                    the charm of existence.
                                                                                </p>
                                                                            </div>
                                                                            <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                                <div class="gdlr-core-testimonial-author-content">
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"
                                                                                        style="color: #313131; font-size: 19px; font-weight: 600; font-style: normal; letter-spacing: 0px; text-transform: none;"
                                                                                    >
                                                                                        Louis Lewis
                                                                                    </div>
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption"
                                                                                        style="color: #313131; font-size: 14px; font-style: normal; font-weight: 500;"
                                                                                    >
                                                                                        Solo Traveler
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="margin: 0px 0px 0px 0px; padding: 130px 0px 90px 0px;">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #0a0a0a;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="opacity: 0.6; background-image: url(upload/shutterstock_783346942.jpg); background-size: cover; background-position: center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" style="max-width: 740px;">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 50px;">
                                        <div class="gdlr-core-title-item-title-wrap">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 60px; font-weight: 400; letter-spacing: 0px; text-transform: none; color: #ffffff;">
                                                Choose from a wide range of <span style="font-weight: 700;">luxury rooms</span><span style="font-size: 63px; font-weight: 600; color: #193573;">.</span>
                                                <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                        <a class="gdlr-core-button gdlr-core-button-solid gdlr-core-center-align gdlr-core-button-no-border" href="/hotale/hotel1/room-search/?room_amount=1&#038;room-search=" id="gdlr-core-button-id-5">
                                            <span class="gdlr-core-content">Book Now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 110px 0px 30px 0px;">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-background-wrap" style="top: 10px;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/hotel-blog-bg.png); background-repeat: no-repeat; background-position: top center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-13">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 30px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" style="max-width: 660px;">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 50px; font-weight: 400; letter-spacing: 0px; text-transform: none; color: #1a1b22;">
                                                            Our Blog<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" style="padding-bottom: 17px;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 20px; text-transform: none; color: #94959b;">
                                                        <p>All our hotels are fabulous, they are destinations unto themselves. We have crossed the globe to bring you only the best.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                                                    <div class="gdlr-core-divider-container" style="max-width: 43px;">
                                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #193573; border-width: 2px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-14">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 35px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div
                                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                                style="
                                                    background-image: url(upload/hotel-blog-bg-2-1.png);
                                                    background-repeat: no-repeat;
                                                    background-position: top center;
                                                "
                                                data-parallax-speed="0"
                                            ></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeIn" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div
                                                    class="gdlr-core-blog-item gdlr-core-item-pdb clearfix gdlr-core-style-blog-column-with-frame gdlr-core-center-align gdlr-core-item-pdlr"
                                                    style="padding-bottom: 55px;"
                                                    id="gdlr-core-blog-1"
                                                >
                                                    <div class="gdlr-core-flexslider flexslider gdlr-core-js-2" data-type="carousel" data-column="3" data-move="1" data-nav="navigation-outer" data-nav-parent="self" data-vcenter-nav="1">
                                                        <div class="gdlr-core-flexslider-custom-nav gdlr-core-style-navigation-outer gdlr-core-center-align" style="margin-top: 0px;">
                                                            <i class="icon-arrow-left flex-prev" style="color: #a3a3a3; padding: 0px 0px 0px 0px; font-size: 34px; left: -60px;"></i>
                                                            <i class="icon-arrow-right flex-next" style="color: #a3a3a3; padding: 0px 0px 0px 0px; font-size: 34px; right: -60px;"></i>
                                                        </div>
                                                        <ul class="slides">
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-js gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-move-up-with-shadow gdlr-core-outer-frame-element"
                                                                    style="
                                                                        box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -moz-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -webkit-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        border-width: 0px;
                                                                        border-radius: 0px;
                                                                        -moz-border-radius: 0px;
                                                                        -webkit-border-radius: 0px;
                                                                    "
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="single-blog.html">
                                                                            <img
                                                                                src="upload/kelsey-roenau-608583-unsplash-700x450.jpg"
                                                                                alt=""
                                                                                width="700"
                                                                                height="450"
                                                                                title="kelsey-roenau-608583-unsplash"
                                                                            />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame" style="padding-bottom: 30px;">
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px; font-style: normal; font-weight: 500;">
                                                                            <a href="single-blog.html">Cities To Visit For Your First Time In Europe</a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            Far far away, behind the word mountains, far from the countries Vokalia...
                                                                            <div class="clear"></div>
                                                                            <a
                                                                                class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle"
                                                                                href="single-blog.html"
                                                                            >
                                                                                Read More
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-js gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-move-up-with-shadow gdlr-core-outer-frame-element"
                                                                    style="
                                                                        box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -moz-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -webkit-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        border-width: 0px;
                                                                        border-radius: 0px;
                                                                        -moz-border-radius: 0px;
                                                                        -webkit-border-radius: 0px;
                                                                    "
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="single-blog.html">
                                                                            <img
                                                                                src="upload/aaron-huber-401200-unsplash-700x450.jpg"
                                                                                alt=""
                                                                                width="700"
                                                                                height="450"
                                                                                title="aaron-huber-401200-unsplash"
                                                                            />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame" style="padding-bottom: 30px;">
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px; font-style: normal; font-weight: 500;">
                                                                            <a href="single-blog.html">
                                                                                Where to travel in 2022: 10 places you need to go in 2022!
                                                                            </a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            Far far away, behind the word mountains, far from the countries Vokalia...
                                                                            <div class="clear"></div>
                                                                            <a
                                                                                class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle"
                                                                                href="single-blog.html"
                                                                            >
                                                                                Read More
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-js gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-move-up-with-shadow gdlr-core-outer-frame-element"
                                                                    style="
                                                                        box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -moz-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -webkit-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        border-width: 0px;
                                                                        border-radius: 0px;
                                                                        -moz-border-radius: 0px;
                                                                        -webkit-border-radius: 0px;
                                                                    "
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="single-blog.html">
                                                                            <img
                                                                                src="upload/roan-lavery-sEcYfPfKOhw-unsplash-700x450.jpg"
                                                                                alt=""
                                                                                width="700"
                                                                                height="450"
                                                                                title="roan-lavery-sEcYfPfKOhw-unsplash"
                                                                            />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame" style="padding-bottom: 30px;">
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px; font-style: normal; font-weight: 500;">
                                                                            <a href="single-blog.html">Tips For Picking Vacation Accommodation</a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            Far far away, behind the word mountains, far from the countries Vokalia...
                                                                            <div class="clear"></div>
                                                                            <a
                                                                                class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle"
                                                                                href="single-blog.html"
                                                                            >
                                                                                Read More
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-js gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-move-up-with-shadow gdlr-core-outer-frame-element"
                                                                    style="
                                                                        box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -moz-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -webkit-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        border-width: 0px;
                                                                        border-radius: 0px;
                                                                        -moz-border-radius: 0px;
                                                                        -webkit-border-radius: 0px;
                                                                    "
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="single-blog.html">
                                                                            <img
                                                                                src="upload/pexels-photo-25284-700x450.jpg"
                                                                                alt=""
                                                                                width="700"
                                                                                height="450"
                                                                                title="pexels-photo-25284"
                                                                            />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame" style="padding-bottom: 30px;">
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px; font-style: normal; font-weight: 500;">
                                                                            <a href="single-blog.html">What to expect on an African Safari?</a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            Far far away, behind the word mountains, far from the countries Vokalia...
                                                                            <div class="clear"></div>
                                                                            <a
                                                                                class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle"
                                                                                href="single-blog.html"
                                                                            >
                                                                                Read More
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-js gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-move-up-with-shadow gdlr-core-outer-frame-element"
                                                                    style="
                                                                        box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -moz-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -webkit-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        border-width: 0px;
                                                                        border-radius: 0px;
                                                                        -moz-border-radius: 0px;
                                                                        -webkit-border-radius: 0px;
                                                                    "
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="single-blog.html">
                                                                            <img
                                                                                src="upload/shutterstock_560973166-700x450.jpg"
                                                                                alt=""
                                                                                width="700"
                                                                                height="450"
                                                                                title="Hotel Room"
                                                                            />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame" style="padding-bottom: 30px;">
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px; font-style: normal; font-weight: 500;">
                                                                            <a href="single-blog.html">My 6 Biggest Travel Surprises</a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            Far far away, behind the word mountains, far from the countries Vokalia...
                                                                            <div class="clear"></div>
                                                                            <a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="single-blog.html">
                                                                                Read More
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-js gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-move-up-with-shadow gdlr-core-outer-frame-element"
                                                                    style="
                                                                        box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -moz-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -webkit-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        border-width: 0px;
                                                                        border-radius: 0px;
                                                                        -moz-border-radius: 0px;
                                                                        -webkit-border-radius: 0px;
                                                                    "
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="single-blog.html">
                                                                            <img
                                                                                src="upload/pascal-diekmann-707233-unsplash-700x450.jpg"
                                                                                alt=""
                                                                                width="700"
                                                                                height="450"
                                                                                title="pascal-diekmann-707233-unsplash"
                                                                            />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame" style="padding-bottom: 30px;">
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px; font-style: normal; font-weight: 500;">
                                                                            <a href="single-blog.html">10 Tips for Taking Your First Solo Trip</a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            Far far away, behind the word mountains, far from the countries Vokalia...
                                                                            <div class="clear"></div>
                                                                            <a
                                                                                class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle"
                                                                                href="single-blog.html"
                                                                            >
                                                                                Read More
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-js gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-move-up-with-shadow gdlr-core-outer-frame-element"
                                                                    style="
                                                                        box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -moz-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -webkit-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        border-width: 0px;
                                                                        border-radius: 0px;
                                                                        -moz-border-radius: 0px;
                                                                        -webkit-border-radius: 0px;
                                                                    "
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="single-blog.html">
                                                                            <img
                                                                                src="upload/pexels-photo-871053-700x450.jpeg"
                                                                                alt=""
                                                                                width="700"
                                                                                height="450"
                                                                                title="pexels-photo-871053"
                                                                            />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame" style="padding-bottom: 30px;">
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px; font-style: normal; font-weight: 500;">
                                                                            <a href="single-blog.html">
                                                                                Why I Quit My Job To Be A Less Occasional Traveller In 2019
                                                                            </a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            Far far away, behind the word mountains, far from the countries Vokalia...
                                                                            <div class="clear"></div>
                                                                            <a
                                                                                class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle"
                                                                                href="single-blog.html"
                                                                            >
                                                                                Read More
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-js gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-move-up-with-shadow gdlr-core-outer-frame-element"
                                                                    style="
                                                                        box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -moz-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -webkit-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        border-width: 0px;
                                                                        border-radius: 0px;
                                                                        -moz-border-radius: 0px;
                                                                        -webkit-border-radius: 0px;
                                                                    "
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="single-blog.html">
                                                                            <img
                                                                                src="upload/shutterstock_307470824-700x450.jpg"
                                                                                alt=""
                                                                                width="700"
                                                                                height="450"
                                                                                title="The breakfast"
                                                                            />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame" style="padding-bottom: 30px;">
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px; font-style: normal; font-weight: 500;">
                                                                            <a href="single-blog.html">Where To Travel In Asia From January To June</a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            Far far away, behind the word mountains, far from the countries Vokalia...
                                                                            <div class="clear"></div>
                                                                            <a
                                                                                class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle"
                                                                                href="single-blog.html"
                                                                            >
                                                                                Read More
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-js gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-move-up-with-shadow gdlr-core-outer-frame-element"
                                                                    style="
                                                                        box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -moz-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        -webkit-box-shadow: 0px 15px 40px rgba(10, 10, 10, 0.08);
                                                                        border-width: 0px;
                                                                        border-radius: 0px;
                                                                        -moz-border-radius: 0px;
                                                                        -webkit-border-radius: 0px;
                                                                    "
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="single-blog.html">
                                                                            <img
                                                                                src="upload/shop-slo-vhztm9QC0L0-unsplash-700x450.jpg"
                                                                                alt=""
                                                                                width="700"
                                                                                height="450"
                                                                                title="shop-slo-vhztm9QC0L0-unsplash"
                                                                            />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame" style="padding-bottom: 30px;">
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px; font-style: normal; font-weight: 500;">
                                                                            <a href="single-blog.html">3 steps to discovering your life’s purpose</a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            Far far away, behind the word mountains, far from the countries Vokalia...
                                                                            <div class="clear"></div>
                                                                            <a
                                                                                class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle"
                                                                                href="single-blog.html"
                                                                            >
                                                                                Read More
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                    <a
                                                        class="gdlr-core-button gdlr-core-button-transparent gdlr-core-center-align gdlr-core-button-with-border"
                                                        href="#"
                                                        style="
                                                            font-size: 13px;
                                                            font-style: normal;
                                                            font-weight: 600;
                                                            letter-spacing: 4px;
                                                            color: #000000;
                                                            padding: 15px 0px 10px 0px;
                                                            text-transform: uppercase;
                                                            border-radius: 0px;
                                                            -moz-border-radius: 0px;
                                                            -webkit-border-radius: 0px;
                                                            border-width: 0px 0px 1px 0px;
                                                            border-color: #dadada;
                                                        "
                                                    >
                                                        <span class="gdlr-core-content">Read The Blog<i class="gdlr-core-pos-right icon-arrow-right" style="font-size: 16px; color: #000000;"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 60px 0px 10px 0px;">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-15">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 10px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 40px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 50px; font-weight: 400; text-transform: none; color: #000000;">
                                                            Newsletter<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                    <span
                                                        class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption"
                                                        style="font-size: 18px; font-style: normal; letter-spacing: 0px; color: #898989; margin-top: 20px;"
                                                    >
                                                        Subscribe the newsletter to get updated to news and promotions
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-newsletter-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-style-curve3">
                                                    <div class="newsletter newsletter-subscription">
                                                        <form class="gdlr-core-newsletter-form clearfix" method="post" action="#" onsubmit="return newsletter_check(this)">
                                                            <div class="gdlr-core-newsletter-email">
                                                                <input class="newsletter-email gdlr-core-skin-e-background gdlr-core-skin-e-content" placeholder="Your Email Address" type="email" name="ne" size="30" required />
                                                            </div>
                                                            <div class="gdlr-core-newsletter-submit"><input class="newsletter-submit" type="submit" value="Subscribe" /></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="margin: 0px -10px 0px -10px; padding: 60px 0px 0px 0px;">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix gdlr-core-gallery-item-style-grid" style="padding-bottom: 0px;">
                                        <div class="gdlr-core-gallery-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                            <div
                                                class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-15 gdlr-core-column-first gdlr-core-item-pdlr gdlr-core-item-mgb"
                                                style="margin-bottom: 30px; padding-left: 15px; padding-right: 15px;"
                                            >
                                                <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                    <a
                                                        class="gdlr-core-lightgallery gdlr-core-js"
                                                        href="upload/shutterstock_139392596.jpg"
                                                        data-lightbox-group="gdlr-core-img-group-2"
                                                    >
                                                        <img src="upload/shutterstock_139392596-600x600.jpg" alt="" width="600" height="600" title="Room Service" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-15 gdlr-core-item-pdlr gdlr-core-item-mgb" style="margin-bottom: 30px; padding-left: 15px; padding-right: 15px;">
                                                <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                    <a
                                                        class="gdlr-core-lightgallery gdlr-core-js"
                                                        href="upload/andrii-podilnyk-766487-unsplash-scaled.jpg"
                                                        data-lightbox-group="gdlr-core-img-group-2"
                                                    >
                                                        <img
                                                            src="upload/andrii-podilnyk-766487-unsplash-600x600.jpg"
                                                            alt=""
                                                            width="600"
                                                            height="600"
                                                            title="andrii-podilnyk-766487-unsplash"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-15 gdlr-core-item-pdlr gdlr-core-item-mgb" style="margin-bottom: 30px; padding-left: 15px; padding-right: 15px;">
                                                <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                    <a
                                                        class="gdlr-core-lightgallery gdlr-core-js"
                                                        href="upload/alexandre-chambon-115386-unsplash.jpg"
                                                        data-lightbox-group="gdlr-core-img-group-2"
                                                    >
                                                        <img
                                                            src="upload/alexandre-chambon-115386-unsplash-600x600.jpg"
                                                            alt=""
                                                            width="600"
                                                            height="600"
                                                            title="The Ocean"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-15 gdlr-core-item-pdlr gdlr-core-item-mgb" style="margin-bottom: 30px; padding-left: 15px; padding-right: 15px;">
                                                <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                    <a
                                                        class="gdlr-core-lightgallery gdlr-core-js"
                                                        href="upload/shutterstock_513839743.jpg"
                                                        data-lightbox-group="gdlr-core-img-group-2"
                                                    >
                                                        <img
                                                            src="upload/shutterstock_513839743-600x600.jpg"
                                                            alt=""
                                                            width="600"
                                                            height="600"
                                                            title="shutterstock_513839743"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <div class="hotale-footer-wrapper">
                    <div class="hotale-footer-container hotale-container clearfix">
                        <div class="hotale-footer-column hotale-item-pdlr hotale-column-15">
                            <div id="block-21" class="widget widget_block widget_media_image hotale-widget">
                                <figure class="wp-block-image">
                                    <img loading="lazy" width="110" height="27" src="upload/logo-resort.png" alt="" class="wp-image-14995" />
                                </figure>
                            </div>
                            <div id="block-7" class="widget widget_block widget_text hotale-widget">
                                <p></p>
                            </div>
                            <div id="block-8" class="widget widget_block hotale-widget">
                                <p>
                                    <span class="gdlr-core-space-shortcode" style="margin-top: -10px;"></span><i class="fa fa-facebook" style="font-size: 16px; color: #ffffff; margin-left: 3px; margin-right: 17px;"></i>
                                    <i class="fa5b fa-twitter" style="font-size: 16px; color: #ffffff; margin-left: 3px; margin-right: 17px;"></i>
                                    <i class="fa5b fa-pinterest-p" style="font-size: 16px; color: #ffffff; margin-left: 3px; margin-right: 17px;"></i>
                                    <i class="fa5b fa5-tiktok" style="font-size: 16px; color: #ffffff; margin-left: 3px; margin-right: 17px;"></i>
                                </p>
                            </div>
                            <div id="block-23" class="widget widget_block hotale-widget">
                                <div class="tourmaster-currency-switcher-shortcode clearfix">
                                    <div class="tourmaster-currency-switcher" style="background: #e5e5e5;">
                                        <span class="tourmaster-head" style="color: #333333;"><span>USD</span><i class="fa fa-sort-down"></i></span>
                                        <div class="tourmaster-currency-switcher-inner">
                                            <div class="tourmaster-currency-switcher-content">
                                                <ul>
                                                    <li><a href="#">EUR</a></li>
                                                    <li><a href="#">CHF</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hotale-footer-column hotale-item-pdlr hotale-column-15">
                            <div id="block-10" class="widget widget_block hotale-widget">
                                <h4>Contact</h4>
                            </div>
                            <div id="block-14" class="widget widget_block hotale-widget">
                                <p><span style="color: #ffffff;">T</span>: 1-634-567-34</p>
                                <p><span class="gdlr-core-space-shortcode" style="margin-top: -10px;"></span></p>
                                <p><span style="color: #ffffff;">E</span>: <a href="#">test@gmail.com</a></p>
                                <p><span class="gdlr-core-space-shortcode" style="margin-top: -10px;"></span></p>
                                <p><span style="color: #ffffff;">F</span>: 1-634-567-35</p>
                            </div>
                        </div>
                        <div class="hotale-footer-column hotale-item-pdlr hotale-column-15">
                            <div id="block-12" class="widget widget_block hotale-widget">
                                <h4>Hotel Address</h4>
                            </div>
                            <div id="block-15" class="widget widget_block hotale-widget">
                                <p>
                                    <span style="color: #ffffff;">
                                        Hotale Av.<br />
                                        del Ejercito, 2, 1900<br />
                                        Madrid, Spain
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="hotale-footer-column hotale-item-pdlr hotale-column-15">
                            <div id="block-18" class="widget widget_block widget_media_image hotale-widget">
                                <div class="wp-block-image">
                                    <figure class="aligncenter size-full">
                                        <img loading="lazy" width="213" height="90" src="upload/footer-banner.png" alt="" class="wp-image-15004" />
                                    </figure>
                                </div>
                            </div>
                            <div id="block-20" class="widget widget_block widget_media_image hotale-widget">
                                <div class="wp-block-image">
                                    <figure class="aligncenter is-resized">
                                        <img
                                            loading="lazy"
                                            src="upload/footer-cards.png"
                                            alt=""
                                            class="wp-image-15005"
                                            width="154"
                                            height="26"
                                        />
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hotale-copyright-wrapper">
                    <div class="hotale-copyright-container hotale-container clearfix">
                        <div class="hotale-copyright-left hotale-item-pdlr">
                            <div style="text-transform: uppercase; font-weight: 500; font-size: 13px; letter-spacing: 3px;">
                                <a href="#url" style="margin-right: 22px;">Home</a><a href="#url" style="margin-right: 22px;">About</a><a href="#url" style="margin-right: 22px;">Privacy Policy</a>
                                <a href="#url" style="margin-right: 22px;">Contact</a>
                            </div>
                        </div>
                        <div class="hotale-copyright-right hotale-item-pdlr">Copyright © GoodLayers. All Rights Reserved.</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>


   

</x-layouts.master>
