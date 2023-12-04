<x-layouts.master>

    <x-breadcrumbs title="Arena Dream A3A" bgi="{{ asset('assets/images/hotel_1.webp') }}" />

    <x-apartment.template title="Arena Dream A3A" price="99 EUR">

        <x-slot name="thumbnail">
            <x-apartment.thumbnail img="{{ asset('assets/images/hotel_1.webp') }}" />
        </x-slot>

        <x-slot name="features">
            <x-apartment.featureCard title="Bed" desc="1 king bed">
                <i class="gdlr-icon-double-bed2"
                    style="font-size: 33px; line-height: 33px; width: 33px; color: #0a0a0a;"></i>
            </x-apartment.featureCard>
            <x-apartment.featureCard title="Room Space" desc="30 sqm.">
                <i class="gdlr-icon-resize"
                    style="font-size: 34px; line-height: 34px; width: 34px; color: #0a0a0a;"></i>
            </x-apartment.featureCard>
        </x-slot>

        <x-slot name='description'>
            <p>
                Far far away, behind the word mountains, far from the countries Vokalia
                and Consonantia, there live the blind texts. Separated they live in
                Bookmarksgrove right at the
                coast of the Semantics, a large language ocean. A small river named
                Duden flows by their place and supplies it with the necessary
                regelialia. It is a paradisematic country,
                in which roasted parts of sentences fly into your mouth. Even the
                all-powerful Pointing has no control about the blind texts it is an
                almost unorthographic life One day
                however a small line of blind text by the name of Lorem Ipsum decided to
                leave for the far World of Grammar.
            </p>
            <p>
                The Big Oxmox advised her not to do so, because there were thousands of
                bad Commas, wild Question Marks and devious Semikoli, but the Little
                Blind Text didn’t listen. She
                packed her seven versalia, put her initial into the belt and made
                herself on the way. When she reached the first hills of the Italic
                Mountains, she had a last view back on
                the skyline of her hometown
            </p>
        </x-slot>

        <x-slot name="rooms_amenities">
            <x-apartment.amenityCard title="TV">
                <i class="gdlr-icon-watch-tv" style="color: #1e1e1e;"></i>
            </x-apartment.amenityCard>
            <x-apartment.amenityCard title="Free Wifi">
                <i class="gdlr-icon-wifi-signal" style="color: #1e1e1e;"></i>
            </x-apartment.amenityCard>
            <x-apartment.amenityCard title="Safe">
                <i class="gdlr-icon-safe-box1" style="color: #1e1e1e;"></i>
            </x-apartment.amenityCard>
            <x-apartment.amenityCard title="None Smoking">
                <i class="gdlr-icon-shower" style="color: #1e1e1e;"></i>
            </x-apartment.amenityCard>
            <x-apartment.amenityCard title="Air Conditioning">
                <i class="gdlr-icon-air-conditioner1" style="color: #1e1e1e;"></i>
            </x-apartment.amenityCard>
            <x-apartment.amenityCard title="Heater">
                <i class="gdlr-icon-oil-heater-1" style="color: #1e1e1e;"></i>
            </x-apartment.amenityCard>
            <x-apartment.amenityCard title="Phone">
                <i class="gdlr-icon-telephone" style="color: #1e1e1e;"></i>
            </x-apartment.amenityCard>
            <x-apartment.amenityCard title="Hair Dryer">
                <i class="gdlr-icon-hair-dryer1" style="color: #1e1e1e;"></i> </x-apartment.amenityCard>
        </x-slot>

        <x-slot name="hotel_amenities">
            <x-apartment.amenityCard title="Gym">
                <i class="gdlr-icon-weights" style="color: #1e1e1e;"></i> </x-apartment.amenityCard>
            <x-apartment.amenityCard title="Parking">
                <i class="gdlr-icon-parking" style="color: #1e1e1e;"></i> </x-apartment.amenityCard>
            <x-apartment.amenityCard title="SPA">
                <i class="gdlr-icon-massage" style="color: #1e1e1e;"></i> </x-apartment.amenityCard>
            <x-apartment.amenityCard title="Restaurant">
                <i class="gdlr-icon-dish" style="color: #1e1e1e;"></i> </x-apartment.amenityCard>
            <x-apartment.amenityCard title="Room Service">
                <i class="gdlr-icon-food-service-copy" style="color: #1e1e1e;"></i> </x-apartment.amenityCard>
        </x-slot>

        <x-slot name="gallery">
        <x-apartment.galleryItem src="{{asset('assets/images/hotel_1.webp')}}"/>
        <x-apartment.galleryItem src="{{asset('assets/images/hotel_1.webp')}}"/>
        <x-apartment.galleryItem src="{{asset('assets/images/hotel_1.webp')}}"/>
        <x-apartment.galleryItem src="{{asset('assets/images/hotel_1.webp')}}"/>

        </x-slot>

        <x-slot name='otherRooms'>
            <x-apartment.moreRoomsItem 
            title='Arena Dream D2B'
            price="159 EUR"
            href="#"
            img="{{asset('assets/images/hotel_1.webp')}}"
            bed="1 King Bed"
            guests="4 Guests"
            />
        </x-slot>
    </x-apartment.template>




</x-layouts.master>
