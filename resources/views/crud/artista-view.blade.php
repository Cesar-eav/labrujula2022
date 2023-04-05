@extends('layouts.master')

@section('content')
    <div id="app">
<artista-view-component :artistas="{{json_encode($artistas)}}"></artista-view-component>

</div>
@endsection

