<li class="gdlr-core-item-mglr">
    <div class="tourmaster-room-grid">
        <div class="tourmaster-room-grid-inner">
            <div
                class="tourmaster-room-thumbnail tourmaster-media-image tourmaster-with-price">
                <a href="{{$href}}">
                    <img src="{{$img}}"
                        alt="" width="780" height="595" />
                </a>
                <div class="tourmaster-price-wrap tourmaster-with-bg btn--primary">
                    <span class="tourmaster-head">From</span><span
                        class="tourmaster-price">{{$price}}</span>
                </div>
            </div>
            <div class="tourmaster-room-content-wrap">
                <h3 class="tourmaster-room-title gdlr-core-skin-title"
                    style="text-transform: none;">
                    <a href="{{$href}}">{{$title}}</a>
                </h3>
                <div class="tourmaster-info-wrap clearfix">
                    <div class="tourmaster-info tourmaster-info-bed-type">
                        <i class="gdlr-icon-double-bed2"></i><span
                            class="tourmaster-tail">{{$bed}}</span>
                    </div>
                    <div
                        class="tourmaster-info tourmaster-info-guest-amount">
                        <i class="gdlr-icon-group"></i><span
                            class="tourmaster-tail">{{$guests}}</span>
                    </div>
                </div>
                <a class="tourmaster-read-more tourmaster-type-text "
                    href="{{$href}}">
                    See Detail<i class="icon-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</li>