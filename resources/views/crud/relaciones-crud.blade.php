@extends('layouts.master')

@section('content')
    <div id="app">
<relaciones-component 
    :points="{{json_encode($points)}}" 
    :artists="{{json_encode($artists)}}">
    
</relaciones-component>

</div>
@endsection

