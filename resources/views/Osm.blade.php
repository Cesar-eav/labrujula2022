@extends('layouts.master')

@section('content')
    <div id="app" class="OSM">
        <mapa-osm v-bind:lat="{{$lat}}" v-bind:long="{{$long}}" ></mapa-osm>
    </div>
@endsection


{{-- <x-maps-leaflet class="w-full-10 p-20"
    :centerPoint="['lat' => $lat, 'long' =>  $long]"
    :markers="[['lat' => $lat, 'long' => $long]]"
    :zoomLevel="18"
    >
</x-maps-leaflet> --}}