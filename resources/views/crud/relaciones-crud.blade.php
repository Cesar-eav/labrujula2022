@extends('layouts.master')

@section('content')
    <div id="app">
<relaciones-component 
    :point="{{json_encode($point)}}" 
    :artists="{{json_encode($artists)}}">
    
</relaciones-component>

</div>
@endsection

