<div class="hotale-mobile-header-wrap">
    <div class="hotale-mobile-header hotale-header-background hotale-style-slide hotale-sticky-mobile-navigation nav__mobile" id="hotale-mobile-header">
        <div class="hotale-mobile-header-container hotale-container clearfix" >
            <div class="hotale-logo hotale-item-pdlr">
                <div class="hotale-logo-inner">
                    <a class="hotale-fixed-nav-logo" href="{{route('home')}}">
                        <img
                            src="{{asset('assets/logo.png')}}"
                            alt=""
                            width="40"
                            height="40" style="width:120px"
                        />
                    </a>
                    <a class="hotale-orig-logo" href="{{route('home')}}">
                        <img src="{{asset('assets/logo.png')}}" alt="" width="110" height="110" title="logo-hotel-mobile" style="width:120px"/>
                    </a>
                </div>
            </div>
            <div class="hotale-mobile-menu-right">
               
                <div class="hotale-mobile-menu" >
                    <a class="hotale-mm-menu-button hotale-mobile-menu-button hotale-mobile-button-hamburger hamburger" href="#hotale-mobile-menu"><span></span></a>
                    <div class="hotale-mm-menu-wrap hotale-navigation-font" id="hotale-mobile-menu" data-slide="right" >
                        {{--NAV-ITEMS--}}
                        <ul id="menu-main-navigation" class="m-menu">
                        @include('partials.nav.nav-items')
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>