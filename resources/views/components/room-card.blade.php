<li class="gdlr-core-item-mglr">
    <div class="tourmaster-room-grid3 tourmaster-grid-frame">
        <div class="tourmaster-room-grid-inner"
            style="
                box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                -moz-box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
                -webkit-box-shadow: 0px 35px 35px rgba(10, 10, 10, 0.1);
            ">
            <div
                class="tourmaster-room-thumbnail tourmaster-media-image gdlr-core-outer-frame-element">
                <a href="{{$href}}">
                    <img src="{{$img}}"
                        alt="hotel room miniature" width="780" height="595" />
                </a>
            </div>
            <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background gdlr-core-js"
            data-sync-height="room-item-6"
            style="padding-top: 75px; padding-bottom: 45px;">
            <div class="tourmaster-price-wrap tourmaster-with-bg"><span
                    class="tourmaster-head">From</span><span
                    class="tourmaster-price">{{$price}}</span></div>
            <h3 class="tourmaster-room-title gdlr-core-skin-title"
                style="font-size: 26px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                <a href="single-room.html">{{$title}}</a>
            </h3>
            {{$slot}}
           
                <a class="tourmaster-read-more tourmaster-type-text"
                    href="{{$href}}">
                    Book Now<i class="icon-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</li>