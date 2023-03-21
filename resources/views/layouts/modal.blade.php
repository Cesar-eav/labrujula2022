@extends('layouts.master')

@section('content')
    <div id="app">
        <modal-component  :ubicacion="{{json_encode($ubicacion)}}" ></modal-component>
    </div>

@endsection
