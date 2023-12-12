<x-layouts.master>
    {{-- @section('title', '')
    @section('description', '') --}}

    <x-breadcrumbs title="Arena Dream A3A" bgi="{{ asset('assets/images/arenal-a3a/arenal-a3a_11.webp') }}" />

    <x-apartment.template title="Arena Dream A3A" price="99 EUR" galleryHref="{{ route('gallery-apartment-1') }}">

        <x-slot name="thumbnail">
            <x-apartment.thumbnail img="{{ asset('assets/images/arenal-a3a/arenal-a3a_5.webp') }}" />
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


            <x-apartment.descriptionHeadingCard>Welcome to your next escape at Arenal Dream in the heart of Javea,
                Spain, where this stunning 60m2
                penthouse provides an intimate yet lavish getaway. Boasting the same elegant design and premium
                location as our larger suite, this abode is a mere 200 meters from the Arenal Beach, offering a
                perfect blend of luxury and comfort for your seaside holiday.</x-apartment.descriptionHeadingCard>


            <x-apartment.descriptionCard title="Location:">
                @slot('icon')
                    <img src="{{ asset('assets/icons/location.png') }}" alt="" style="width: 30px">
                @endslot
                Residing in the exclusive Arenal Dream complex, this
                penthouse offers quick access to the beach and
                the vibrant life of Javea's promenade.</x-apartment.descriptionCard>

            <x-apartment.descriptionCard title="Accommodation:">
                @slot('icon')
                    <img src="{{ asset('assets/icons/accomodation.png') }}" alt="" style="width: 30px">
                @endslot
                This penthouse is expertly laid out with two bedrooms, each designed to offer a peaceful night's
                rest for up to four guests. The master bedroom includes an en-suite bathroom, and there's a
                second full bathroom to provide privacy and convenience for all occupants.</x-apartment.descriptionCard>

            <x-apartment.descriptionCard title="Bathroom:">
                @slot('icon')
                    <img src="{{ asset('assets/icons/bathroom.png') }}" alt="" style="width: 30px">
                @endslot
                Two modern bathrooms are appointed with high-end fixtures and fittings, complete with plush
                towels, providing a serene environment to unwind or prepare for the day’s
                adventures.</x-apartment.descriptionCard>

            <x-apartment.descriptionCard title="Kitchen:">
                @slot('icon')
                    <img src="{{ asset('assets/icons/kitchen.png') }}" alt="" style="width: 30px">
                @endslot
                The open-plan, fully equipped kitchen is a statement of form and functionality, featuring a
                dishwasher, microwave, full-size refrigerator, oven, and ceramic hob. It’s a delightful space
                for whipping up your favorite dishes or experimenting with local Spanish
                cuisine.</x-apartment.descriptionCard>

            

            <x-apartment.descriptionCard title="Living Area:">
                @slot('icon')
                    <img src="{{ asset('assets/icons/living-area.png') }}" alt="" style="width: 30px">
                @endslot
                The living area, complete with a 50-inch TV, is designed for relaxation and entertainment. This
                space flows seamlessly onto a private balcony, where you can enjoy the fresh sea air and
                alfresco dining against the backdrop of Javea's skyline.</x-apartment.descriptionCard>

            <x-apartment.descriptionCard title="Rooftop Terrace:">
                @slot('icon')
                    <img src="{{ asset('assets/icons/rooftop.png') }}" alt="" style="width: 30px">
                @endslot
                The penthouse features a private rooftop terrace, providing a secluded spot for sunbathing or
                enjoying evening cocktails under the stars. While this terrace doesn’t include a grill, it
                remains a versatile outdoor space for leisure and relaxation.</x-apartment.descriptionCard>

            <x-apartment.descriptionCard title="Amenities:">
                @slot('icon')
                    <img src="{{ asset('assets/icons/amenities.png') }}" alt="" style="width: 30px">
                @endslot
                With central air conditioning and heating, the penthouse ensures comfort in all seasons. A
                washing machine is also available, catering to all the practicalities of home
                living.</x-apartment.descriptionCard>


            <x-apartment.descriptionCard title="Parking:">
                @slot('icon')
                    <img src="{{ asset('assets/icons/parking.png') }}" alt="" style="width: 30px">
                @endslot
                A secure parking spot is provided in the underground garage, ensuring easy access and added
                security for your vehicle.</x-apartment.descriptionCard>

            <x-apartment.descriptionCard title="Arenal Dream Complex:">
                @slot('icon')
                    <img src="{{ asset('assets/icons/complex.png') }}" alt="" style="width: 30px">
                @endslot
                As a resident of Arenal Dream, you'll have exclusive access to the complex's amenities, including
                the garden, pool area where you can swim, sunbathe, or simply relax in the peaceful
                surrounds.</x-apartment.descriptionCard>

            <x-apartment.summary>This penthouse is perfectly sized for families, couples, or a small group of friends,
                providing all
                the essentials for a sublime stay. With its prime location, sophisticated style, and comprehensive
                amenities, it promises to be a base where memories are made. Experience the enchantment of Javea at
                Arenal Dream, where every detail is tailored for your comfort and enjoyment.</x-apartment.summary>
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
            <x-apartment.galleryItem src="{{ asset('assets/images/arenal-a3a/arenal-a3a_10.webp') }}" />
            <x-apartment.galleryItem src="{{ asset('assets/images/arenal-a3a/arenal-a3a_11.webp') }}" />
            <x-apartment.galleryItem src="{{ asset('assets/images/arenal-a3a/arenal-a3a_15.webp') }}" />
            <x-apartment.galleryItem src="{{ asset('assets/images/arenal-a3a/arenal-a3a_16.webp') }}" />


        </x-slot>

        <x-slot name='otherRooms'>
            <x-apartment.moreRoomsItem title='Arenal D2B' price="99 EUR" href="{{ route('apartment-2') }}"
                img="{{ asset('assets/images/arenal-d2b/arenal-d2b_1.webp') }}" bed="1 King Bed" guests="4 Guests" />
            <x-apartment.moreRoomsItem title='Rennes Areal 3' price="99 EUR" href="{{ route('apartment-3') }}"
                img="{{ asset('assets/images/rennes-3/rennes_6.webp') }}" bed="1 King Bed" guests="4 Guests" />
            <x-apartment.moreRoomsItem title='Rennes Areal 6' price="99 EUR" href="{{ route('apartment-4') }}"
                img="{{ asset('assets/images/rennes-6/renes_29.webp') }}" bed="1 King Bed" guests="4 Guests" />
            <x-apartment.moreRoomsItem title='Isleta Marina' price="99 EUR" href="{{ route('apartment-5') }}"
                img="{{ asset('assets/images/hotel_1.webp') }}" bed="1 King Bed" guests="4 Guests" />
        </x-slot>

    </x-apartment.template>




</x-layouts.master>
