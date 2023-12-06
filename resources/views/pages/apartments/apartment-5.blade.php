<x-layouts.master>

    <x-breadcrumbs title="Isleta Marina 4" bgi="{{ asset('assets/images/arenal-dream/arenal-dream_1.webp') }}" />

    <x-apartment.template title="Isleta Marina" price="99 EUR" galleryHref="{{route('gallery-apartment-5')}}">

        <x-slot name="thumbnail">
            <x-apartment.thumbnail img="{{ asset('assets/images/arenal-dream/arenal-dream_8.webp') }}" />
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
                Lorem ipsum dolor sit amet consectetur adipiscing elit vitae leo aliquam, euismod ut himenaeos nisi placerat semper lacinia eleifend molestie senectus natoque, platea scelerisque quis mi viverra suspendisse dis sociosqu nam. Justo parturient dui curae accumsan sollicitudin eget egestas etiam integer velit eu pharetra potenti,
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipiscing elit vitae leo aliquam, euismod ut himenaeos nisi placerat semper lacinia eleifend molestie senectus natoque, platea scelerisque quis mi viverra suspendisse dis sociosqu nam. Justo parturient dui curae accumsan sollicitudin eget egestas etiam integer velit eu pharetra potenti,
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipiscing elit vitae leo aliquam, euismod ut himenaeos nisi placerat semper lacinia eleifend molestie senectus natoque, platea scelerisque quis mi viverra suspendisse dis sociosqu nam. Justo parturient dui curae accumsan sollicitudin eget egestas etiam integer velit eu pharetra potenti,
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipiscing elit vitae leo aliquam, euismod ut himenaeos nisi placerat semper lacinia eleifend molestie senectus natoque, platea scelerisque quis mi viverra suspendisse dis sociosqu nam. Justo parturient dui curae accumsan sollicitudin eget egestas etiam integer velit eu pharetra potenti,
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
        <x-apartment.galleryItem src="{{asset('assets/images/arenal-dream/arenal-dream_1.webp')}}"/>
        <x-apartment.galleryItem src="{{asset('assets/images/arenal-dream/arenal-dream_2.webp')}}"/>
        <x-apartment.galleryItem src="{{asset('assets/images/arenal-dream/arenal-dream_3.webp')}}"/>
        <x-apartment.galleryItem src="{{asset('assets/images/arenal-dream/arenal-dream_4.webp')}}"/>
      
       
      

        </x-slot>

        <x-slot name='otherRooms'>
            <x-apartment.moreRoomsItem 
            title='Arenal A3a'
            price="99 EUR"
            href="{{route('apartment-1')}}"
            img="{{asset('assets/images/arenal-a3a/arenal-a3a_1.webp')}}"
            bed="1 King Bed"
            guests="4 Guests"
            />
            <x-apartment.moreRoomsItem 
            title='Arenal D2B'
            price="99 EUR"
            href="{{route('apartment-2')}}"
            img="{{asset('assets/images/arenal-d2b/arenal-d2b_1.webp')}}"
            bed="1 King Bed"
            guests="4 Guests"
            />
            <x-apartment.moreRoomsItem 
            title='Rennes Areal 3'
            price="99 EUR"
            href="{{route('apartment-3')}}"
                        img="{{asset('assets/images/rennes-3/rennes_6.webp')}}"
            bed="1 King Bed"
            guests="4 Guests"
            />
            <x-apartment.moreRoomsItem 
            title='Rennes Areal 6'
            price="99 EUR"
            href="{{route('apartment-4')}}"
            img="{{asset('assets/images/rennes-6/renes_29.webp')}}"
            bed="1 King Bed"
            guests="4 Guests"
            />
        </x-slot>
        
    </x-apartment.template>




</x-layouts.master>
