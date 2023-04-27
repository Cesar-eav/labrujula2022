@extends('layouts.master')
@extends('master-crud')

@section('content')
    <div id="app">
        <prueba-component></prueba-component>
        <index-component :murales="{{json_encode($murales)}}" ></index-component>
        
    </div>
@endsection
