@extends('layouts.master')

@section('content')
    <div id="app">
<ubication-edit-component :ubication="{{json_encode($ubication)}}" ></ubication-edit-component>

</div>
@endsection

