@extends('layouts.master')

@section('content')
    <div id="app">
        <artistas :artists="{{json_encode($artists)}}" :points="{{json_encode($points)}}" >
        </artistas>
    </div>
@endsection
