@extends('layouts.template')

@section('page-title')
    Home - Binaail Masaajid Foundation
@endsection

@section('body-content')
    <!-- Banner -->
    <div class="">
        <img class="object-cover w-full h-screen" src="{{ asset('images/bg-2.jpg') }}" alt="Background 1">
        <div class="absolute lg:top-64 top-52">
            <div class="text-white font-extrabold p-8 bg-green-700" id="slogan">        
                <p class="flex justify-center">BINAAIL MASAAJID WAL MADAARIS FOUDNDATION</p>
            </div>
        </div>
    </div>
    <div class="lg:px-24 px-8">
        Hello
    </div>
@endsection
