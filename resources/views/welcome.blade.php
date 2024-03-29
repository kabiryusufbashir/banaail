@extends('layouts.template')

@section('page-meta')
    <meta name="description" content="Binaa'il Masaajid Wal Madaaris Foundation is basically an Islamic Non-Governmental Organisation (NGO), registered on 9th January 2014 with corporate affairs commission">
    <meta name="keywords" content="Masjid, Kano, NGO, Donate, Build, Help">
@endsection

@section('page-title')
    Home - Binaa'il Masaajid Foundation
@endsection

@section('body-content')
    <!-- Banner -->
    <div>
        <img id="banner-img" class="object-cover w-full sm:h-screen lg:h-auto" src="{{ asset('images/bg-2.jpg') }}" alt="Binaa'il MASAAJID WAL MADAARIS FOUDNDATION">
        <div class="absolute lg:top-48 top-52">
            <div class="text-white font-extrabold p-8 bg-green-700" id="slogan">        
                <p class="flex justify-center">BINAA'IL MASAAJID WAL MADAARIS FOUDNDATION</p>
            </div>
        </div>
    </div>
    <!-- Body Contents  -->
    <div class="pt-8 pb-5 text-justify">
        <!-- Slogan  -->
        <div id="about-us" class="lg:px-24 px-8 mt-8">
            <!-- logo  -->
            <div>
                <img class="w-64 mx-auto" src="{{ asset('images/banaail.png') }}" alt="Binaa'il MASAAJID WAL MADAARIS FOUDNDATION LOGO">
            </div>
            <!-- About Us  -->
            <div class="text-center lg:w-2/3 mx-auto">
                <p class="py-3">
                    Binaa'il Masaajid Wal Madaaris Foundation is basically an Islamic Non-Governmental Organisation (NGO), registered on 9th January 2014 with corporate affairs commission
                </p>
                <p class="py-3">
                    It is temporarily headquartered at No. 7 Suite 9 Maiduguri Road Kano
                </p>
            </div>
        </div>
        
        <!-- About Us  -->
        <div id="about-us" class="bg-gray-100 mt-8 py-8">
            <div class="text-center text-2xl font-medium py-6">About Us</div>
            <div class="lg:px-24 px-8 lg:w-2/3 mx-auto">
                <p class="py-2 text-center">
                    The Foundation commenced operations on 15th February 2021 due to a number of reasons including the security situation in the country. The foundation was registered by a team of professionals, successful, honest and reputable personalities who have made name in their chosen career over the years
                </p>
                <p class="py-2 text-center">
                    The vision of the management to make great impact by giving unconditional service to the muslim communities locally and perhaps internationally. The management is determined to make impact and create a conducive environment for the service of the All-mighty Allah
                </p>
            </div>
        </div>

        <!-- Vision  -->
        <div id="vision" class="mt-8 py-8">
            <div class="text-center text-2xl font-medium py-6">Vision</div>
            <div class="pb-6">
                <img class="w-24 mx-auto" src="{{ asset('images/mission.png') }}" alt="Vision">
            </div>
            <div class="lg:px-24 px-8 lg:w-2/3 mx-auto">
                <p class="py-2 text-center">
                    To work as an NGO towards improving the condition of the needy and the less privileged members of the society through social welfare and philantropic services in hospitals, prison yards, remand homes, orphanages, grave yards and similar institutions
                </p>
            </div>
        </div>

        <!-- Mission  -->
        <div id="mission" class="bg-gray-100 mt-8 pt-8 pb-16">
            <div class="text-center text-2xl font-medium py-6">Our Mission</div>
            <div class="pb-6">
                <img class="w-24 mx-auto" src="{{ asset('images/vision.png') }}" alt="Mission">
            </div>
            <div class="lg:px-24 px-8 mx-auto">
                <div class="lg:grid grid-cols-3 gap-6 py-2 text-center">
                    <div class="my-2">
                        To source for funds from voluntary donors for the purpose of building, rehabilitating and re-structuring Islamic infrastructure in Nigeria, thereby ensuring conducive service learning and effective drug rehabilitation environment
                    </div>
                    <div class="my-2">
                        To encourage Muslims and Islamic organizations to provide funding for the cause of Allah and for the service of Islamic communities 
                    </div>
                    <div class="my-2">
                        To provide an honest institution where all funds received will be utilized honestly for the objectives of the Foundation and outmost satisfaction of the donors
                    </div>
                    <div class="my-2">
                        To promote unity and a sense of purpose to all Muslims in Nigeria and beyond
                    </div>
                    <div class="my-2">
                        To assist the poor, orphans and the less privileged members of the society thereby giving them a sense of honor and belonging 
                    </div>
                    <div class="my-2">
                        To ensure the prudent utilization of all donated funds and be fully transparent and accountable in whatever we do 
                    </div>
                </div>
            </div>
        </div>

        <!-- Aims And Objectives  -->
        <div id="aims-objectives" class="bg-white mt-8 py-8">
            <div class="text-center text-2xl font-medium py-6">Aims and Objectives</div>
            <div class="pb-6">
                <img class="w-24 mx-auto" src="{{ asset('images/objective.png') }}" alt="Objectives">
            </div>
            <div class="lg:px-24 px-8 mx-auto">
                <div class="lg:grid grid-cols-3 gap-6 py-2 text-center">
                    <div>
                        To carry the great message of Islam, disseminate true knowledge of the Holy Qur'an and the Hadiths of the Holy Prophet Muhammad (SAW) to all people
                    </div>
                    <div>
                        To promote the religious, moral and social advancement of members and all Muslims in general
                    </div>
                    <div>
                        To support and provide sound education to the Muslim Ummah and to propagate Islamic and Qur'anic general knowledge
                    </div>
                    <div>
                        To receive and disburse in accordance with the above objectives of the constitution of the organization, donations, gifts and grants from reputable individuals, Islamic organizations, countries, nations, communities and private institutions such as the Islamic Bank among others    
                    </div>
                    <div>
                        To promote the values of Islam and to serve as a medium for Muslims unity and peace co-existence. <br>
                        To build, maintain, repair and rehabilitate Masaajid, Islamic schools, institutions and other related infrastruture in Nigeria  
                    </div>
                </div>
            </div>
        </div>

        <!-- Project  -->
        <div class="bg-gray-100 mt-8 pt-8 pb-16">
            <div class="text-center text-2xl font-medium py-6">Projects Funded</div>
            <div class="lg:px-24 px-8 mx-auto">
                <!-- 001 -->
                <div class="mb-24">
                    <div class="pb-6">
                        <img class="lg:w-1/2 w-full mx-auto" src="{{ asset('images/project-001.jpg') }}" alt="Future Projects">
                    </div>
                    <div>
                        <p class="text-center lg:text-3xl text-sm">
                            Jumaat Mosque, Nasarawa Village, Danbatta LGA Kano State, Nigeria. Co-Funded.
                        </p>
                    </div>
                </div>
                <!-- 002 -->
                <div class="my-24">
                    <div class="pb-6">
                        <img class="lg:w-1/2 w-full mx-auto" src="{{ asset('images/project-002.jpg') }}" alt="Future Projects">
                    </div>
                    <div>
                        <p class="text-center lg:text-3xl text-sm">
                            Rehabilitated Concrete Well, Nasarawa Village, Danbatta LGA Kano State, Nigeria. Sole Funded.
                        </p>
                    </div>
                </div>
                <!-- 003 -->
                <div class="my-24">
                    <div class="pb-6">
                        <img class="lg:w-1/2 w-full mx-auto" src="{{ asset('images/project-003.jpg') }}" alt="Future Projects">
                    </div>
                    <div>
                        <p class="text-center lg:text-3xl text-sm">
                            Farm House Mosque, Nasarawa Village, Danbatta LGA Kano State, Nigeria, Sole Funded.
                        </p>
                    </div>
                </div>
                <!-- 004 -->
                <div class="my-24">
                    <div class="pb-6">
                        <img class="lg:w-1/2 w-full mx-auto" src="{{ asset('images/project-004.jpg') }}" alt="Future Projects">
                    </div>
                    <div>
                        <p class="text-center lg:text-3xl text-sm">
                            Land for the Proposed Drug Rehabilitation Center, Nasarawa Village, Danbatta LGA Kano State, Nigeria. Sole Funded.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
