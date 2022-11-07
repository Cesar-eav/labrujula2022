@extends('layouts.master')

@section('content')
<div>

    <mapa-osm></mapa-osm>

{{-- <x-maps-leaflet class="HERE w-full-10 p-20"
    :centerPoint="['lat' => $lat, 'long' =>  $long]"
    :markers="[['lat' => $lat, 'long' => $long]]"
    :zoomLevel="16"
    >
</x-maps-leaflet> --}}

@endsection




