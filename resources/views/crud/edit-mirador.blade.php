@extends('layouts.master')

@section('content')
    <div id="app">
<mirador-edit-component :mirador="{{json_encode($mirador)}}" ></mirador-edit-component>

</div>
@endsection

