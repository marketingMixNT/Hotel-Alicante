<div {{ $attributes(['class' =>'info-card'])}}>
    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id="gdlr-core-column-2" style="display:flex;justify-content: center;align-items: center">
    
        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                    style="background-size: cover; background-position: center;" data-parallax-speed="0"></div>
            </div>
            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-item-pdlr"
                        style="padding-bottom: 0px;">
                        <div class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-round"
                            style="border-width: 0px;">
                            <img src="{{ $img }}" alt="" width="1300" height="716" title="chef-cook"
                                style="max-height:500px;object-fit:cover" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-3">
        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 15px 50px 64px 55px;">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                        style="padding-bottom: 35px;">
                        <div class="gdlr-core-title-item-title-wrap">
                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test"
                                style="font-size: 30px; font-weight: 500; line-height: 1.6; text-transform: none; color: #000000;">
                                {{ $title }}<span
                                    class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"
                        style="padding-bottom: 20px;">
                        <div class="gdlr-core-text-box-item-content"
                            style="font-size: 18px; font-weight: 400; text-transform: none; color: black;">
                            <div>{{ $slot }}</div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    
    </div>