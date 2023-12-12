<x-layouts.master>
    {{-- @section('title', '')
    @section('description', '') --}}

    <x-breadcrumbs title="Arena Dream D2B" bgi="{{ asset('assets/images/arenal-d2b/arenal-d2b_16.webp') }}" />

    <x-apartment.template title="Arena Dream D2B" price="99 EUR" galleryHref="{{ route('gallery-apartment-2') }}">

        <x-slot name="thumbnail">
            <x-apartment.thumbnail img="{{ asset('assets/images/arenal-d2b/arenal-d2b_8.webp') }}" />
        </x-slot>

        {{-- <x-slot name="features">
            <x-apartment.featureCard title="Bed" desc="1 king bed">
                <i class="gdlr-icon-double-bed2"
                    style="font-size: 33px; line-height: 33px; width: 33px; color: #0a0a0a;"></i>
            </x-apartment.featureCard>
            <x-apartment.featureCard title="Room Space" desc="30 sqm.">
                <i class="gdlr-icon-resize"
                    style="font-size: 34px; line-height: 34px; width: 34px; color: #0a0a0a;"></i>
            </x-apartment.featureCard>
        </x-slot> --}}

        <x-slot name='description'>


            <x-apartment.descriptionHeadingCard>Exclusive 75m2 penthouse suite beckons you to a vacation experience like no other. Positioned a mere 200 meters from the soft sands of Arenal Beach, this penthouse combines the tranquility of the sea with the elegance of sophisticated living.</x-apartment.descriptionHeadingCard>


            <x-apartment.descriptionCard title="Location:">
                @slot('icon')
                    <img src="{{ asset('assets/icons/location.png') }}" alt="" style="width: 30px">
                @endslot
                Set within the esteemed Arenal Dream complex, your stay places you moments away from the bustling promenade, offering the perfect blend of serenity and convenience.</x-apartment.descriptionCard>

            <x-apartment.descriptionCard title="Accommodation:">
                @slot('icon')
                    <img src="{{ asset('assets/icons/accomodation.png') }}" alt="" style="width: 30px">
                @endslot
                The penthouse features three cozy designed bedrooms, accommodating up to six guests. The master bedroom is a sanctuary with a comfortable double bed, while the two additional bedrooms are furnished with two single beds, that can be prepared as duble, all complemented by ample built-in wardrobe space.</x-apartment.descriptionCard>

            <x-apartment.descriptionCard title="Bathroom:">
                @slot('icon')
                    <img src="{{ asset('assets/icons/bathroom.png') }}" alt="" style="width: 30px">
                @endslot
                Two comfortable bathrooms with necessary amenities and plush towels, ensuring a refreshing start and end to your day.</x-apartment.descriptionCard>

            <x-apartment.descriptionCard title="Kitchen:">
                @slot('icon')
                    <img src="{{ asset('assets/icons/kitchen.png') }}" alt="" style="width: 30px">
                @endslot
                A culinary haven awaits in the fully equipped kitchen, complete with modern appliances such as a dishwasher, microwave, refrigerator, oven, and ceramic hob. It’s an inviting space for both cooking enthusiasts and those seeking the simplicity of vacation dining.</x-apartment.descriptionCard>

            <x-apartment.descriptionCard title="Living Area:">
                @slot('icon')
                    <img src="{{ asset('assets/icons/living-area.png') }}" alt="" style="width: 30px">
                @endslot
                The spacious living area is adorned with a large-screen TV 50-inch TV and merges into an 18m2 dining balcony featuring an 8-seater table and a cozy outdoor sofa. It’s an idyllic setting for memorable meals and relaxing evenings.</x-apartment.descriptionCard>

            <x-apartment.descriptionCard title="Rooftop Terrace:">
                @slot('icon')
                    <img src="{{ asset('assets/icons/rooftop.png') }}" alt="" style="width: 30px">
                @endslot
                A private 25m2 rooftop terrace elevates your stay to new heights, offering garden furniture, sun loungers, and a gas  grill. Revel in the panoramic views and bask in the Javea sun for the ultimate leisure experience.</x-apartment.descriptionCard>

            <x-apartment.descriptionCard title="Amenities:">
                @slot('icon')
                    <img src="{{ asset('assets/icons/amenities.png') }}" alt="" style="width: 30px">
                @endslot
                Year-round comfort is assured with central air conditioning and heating. A washing machine is also provided for your convenience, accommodating both short-term escapes and extended retreats.</x-apartment.descriptionCard>


            <x-apartment.descriptionCard title="Parking:">
                @slot('icon')
                    <img src="{{ asset('assets/icons/parking.png') }}" alt="" style="width: 30px">
                @endslot
                A dedicated underground parking space is included, adding peace of mind and ease to your luxurious stay.</x-apartment.descriptionCard>

            <x-apartment.descriptionCard title="Arenal Dream Complex:">
                @slot('icon')
                    <img src="{{ asset('assets/icons/complex.png') }}" alt="" style="width: 30px">
                @endslot
                Enjoy exclusive access to the community amenities, including a swimming pool and shaded areas perfect for lounging away from the midday sun.</x-apartment.descriptionCard>

            <x-apartment.summary>Just a 200-meter stroll from the beach and with ample living and outdoor space, this penthouse at Arenal Dream is a premium choice for those who seek the finest in comfort, location, and luxury. Discover the joy of Javea in a home that promises an unforgettable escape. Book your dream holiday today.</x-apartment.summary>
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

        {{-- <x-slot name="hotel_amenities">
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
        </x-slot> --}}

        <x-slot name="gallery">
            <x-apartment.galleryItem src="{{ asset('assets/images/arenal-d2b/arenal-d2b_4.webp') }}" />
            <x-apartment.galleryItem src="{{ asset('assets/images/arenal-a3a/arenal-a3a_10.webp') }}" />
            <x-apartment.galleryItem src="{{ asset('assets/images/arenal-a3a/arenal-a3a_11.webp') }}" />
            <x-apartment.galleryItem src="{{ asset('assets/images/arenal-a3a/arenal-a3a_16.webp') }}" />


        </x-slot>

        <x-slot name='otherRooms'>
            <x-apartment.moreRoomsItem title='Arenal A3a' price="99 EUR" href="{{ route('apartment-1') }}"
                img="{{ asset('assets/images/arenal-a3a/arenal-a3a_1.webp') }}" bed="1 King Bed" guests="4 Guests" />
            <x-apartment.moreRoomsItem title='Rennes Areal 3' price="99 EUR" href="{{ route('apartment-3') }}"
                img="{{ asset('assets/images/rennes-3/rennes_6.webp') }}" bed="1 King Bed" guests="4 Guests" />
            <x-apartment.moreRoomsItem title='Rennes Areal 6' price="99 EUR" href="{{ route('apartment-4') }}"
                img="{{ asset('assets/images/rennes-6/renes_29.webp') }}" bed="1 King Bed" guests="4 Guests" />
            <x-apartment.moreRoomsItem title='Isleta Marina' price="99 EUR" href="{{ route('apartment-5') }}"
                img="{{ asset('assets/images/hotel_1.webp') }}" bed="1 King Bed" guests="4 Guests" />
        </x-slot>

    </x-apartment.template>




</x-layouts.master>
