@extends('layouts.master')

@section('content')
    <div id="app">
<artista-edit-component :artista="{{json_encode($artista)}}"></artista-edit-component>

</div>
@endsection

