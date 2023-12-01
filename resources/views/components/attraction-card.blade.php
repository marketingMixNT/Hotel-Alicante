<div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" id="gdlr-core-column-4" >
    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 15px 0px 15px;">
        <div class="gdlr-core-pbf-background-wrap"></div>

        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInUp"
            data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8" style="display:flex;flex-direction:column;justify-content: space-around; align-items: center; min-height:400px">
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-item-pdlr">
                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-rectangle"
                        style="border-width: 0px; width: 88px; height:70px">
                        <img src="{{ $img }}" alt="" width="150" height="160"
                            title="hotel-icon-1"  style="width: 100%;height:100%"/>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                    style="padding-bottom: 20px;">
                    <div class="gdlr-core-title-item-title-wrap">
                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test"
                            style="font-size: 25px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                            {{ $title }}<span
                                class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"
                    style="padding-bottom: 22px;">
                    <div class="gdlr-core-text-box-item-content" style="text-transform: none; color: #94959b;">
                        <p>
                            {{ $slot }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" >
                    <a class="gdlr-core-button gdlr-core-button-transparent gdlr-core-center-align gdlr-core-button-with-border btn--secondary" 
                        href="{{ $href }}" id="gdlr-core-button-id-1">
                        <span class="gdlr-core-content">Read More</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
