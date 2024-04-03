@extends('layouts.master')

@section('content')
    <div class="justify-center">

        <div class="flex justify-between my-4 mx-10">
            <p class="font-bold text-2xl text-red-600"> Atractivos</p>
            <p class="text-uppercase text-3xl font-bold text-red-400"> {{ $ubicacion }}</p>


            <div v-viewer class="grid grid-cols-1 md:grid-cols-3 md:mx-10 sm:mx-0 md:gap-5 gap-y-5 justify-center ">

                @foreach ($murales as $mural)
                <div class="mx-0 md:mx-2 sm:mx-0 bg-red-800  ">

                    <img src=" {{ asset('storage/' . $mural->image) }}" />

                    <div class="flex justify-between">
                        <button
                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm py-2 px-2 mr-3 my-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                            Más información
                        </button>


                        <a class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm py-2 px-2 mr-3 my-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" href="/osm/{{ $mural->lat }}/{{ $mural->lon }}" target="blank">Ir al
                            mapa</a>
                    </div>
                </div>
                @endforeach


            </div>

        </div>

    </div>
@endsection
