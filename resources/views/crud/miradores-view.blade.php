@extends('layouts.master')

@section('content')
    <div id="app">
<miradores-view-component :miradores="{{json_encode($miradores)}}"></miradores-view-component>

</div>
@endsection

