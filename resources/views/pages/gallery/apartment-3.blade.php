<x-layouts.master>
    {{-- @section('title', '')
    @section('description', '') --}}

    <x-breadcrumbs title="Rennes Areal 3 Gallery" bgi="{{asset('assets/images/rennes-3/rennes_34.webp')}}"/>
  
    <div class="hotale-page-wrapper" id="hotale-page-wrapper">
        <div class="gdlr-core-page-builder-body">
            <div class="gdlr-core-pbf-wrapper" style="padding: 100px 20px 30px 20px;">
                <div class="gdlr-core-pbf-background-wrap"></div>
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full">
    
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix gdlr-core-gallery-item-style-grid">
    
    
                                @foreach (File::files(public_path('assets/images/rennes-3')) as $image)
                                    <x-gallery-item src="{{ asset('/assets/images/rennes-3/' . $image->getFilename()) }}"
                                        alt="Rennes 3 apartment photo" />
                                @endforeach
    
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>


</x-layouts.master>