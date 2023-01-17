@extends('layouts.master')

@section('content')
    <div id="app">
<edit-component :murales="{{json_encode($murales)}}"></edit-component>

</div>
@endsection

