{{-- <footer>
    <div class="hotale-footer-wrapper">
        <div class="hotale-footer-container hotale-container clearfix">
            <div class="hotale-footer-column hotale-item-pdlr hotale-column-15">
                <div id="block-21" class="widget widget_block widget_media_image hotale-widget">
                    <figure class="wp-block-image">
                        <img loading="lazy" width="110" height="27" src="{{asset('assets/logo.png')}}" alt="" class="wp-image-14995" />
                    </figure>
                </div>
                <div id="block-7" class="widget widget_block widget_text hotale-widget">
                    <p></p>
                </div>
                
               
            </div>
            <div class="hotale-footer-column hotale-item-pdlr hotale-column-15">
                <div id="block-10" class="widget widget_block hotale-widget">
                    <h4>Contact</h4>
                </div>
                <div id="block-14" class="widget widget_block hotale-widget">
                    <p > <span style="color: #ffffff;">T:</span> <span style="color: #ffffff;">1-634-567-34</span></p>
                    <p><span class="gdlr-core-space-shortcode" style="margin-top: -10px;"></span></p>
                    <p><span style="color: #ffffff;">E:</span> <a href="#">test@gmail.com</a></p>
                    <p><span class="gdlr-core-space-shortcode" style="margin-top: -10px;"></span></p>
                    
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
                            <img loading="lazy" width="213" height="90" src="{{asset('assets/icons/trip.png')}}" alt="" class="wp-image-15004" />
                        </figure>
                    </div>
                </div>
                 <div style="display:flex;justify-content:center:align-items:center"> 
                        <span class="gdlr-core-space-shortcode" style="margin-top: -10px;"></span><i class="fa fa-facebook" style="font-size: 16px; color: #ffffff; margin-left: 3px; margin-right: 17px;"></i>
                        <i class="fa5b fa-twitter" style="font-size: 16px; color: #ffffff; margin-left: 3px; margin-right: 17px;"></i>
                        <i class="fa5b fa-pinterest-p" style="font-size: 16px; color: #ffffff; margin-left: 3px; margin-right: 17px;"></i>
                        <i class="fa5b fa5-tiktok" style="font-size: 16px; color: #ffffff; margin-left: 3px; margin-right: 17px;"></i>
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
</footer> --}}


<footer class="footer">
    <div class="footer__container">
        <div class="footer__logo-section">
            <div class="footer__logo">
                <img src="{{ asset('assets/logo.png') }}" alt="">
            </div>
            <div class="footer__social">
                @include('partials.socials')
            </div>
        </div>

        <div class="footer__columns">
            <div class="footer__columns-box">
                <h6>Address:</h6>
                <span>Hotale</span>
                <span>del Ejercito, 2, 1900</span>
                <span>Madrid, Spain</span>
            </div>
            <div class="footer__columns-box">
                <h6>Contact:</h6>
                <span>123-456-789</span>
                <span>test@gmail.com</span>
            </div>
        </div>
        
    </div>
    <div class="footer__author">
        <span>©<span class="footer__year"></span> Hotel Javea</span>
        <span>Wykonanie <a href="https://marketingmix.pl" target="_blank">MarketingMix</a></span>
    </div>
    </div>
</footer>
