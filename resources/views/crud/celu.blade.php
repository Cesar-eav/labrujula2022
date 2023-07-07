@extends('layouts.master')

@section('content')
    <div id="app">
<celu-component
    :murales="{{json_encode($murales)}}" >
</celu-component>

</div>
@endsection

