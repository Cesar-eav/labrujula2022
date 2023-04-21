@extends('layouts.master')

@section('content')
    <div id="app">
<ascensores-view-component :ascensores="{{json_encode($ascensores)}}"></ascensores-view-component>

</div>
@endsection

