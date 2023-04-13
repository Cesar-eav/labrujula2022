@extends('layouts.master')

@section('content')
    <div id="app">
<artista-view-component :artistas="{{json_encode($artistas)}}" :mezcla="{{json_encode($mezcla)}}"></artista-view-component>

</div>
@endsection

