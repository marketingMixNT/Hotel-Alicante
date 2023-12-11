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
                                <div class="items-links "
                                   >
                                    <button
                                        class="item-link gdlr-core-button gdlr-core-button-solid gdlr-core-center-align gdlr-core-button-no-border btn--primary"
                                        data-name="a3a">a3a</button>
                                    <button
                                        class="item-link gdlr-core-button gdlr-core-button-solid gdlr-core-center-align gdlr-core-button-no-border btn--primary"
                                        data-name="d2b">d2b</button>
                                    <button
                                        class="item-link gdlr-core-button gdlr-core-button-solid gdlr-core-center-align gdlr-core-button-no-border btn--primary"
                                        data-name="rennes3">rennes 3</button>
                                    <button
                                        class="item-link gdlr-core-button gdlr-core-button-solid gdlr-core-center-align gdlr-core-button-no-border btn--primary"
                                        data-name="rennes6">rennes 6</button>
                                    <button
                                        class="item-link gdlr-core-button gdlr-core-button-solid gdlr-core-center-align gdlr-core-button-no-border btn--primary"
                                        data-name="isleta">isleta marina</button>
                                    <button
                                        class="item-link gdlr-core-button gdlr-core-button-solid gdlr-core-center-align gdlr-core-button-no-border btn--primary"
                                        data-name="other">other</button>
                                </div>

                                {{-- IMAGES --}}
                                <div class="gallery" style="position:relative">
                                    

                                    {{-- ARENAL A3A --}}
                                    @foreach (File::files(public_path('assets/images/arenal-a3a')) as $image)
                                        <x-gallery-item
                                            src="{{ asset('/assets/images/arenal-a3a/' . $image->getFilename()) }}"
                                            alt="Javea Hotel Photo" data-name="a3a" />
                                    @endforeach

                                    {{-- ARENAL D2B --}}
                                    @foreach (File::files(public_path('assets/images/arenal-d2b')) as $image)
                                        <x-gallery-item
                                            src="{{ asset('/assets/images/arenal-d2b/' . $image->getFilename()) }}"
                                            alt="Javea Hotel Photo" data-name="d2b" />
                                    @endforeach

                                    {{-- RENNES 3 --}}
                                    @foreach (File::files(public_path('assets/images/rennes-3')) as $image)
                                        <x-gallery-item
                                            src="{{ asset('/assets/images/rennes-3/' . $image->getFilename()) }}"
                                            alt="Javea Hotel Photo" data-name="rennes3" />
                                    @endforeach
                                    {{-- RENNES 6 --}}
                                    @foreach (File::files(public_path('assets/images/rennes-6')) as $image)
                                        <x-gallery-item
                                            src="{{ asset('/assets/images/rennes-6/' . $image->getFilename()) }}"
                                            alt="Javea Hotel Photo" data-name="rennes6" />
                                    @endforeach
                                    {{-- ISLETA--}}
                                    @foreach (File::files(public_path('assets/images/arenal-dream')) as $image)
                                        <x-gallery-item
                                            src="{{ asset('/assets/images/arenal-dream/' . $image->getFilename()) }}"
                                            alt="Javea Hotel Photo" data-name="isleta" />
                                    @endforeach
                                    {{-- OTHER --}}
                                    @foreach (File::files(public_path('assets/images/arenal-dream')) as $image)
                                        <x-gallery-item
                                            src="{{ asset('/assets/images/arenal-dream/' . $image->getFilename()) }}"
                                            alt="Javea Hotel Photo" data-name="other" />
                                    @endforeach

                            
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


</x-layouts.master>
