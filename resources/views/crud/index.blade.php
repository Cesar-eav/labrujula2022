@extends('layouts.master')

@section('content')
    <div id="app">
<index-component 
    :murales="{{json_encode($murales)}}" >
</index-component>

</div>
@endsection

