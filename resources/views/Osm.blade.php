@extends('layouts.master')

@section('content')
    <div id="app">
        <mapa-osm v-bind:lat="{{$lat}}" v-bind:long="{{$long}}" ></mapa-osm>
    </div>
@endsection