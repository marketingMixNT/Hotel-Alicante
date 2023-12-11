<x-layouts.master>

    <x-breadcrumbs title="Gallery" bgi="{{ asset('assets/images/arenal-dream/arenal-dream_5.webp') }}" />

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

                                {{-- NAVIGATION --}}
                                <div class="items-links " style="display: flex;justify-content: center;align-items: center;gap:1em;margin-bottom:4em">
                                    <button class="item-link gdlr-core-button gdlr-core-button-solid gdlr-core-center-align gdlr-core-button-no-border btn--primary" data-name="a3a">a3a</button>
                                    <button class="item-link gdlr-core-button gdlr-core-button-solid gdlr-core-center-align gdlr-core-button-no-border btn--primary" data-name="d2b">d2b</button>
                                    <button class="item-link gdlr-core-button gdlr-core-button-solid gdlr-core-center-align gdlr-core-button-no-border btn--primary" data-name="rennes-3">rennes 3</button>
                                    <button class="item-link gdlr-core-button gdlr-core-button-solid gdlr-core-center-align gdlr-core-button-no-border btn--primary" data-name="rennes-6">rennes 6</button>
                                    <button class="item-link gdlr-core-button gdlr-core-button-solid gdlr-core-center-align gdlr-core-button-no-border btn--primary" data-name="isleta">isleta marina</button>
                                    <button class="item-link gdlr-core-button gdlr-core-button-solid gdlr-core-center-align gdlr-core-button-no-border btn--primary" data-name="other">other</button>




                                </div>



                                {{-- <div class="info">
                                    <div data-name="arenal-dream">
                                        <h3>arenal dream</h3>
                                    </div>
                                    <div data-name="a3a">
                                        <h3>a3a</h3>
                                    </div>
                                    <div data-name="d2b">
                                        <h3>d2b</h3>
                                    </div>
                                </div> --}}


                                {{-- IMAGES --}}
                                <div class="gallery">

                                    {{-- ARENAL A3A --}}
                                    <x-gallery-item src="{{ asset('/assets/images/arenal-a3a/arenal-a3a_1.webp') }}"
                                        alt="Javea Hotel Photo" data-name="a3a" />
                                    <x-gallery-item src="{{ asset('/assets/images/arenal-a3a/arenal-a3a_2.webp') }}"
                                        alt="Javea Hotel Photo" data-name="a3a" />
                                    <x-gallery-item src="{{ asset('/assets/images/arenal-a3a/arenal-a3a_3.webp') }}"
                                        alt="Javea Hotel Photo" data-name="a3a" />
                                    <x-gallery-item src="{{ asset('/assets/images/arenal-a3a/arenal-a3a_4.webp') }}"
                                        alt="Javea Hotel Photo" data-name="a3a" />
                                    {{-- ARENAL D2B --}}
                                    <x-gallery-item src="{{ asset('/assets/images/arenal-d2b/arenal-d2b_1.webp') }}"
                                        alt="Javea Hotel Photo" data-name="d2b" />
                                    <x-gallery-item src="{{ asset('/assets/images/arenal-d2b/arenal-d2b_2.webp') }}"
                                        alt="Javea Hotel Photo" data-name="d2b" />
                                    <x-gallery-item src="{{ asset('/assets/images/arenal-d2b/arenal-d2b_3.webp') }}"
                                        alt="Javea Hotel Photo" data-name="d2b" />
                                    <x-gallery-item src="{{ asset('/assets/images/arenal-d2b/arenal-d2b_4.webp') }}"
                                        alt="Javea Hotel Photo" data-name="d2b" />
                                    {{-- RENNES AREAL 3 --}}
                                    <x-gallery-item src="{{ asset('/assets/images/rennes-3/rennes_1.webp') }}"
                                        alt="Javea Hotel Photo" data-name="rennes-3" />
                                    <x-gallery-item src="{{ asset('/assets/images/rennes-3/rennes_2.webp') }}"
                                        alt="Javea Hotel Photo" data-name="rennes-3" />
                                    <x-gallery-item src="{{ asset('/assets/images/rennes-3/rennes_3.webp') }}"
                                        alt="Javea Hotel Photo" data-name="rennes-3" />
                                    <x-gallery-item src="{{ asset('/assets/images/rennes-3/rennes_4.webp') }}"
                                        alt="Javea Hotel Photo" data-name="rennes-3" />
                                    {{-- RENNES AREAL 6 --}}
                                    <x-gallery-item src="{{ asset('/assets/images/rennes-6/renes_1.webp') }}"
                                        alt="Javea Hotel Photo" data-name="rennes-6" />
                                    <x-gallery-item src="{{ asset('/assets/images/rennes-6/renes_2.webp') }}"
                                        alt="Javea Hotel Photo" data-name="rennes-6" />
                                    <x-gallery-item src="{{ asset('/assets/images/rennes-6/renes_3.webp') }}"
                                        alt="Javea Hotel Photo" data-name="rennes-6" />
                                    <x-gallery-item src="{{ asset('/assets/images/rennes-6/renes_4.webp') }}"
                                        alt="Javea Hotel Photo" data-name="rennes-6" />
                                    {{-- RENNES AREAL 6 --}}
                                    <x-gallery-item
                                        src="{{ asset('/assets/images/arenal-dream/arenal-dream_1.webp') }}"
                                        alt="Javea Hotel Photo" data-name="isleta" />
                                    <x-gallery-item
                                        src="{{ asset('/assets/images/arenal-dream/arenal-dream_2.webp') }}"
                                        alt="Javea Hotel Photo" data-name="isleta" />
                                    <x-gallery-item
                                        src="{{ asset('/assets/images/arenal-dream/arenal-dream_3.webp') }}"
                                        alt="Javea Hotel Photo" data-name="isleta" />
                                    <x-gallery-item
                                        src="{{ asset('/assets/images/arenal-dream/arenal-dream_5.webp') }}"
                                        alt="Javea Hotel Photo" data-name="isleta" />
                                    {{-- RENNES AREAL 6 --}}
                                    <x-gallery-item
                                        src="{{ asset('/assets/images/arenal-dream/arenal-dream_1.webp') }}"
                                        alt="Javea Hotel Photo" data-name="other" />
                                    <x-gallery-item
                                        src="{{ asset('/assets/images/arenal-dream/arenal-dream_2.webp') }}"
                                        alt="Javea Hotel Photo" data-name="other" />
                                    <x-gallery-item
                                        src="{{ asset('/assets/images/arenal-dream/arenal-dream_3.webp') }}"
                                        alt="Javea Hotel Photo" data-name="other" />
                                    <x-gallery-item
                                        src="{{ asset('/assets/images/arenal-dream/arenal-dream_5.webp') }}"
                                        alt="Javea Hotel Photo" data-name="other" />




                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


</x-layouts.master>
