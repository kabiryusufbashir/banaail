@extends('layouts.template')

@section('page-meta')
    <meta name="description" content="Binaa'il Masaajid Wal Madaaris Foundation is basically an Islamic Non-Governmental Organisation (NGO), registered on 9th January 2014 with corporate affairs commission">
    <meta name="keywords" content="Masjid, Kano, NGO, Donate, Build, Help, Ramadan, Feed">
@endsection

@section('page-title')
    Donate Now - Binaail Masaajid Foundation
@endsection

@section('body-content')
    <!-- Body Contents  -->
    <div class="pt-8 pb-5 text-justify">
        <!-- Donate Now  -->
        <div class="bg-white mt-8 pt-8 pb-16">
            <div class="text-center text-2xl font-medium py-6">Donate Now</div>
            <div class="pb-6">
                <img class="w-24 mx-auto" src="{{ asset('images/donate.png') }}" alt="Donate Now">
            </div>
            <div class="lg:px-24 px-8 mx-auto">
                <div class="py-6 text-center text-xl px-4">
                    <div class="mx-auto py-2">Binnail Masaajid wal Madaaris Foundation</div>
                    <div class="mx-auto py-2">
                        <img class="w-24 mx-auto" src="{{ asset('images/tajbank.png') }}" alt="Taj Bank">        
                    </div>
                    <div class="mx-auto py-2">0003402150</div> 
                </div>
            </div>
        </div>
    </div>
@endsection
