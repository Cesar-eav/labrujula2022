@extends('layouts.master')

@section('content')
    <div id="app">
<ascensor-edit-component :ascensor="{{json_encode($ascensor)}}" ></ascensor-edit-component>

</div>
@endsection

