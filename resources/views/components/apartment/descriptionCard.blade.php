{{-- <div style="margin-top:1em">
    <h6 style="margin-bottom:0">{{$title}}</h3>
        <p>{{$slot}}</p>
</div> --}}


<div style="margin-top: 1em">
    <div style="display: flex; justify-content: flex-start; align-items: center; gap: .5em">
        @isset($icon)
{{$icon}}
        @endisset
        <h6 style="margin-bottom:0">{{ $title }}</h6>
    </div>
    <p>{{ $slot }}</p>
</div>