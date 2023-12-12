<x-layouts.master>
    {{-- @section('title', '')
    @section('description', '') --}}

    <x-breadcrumbs title="Long Term Rental" bgi="{{ asset('assets/images/hotel_1.webp') }}" />


    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-sidebar-wrapper gdlr-core-sticky-sidebar gdlr-core-js" id="gdlr-core-sidebar-wrapper-1">
            <div
                class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                <div class="gdlr-core-pbf-sidebar-content gdlr-core-column-45 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left"
                    style="width:100%">
                    <div class="gdlr-core-pbf-sidebar-content-inner">
                        <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                    <div class="gdlr-core-pbf-element">

                                        <x-apartment.thumbnail
                                            img="{{ asset('assets/images/arenal-dream/arenal-dream_5.webp') }}" />

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first"
                            id="gdlr-core-column-1">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js"
                                style="margin: 0px 0px 0px 0px; padding: 10px 0px 20px 0px;">
                                <div class="gdlr-core-pbf-background-wrap"></div>
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="tourmaster-room-title-item tourmaster-item-mglr tourmaster-item-pdb clearfix"
                                            style="padding-bottom: 35px;">
                                            <h3 class="tourmaster-room-title-item-title" style="text-align:center">
                                                Overwiew</h3>
                                            
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div
                                            class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                                            <div class="tourmaster-room-title-item-caption"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- FEATURES --}}
                        {{-- {{ $features }} --}}


                        <div class="gdlr-core-pbf-column gdlr-core-column-20">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js"></div>
                            </div>
                        </div>


                        <div class="gdlr-core-pbf-column gdlr-core-column-20">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js"></div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first"
                            id="gdlr-core-column-6">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js"
                                style="padding: 10px 0px 0px 0px;">
                                <div class="gdlr-core-pbf-background-wrap"></div>
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                    <div class="gdlr-core-pbf-element">
                                        <div
                                            class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                            <div class="gdlr-core-text-box-item-content"
                                                style="font-size: 18px; text-transform: none;">

                                                {{-- DESCRIPTION --}}
                                                {{-- {{ $description }} --}}
                                                <x-apartment.descriptionHeadingCard>
                                                    Discover the charm of Javea throughout the year with our long-term rental options. Perfectly suited for those wishing to extend their stay between the peak seasons, our long-term rentals offer the comfort of home in the idyllic setting of Spain's Costa Blanca.
                                                </x-apartment.descriptionHeadingCard>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first"
                            id="gdlr-core-column-7">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js"
                                style="margin: 0px 0px 0px 0px; padding: 0px 0px 25px 0px;">
                                <div class="gdlr-core-pbf-background-wrap"></div>
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                    <div class="gdlr-core-pbf-element">
                                        <div
                                            class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <x-UI.divider/>
                        <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                                            style="padding-bottom: 40px;">
                                            <div class="gdlr-core-title-item-title-wrap">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test"
                                                    style="font-size: 25px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                    Benefits of Long-Term Renting:<span
                                                        class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <x-apartment.descriptionCard title="Cost Savings">Enjoy reduced rates compared to short-term holiday rentals, allowing for a more economical stay without compromising on the quality of living.</x-apartment.descriptionCard>
                        <x-apartment.descriptionCard title="Cultural Immersion">Living in Javea for an extended period offers a unique opportunity to truly immerse yourself in Spanish culture and the local community.</x-apartment.descriptionCard>
                        <x-apartment.descriptionCard title="Remote Work Haven">With high-speed internet and serene settings, our apartments are ideal for remote workers and digital nomads looking for a change of scenery or a productivity boost.</x-apartment.descriptionCard>
                        <x-apartment.descriptionCard title="Mild Winters">Escape the cold and spend your winter in the mild and pleasant climate of Javea, where sunny days are abundant.</x-apartment.descriptionCard>
                        <x-apartment.descriptionCard title="Education Opportunities">For families, Javea is home to reputable international schools such as Xàbia International College and Lady Elizabeth School, offering quality British education while enjoying the Mediterranean lifestyle.</x-apartment.descriptionCard>

                        <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" style="margin-top:3em">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                                            style="padding-bottom: 40px;">
                                            <div class="gdlr-core-title-item-title-wrap">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test"
                                                    style="font-size: 25px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                    Long-Term Rental Opportunities<span
                                                        class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p style="margin-bottom:2em">Our long-term rentals include a range of properties that cater to different needs, from cozy flats for solo adventurers or couples to larger apartments that fit for families. Each property comes fully furnished with all the amenities required for comfortable living.</p>

                        <x-apartment.descriptionCard title="Remote Work-Friendly Spaces">Properties equipped with dedicated workspaces ensure productivity is maintained.</x-apartment.descriptionCard>
                        <x-apartment.descriptionCard title="Family-Friendly Environments">Choose from rentals near bus stop to the top international schools, making it seamless to balance family life with the pursuit of education.</x-apartment.descriptionCard>

                        <p>Whether you're looking to relocate for work, seeking a seasonal home away from home, or wanting to give your children an international educational experience, Javea's long-term rentals offer a solution tailored to your aspirations. Explore our listings and find the perfect setting for your extended stay in this beautiful part of Spain.</p>
                       
                    </div>
                </div>

                

            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper" id="gdlr-core-wrapper-2">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full">
                    <div class="gdlr-core-pbf-element">
                        <div
                            class="gdlr-core-gallery-item gdlr-core-item-pdbf clearfix gdlr-core-gallery-item-style-scroll gdlr-core-item-pdlr">
                            <div class="gdlr-core-sly-slider gdlr-core-js-2">
                                <ul class="slides">

                                    <x-apartment.galleryItem src="{{asset('assets/images/arenal-dream/arenal-dream_1.webp')}}"/>
                                    <x-apartment.galleryItem src="{{asset('assets/images/arenal-dream/arenal-dream_2.webp')}}"/>
                                    <x-apartment.galleryItem src="{{asset('assets/images/arenal-dream/arenal-dream_3.webp')}}"/>
                                    <x-apartment.galleryItem src="{{asset('assets/images/arenal-dream/arenal-dream_4.webp')}}"/>
                                    <x-apartment.galleryItem src="{{asset('assets/images/arenal-dream/arenal-dream_5.webp')}}"/>
                                    

                                </ul>
                            </div>
                            <div class="gdlr-core-sly-scroll">
                                <div class="gdlr-core-sly-scroll-handle"></div>
                            </div>
                            <div style="display:flex;justify-content: center; margin:4em 0">
                                <a class="gdlr-core-button gdlr-core-button-solid gdlr-core-left-align gdlr-core-button-no-border btn--primary"
                                    href="#" id="gdlr-core-button-id-4">
                                    <span class="gdlr-core-content">Check More Photos</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
       
    </div>



</x-layouts.master>
