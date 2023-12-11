<x-layouts.master>

    <x-breadcrumbs title="Other Photos" bgi="{{ asset('assets/images/arenal-dream/arenal-dream_5.webp') }}" />

    <div class="hotale-page-wrapper" id="hotale-page-wrapper">
        <div class="gdlr-core-page-builder-body">
            <div class="gdlr-core-pbf-wrapper" style="padding: 100px 20px 30px 20px;">
                <div class="gdlr-core-pbf-background-wrap"></div>
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full">

                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix gdlr-core-gallery-item-style-grid">


                                {{-- @foreach (File::files(public_path('assets/images/arenal-dream')) as $image)
                                    <x-gallery-item src="{{ asset('/assets/images/arenal-dream/' . $image->getFilename()) }}"
                                        alt="Javea Hotel Photo" />
                                @endforeach --}}

                                <div class="items-links ">
                                    <button class="item-link" data-name="arenal-dream">arenal-dream</button>
                                    <button class="item-link" data-name="a3a">a3a</button>
                                    <button class="item-link" data-name="d2b">d2b</button>
                                </div>



                                <div class="info">
                                    <div data-name="arenal-dream">
                                        <h3>arenal dream</h3>
                                    </div>
                                    <div data-name="a3a">
                                        <h3>a3a</h3>
                                    </div>
                                    <div data-name="d2b">
                                        <h3>d2b</h3>
                                    </div>
                                </div>



                                <div class="gallery">
                                    
                                        <img class="project-img" src="{{ asset('/assets/images/arenal-dream/arenal-dream_1.webp')}}" alt="" data-name="arenal-dream">

                                        <img class="project-img" src="{{ asset('/assets/images/arenal-a3a/arenal-a3a_1.webp')}}" alt="" data-name="a3a">


                                        <img class="project-img" src="{{ asset('/assets/images/arenal-d2b/arenal-d2b_1.webp')}}" alt="" data-name="d2b">
                                        <img class="project-img" src="{{ asset('/assets/images/arenal-d2b/arenal-d2b_2.webp')}}" alt="" data-name="d2b">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


</x-layouts.master>
