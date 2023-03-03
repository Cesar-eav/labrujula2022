@extends('layouts.master')

@section('content')
    <div id="app">
        <show-murales  :murales="{{json_encode($murales)}}"></show-murales>
    </div>
@endsection


