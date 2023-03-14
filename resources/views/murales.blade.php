@extends('layouts.master')

@section('content')
    <div id="app">
        <show-murales  :ubicacion="{{json_encode($ubicacion)}}" ></show-murales>
    </div>

@endsection




