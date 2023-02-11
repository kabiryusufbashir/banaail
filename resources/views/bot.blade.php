@extends('layouts.template')

@section('page-meta')
    <meta name="description" content="Binaa'il Masaajid Wal Madaaris Foundation is basically an Islamic Non-Governmental Organisation (NGO), registered on 9th January 2014 with corporate affairs commission">
    <meta name="keywords" content="Masjid, Kano, NGO, Donate, Build, Help, Call, Contact, Board of trustees">
@endsection

@section('page-title')
    Board of Trustees - Binaail Masaajid Foundation
@endsection

@section('body-content')
    <!-- Banner -->
    {{--<div>
        <img id="banner-img" class="object-cover w-full sm:h-screen lg:h-auto" src="{{ asset('images/bg-1.jpg') }}" alt="BINAAIL MASAAJID WAL MADAARIS FOUDNDATION">
        <div class="absolute lg:top-48 top-52 right-0">
            <div class="text-white font-extrabold py-8 px-24 bg-green-700" id="slogan">        
                <p class="flex justify-center">BOARD OF TRUSTEES</p>
            </div>
        </div>
    </div>--}}
    <!-- Body Contents  -->
    <div class="pt-8 pb-5 text-justify">
        <!-- Board of Trustees  -->
        <div class="bg-white pt-8 pb-16">
            <div class="text-center text-2xl font-medium py-6">Board of Trustees</div>
            <!-- Alhaji Mustapha M. Daneji  -->
            <div class="lg:px-24 px-8 mx-auto">
                <div class="text-center py-4">
                    <div class="mb-3"><img src="{{ asset('images/001.jpg') }}" alt="Alhaji Mustapha M. Daneji" class="w-64 mx-auto rounded-full"></div>
                    <div class="mb-3 text-2xl">Alhaji Mustapha M. Daneji</div>
                    <div class="mb-3"><b>Chairman BOT</b></div>
                </div>
                <div class="lg:w-1/2 mx-auto">
                    <p class="my-2">Alhaji Daneji is the Chairman, Board of Trustees (BOT) of the Foundation. He holds a Higher National Diploma (HND) in Accountancy (1983) from School of Management Studies, Kano State polytechnic and is a member of the Association of National Accountants of Nigeria (ANAN). He is both a member of the Nigerian Institute of Management (NIM) and the Commodity Brokers Association of Nigeria (CBAN)</p>
                    <p class="my-2">Alhaji Daneji's career started from the Office of the Auditor General, Kano State in 1984 to Nigerian Social Insurance Trust Fund (NSITF) where he rose to become the Acting Head of Finance Department, between 2002-2007</p>
                    <p class="my-2">He is currently the Director Finance, Cityscape Properties Ltd. and a director of the following private companies: City Centre Ultra-Modern Market Ltd, Earmark Consult Limited, Gafam Nigeria Limited, Gafam Farms Limited</p>
                    <p class="my-2">Alhaji Daneji is an active official/member of various philanthropic and community development associations, including:- Chairman, Foundation for Assistance to Orphans and Needy, Vice Chairman, Management Committee, Hausawa New Layout Community Association, Member - Board of Trustees, Abdullahi Bn Mas`ud Islamiyya</p>
                    <p class="my-2">He is married with children and grandchildren</p>
                </div>
            </div>
            <div class="lg:px-24 px-8 mt-8 py-4">
                <div class="lg:grid grid-cols-2 gap-8">
                    <!-- Alh Yusuf Asir Danbatta mni -->
                    <div class="shadow p-3 bg-white">
                        <div class="text-center py-4">
                            <div class="mb-3"><img src="{{ asset('images/002.jpg') }}" alt="Alh Yusuf Asir Danbatta mni,- Member, Board Of Trustees/CEO" class="w-64 mx-auto rounded-full"></div>
                            <div class="mb-3 text-2xl">Alh Yusuf Asir Danbatta mni</div>
                            <div class="mb-3"><b>Member, Board Of Trustees/CEO</b></div>
                        </div>
                        <div class="mx-auto">
                            <p class="my-2">Alhaji Yusuf Asir Danbatta was the immediate Past Secretary to the National Assembly Service Commission, Abuja. He earlier served the Commission in the capacity of its Director, Finance & Accounts, between 2013 and 2020, prior to his appointment as the Secretary to the Commission</p>
                            <p class="my-2">Alhaji Danbatta served the Kano state and Federal Government in various senior management positions. They include: Ag. Zonal Accountant (Kano Agricultural and Rural Development Authority-KNARDA), Group Internal Auditor (Kano state Investment and Properties Limited-KSIP), General Manager/CEO (Kano State Cotton Ginnery Limited-KCGL) and Traffic Manager (Agro-Nutrients & Chemicals Company ltd). Others are, General Manager/CEO (Nigerian Victory Assurance Limited), Special Assistant to the Secretary-General/CEO (African Iron and Steel Association-AISA) and Assistant Director, Budget & Expenditure Control (Defunct National Program on Immunization-NPI)</p>
                            <p class="my-2">Alhaji Danbatta holds a BSc. Degree in Accounting (1983) and a Masters in Business Administration (MBA 1994) both from Bayero University Kano. He is a Member of the prestigious National Institute for Policy and Strategic Studies, Kuru (mni) and a fellow of the National Accountants of Nigeria. He holds the traditional title of Marafan Makoda, in Makoda Local Government Area, Kano State</p>
                            <p class="my-2">He was born on 15th December, 1960 at Danbatta, in Danbatta Local Government Area and is married with six children. He is widely travelled both locally and internationally</p>
                        </div>
                    </div>
                    <div class="shadow p-3 bg-white">
                        <div class="text-center py-4">
                            <div class="mb-3"><img src="{{ asset('images/003.jpg') }}" alt="Dr. Lawal Adamu Dambatta" class="w-64 mx-auto rounded-full"></div>
                            <div class="mb-3 text-2xl">Dr. Lawal Adamu Dambatta</div>
                            <div class="mb-3"><b>Member, Board of Trustees & Vice Chairman (Executive Committee)</b></div>
                        </div>
                        <div class="mx-auto">
                            <p class="my-2">Dr. Lawal Adamu Dambatta is a seasoned Lawyer and is currently the Principal Partner of Amfana Chambers - Legal Practioners & Consultants, Abuja, Kano & Lagos</p>
                            <p class="my-2">Dr. Adamu was the immediate past Company Secretary/Legal Adviser and General Manager (Management Services) of the Nigerian Security Printing & Minting Company Group. Dr. Adamu rose through the rank to become the Company Secretary/Legal Practitioner from 1990 to 2019 after which he retired and ventured into the Legal Private Practice to become the Principal Partner of the above mentioned Chamber</p>
                            <p class="my-2">Dr. Adamu holds a Bachelor of law (LL.B) and a Masters of Law (LL.M), both from the prestigious Ahmadu Bello University, Zaria. Dr. Adamu was awarded the Doctor of laws (LL.D) Honoris causa) by the Commonwealth University, London and Doctor of Business Administration (Honoris causa), by the London Bridge Business School</p>
                            <p class="my-2">Dr. Adamu is a Fellow of the Nigerian Institute of Management (Chartered), Fellow- Intellectual Property Institute, Nigeria, Fellow-Chartered Institute of Loans & Risk Management, Fellow-Institute of Corporate Administration, and a Member-Institute of Management Consultants. He is a Member-Chartered Institute of Personnel Management of Nigeria. He is also a Member of the Nigerian Bar Association, International Bar Association (IBA) and Space Law Association of Nigeria</p>
                            <p class="my-2">Dr. Adamu attended several Leadership/Management courses at Havard Business School (USA), Cranfield School of Management (London), London Business School, IMD of Switzerland, Westminster Business School (London), and several other overseas & domestic courses. In addition, he was a recipient of many domestic commendations & awards</p>
                            <p class="my-2">Dr. Adamu was born on 11th May, 1963 in Dambatta Town, Dambatta Local Govt Area of Kano State and is happily married with 6 children</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:px-24 px-8 mt-8 py-4">
                <div class="lg:grid grid-cols-2 gap-8">
                    <!-- Malam Yaya Abdullahi – Member BOT -->
                    <div class="shadow p-3 bg-white">
                        <div class="text-center py-4">
                            <div class="mb-3"><img src="{{ asset('images/004.jpg') }}" alt="Malam Yaya Abdullahi – Member BOT" class="w-64 mx-auto rounded-full"></div>
                            <div class="mb-3 text-2xl">Malam Yaya Abdullahi</div>
                            <div class="mb-3"><b>Member BOT</b></div>
                        </div>
                        <div class="mx-auto">
                            <p class="my-2">Malam Abdullahi is a National Diploma holder in Accountancy, and was born on 15th June 1960. He is married with children. He is the Director in charge of International Relations of the Foundation</p>
                            <p class="my-2">Malam Abdullahi, Member Board of Trustees (BOT) Binaail Masaajid Wal Madaaris Foundation, worked with the Nigerian Hoechst Ltd, which is also known as the Nigerian German Chemicals between 1984 and 1986. Immediately after his resignation from the above company, he was employed by Al-Shifa pharmacy as a manager from 1986-1994. He gained all his pharmaceutical experience from the above mentioned pharmaceutical companies</p>
                            <p class="my-2">Malam Abdullahi later in 1995, established his pharmaceutical business called “Salam Pharmacy and General Enterprise” and he is the Managing Director/Chief Executive of the Company to date. He is the chief Imam of the Dan-Asabe Plaza Masjid, Zoo Road, Kano and is learned in Islamic affairs</p>
                        </div>
                    </div>
                    <div class="shadow p-3 bg-white">
                        <div class="text-center py-4">
                            <div class="mb-3"><img src="{{ asset('images/005.jpg') }}" alt="Ali Ahmed Gwarzo –Member BOT/Financial Secretary" class="w-64 mx-auto rounded-full"></div>
                            <div class="mb-3 text-2xl">Ali Ahmed Gwarzo</div>
                            <div class="mb-3"><b>Member BOT/Financial Secretary</b></div>
                        </div>
                        <div class="mx-auto">
                            <p class="my-2">Alhaji Gwarzo was born in Gwarzo, Gwarzo Local Government Area of Kano State on 2nd February, 1964. He completed his primary and secondary education at Gwarzo and Dawakin Kudu between 1971 and 1983 respectively. He later obtained his Ordinary National Diploma (OND) from Kano State Polytechnic between 1983 and 1986. He obtained his Higher National Diploma (HND) in Chemical Technology from Petroleum Institute of Nigeria (now Federal University of Petroleum Resources) in 1990. While in the Nigerian Immigration Service, which he joined in 1986, he enrolled and acquired a Diploma in Computer Processing under the supervision of the United States Agency for International Development (USAID) in 1996. Alhaji Gwarzo also obtained a Graduate Diploma in Community Development at the Federal College of Education, Kano, in 2010</p>
                            <p class="my-2">Alhaji Gwarzo's working career started with the Nigerian Immigration Service (NIS) in 1986. While in the service, he rose steadily from an inspector II to the rank of Deputy Controller of Immigration (DCI) and retired from the Service with honor and commendation. In the course of service to the nation, Alhaji Gwarzo was honored by the Former Nigerian President, Goodluck Ebele Jonathan with the prestigious Member of the Order of the Niger (MON) in 2010. He was honored for refusing bribe in millions of Naira in the course of service</p>
                            <p class="my-2">While discharging his service to the Nigerian Nation, the French Government selected him for a special training on “detection of forged document identification” in January, 2009. Similarly, the Spanish Government trained him on “special techniques for arrest of criminals” in June of the same year</p>
                            <p class="my-2">Alhaji Gwarzo is among the ten staff that participated at a conference organized by the Institute of African Politics, Commercial and Trade Policy in Africa (ITPA) in 2017, in Senegal. He also attended a course on “Rescue and Giving First Aid” and “Techniques and Shooting Targets of Criminals” at Orvieto, Italy in 2003 and 2019 respectively. He is happily married with Children</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:px-24 px-8 mt-8 py-4">
                <div class="lg:grid grid-cols-2 gap-8">
                    <!-- ALHAJI FARUK SANI- MEMBER BOT/PROJECT MANAGER -->
                    <div class="shadow p-3 bg-white">
                        <div class="text-center py-4">
                            <div class="mb-3"><img src="{{ asset('images/006.jpg') }}" alt="ALHAJI FARUK SANI- MEMBER BOT/PROJECT MANAGER" class="w-64 mx-auto rounded-full"></div>
                            <div class="mb-3 text-2xl">ALHAJI FARUK SANI</div>
                            <div class="mb-3"><b>MEMBER BOT/PROJECT MANAGER</b></div>
                        </div>
                        <div class="mx-auto">
                            <p class="my-2">Alhaji Sani is a Member Board of Trustees and also holding the position of Project Manager. He holds a Master of Business Administration (MBA) Degree from Bayero University Kano and a full Technology Certificate in Motor Vehicle Technician of the City & Guilds, of London Institute</p>
                            <p class="my-2">Alh. Sani worked in various capacities in the public and private sectors spanning over forty years beginning from 1979 to date. From 1979-1988 he worked with the Kano State Urban Development Board (now Kano State Urban Planning and Development Authority, KNUPDA) where he rose to the rank of Senior Technical Officer, Mechanical. He then proceeded to SCOA Motors Nigeria, where he served as Workshop Manager at their Kano and Jos branches, from 1989-1994. After leaving, SCOA Motors, Alh Sani joined the services of Savanah Beverages Company Ltd, Kano as Utilities Manager where he rose to become the company`s Chief Engineer. He later joined the Dangote Transport Company Ltd. Lagos as its Workshop Engineer before eventually joining Northern Nigeria Flour Mills Plc. Kano, as fleet Maintenance Manager. Alh. Sani retired from Northern Nigeria Flour Mills Plc. in December 2019 but was retained as a Fixed Term Staff where he still works</p>
                            <p class="my-2">Alh Sani is a Director, Earmark Consult Limited, and a member of the following professional associations: Institute of professional Managers & Administrators of Nigeria, Nigerian Association of Technologists in Engineering (NATE). Alh. Sani is also an active member of the Federal Road Safety Corps Special Marshal and is happily married with Children</p>
                        </div>
                    </div>
                    <div class="shadow p-3 bg-white">
                        <div class="text-center py-4">
                            <div class="mb-3"><img src="{{ asset('images/007.jpg') }}" alt="Hajiya Safiya Muhammad Yakasai – Member BOT" class="w-64 mx-auto rounded-full"></div>
                            <div class="mb-3 text-2xl">Hajiya Safiya Muhammad Yakasai</div>
                            <div class="mb-3"><b>Member BOT</b></div>
                        </div>
                        <div class="mx-auto">
                            <p class="my-2">Hajiya Yakasai is a seasoned banking professional with over 20 years'experience in the Financial Service Industry. She was the immediate past Retail Zonal Head, North West Region of Starling Bank Plc</p>
                            <p class="my-2">Having held different positions in various branches and regional offices including Head of Operations, Regional Sales Manager, Relationship Manager and Retail Business Manager, she retired from the banking Sector in December 2021</p>
                            <p class="my-2">Prior to Starling bank, she worked with other banks including IMB International Bank, Corporative Bank and Indo-Nigerian Bank Plc. Hajiya Yakasai Holds a Post Graduate-Diploma and Masters in Banking and Finance both from Bayero University Kano. She was born on 25th September, 1969, and is married with children</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:px-24 px-8 mt-8 py-4">
                <div class="lg:grid grid-cols-2 gap-8">
                    <!-- Hajiya Fatima MaiKore – Member BOT -->
                    <div class="shadow p-3 bg-white">
                        <div class="text-center py-4">
                            <div class="mb-3"><img src="{{ asset('images/no_image.jpg') }}" alt="Hajiya Fatima MaiKore – Member BOT" class="w-64 mx-auto rounded-full"></div>
                            <div class="mb-3 text-2xl">Hajiya Fatima MaiKore</div>
                            <div class="mb-3"><b>Member BOT</b></div>
                        </div>
                        <div class="mx-auto">
                            <p class="my-2">Hajiya Maikore holds a Bachelor's Degree in Geology from the University of Maiduguri, a post graduate Diploma in Applied Geoscience at the Laser Petroleum and Geosciences Centre, Port Harcourt, a post graduate Diploma in Environmental Resource Management from the Nassarawa State university and National Diploma certificate in Mineral and Petroleum Resources Engineering from the Kaduna State Polytechnic</p>
                            <p class="my-2">Hajiya Maikore was appointed in to the Ministry of Mines and Steel Development in 2012 as a Geologist. She was posted to Artisanal and Small Scale Mining Department and her scheduled includes carrying out baseline studies in mining issues</p>
                            <p class="my-2">Hajiya Maikore is a fellow of the Nigerian Institute of Management Consultants, Member, Nigerian Mining and Geoscience society, Member, Australia Alumni Association of Nigeria and a Member of the Mine Closure Ambassadors (AMCA)</p>
                            <p class="my-2">Hajiya Maikore was elected as the Financial Secretary of the Australia Alumni Association of Nigeria (AAAN) and the treasurer of the Association of Mine closure Ambassadors. She is a member of the Women in Leadership (WIN) and Women in Mining of Nigeria. An Alumni of the Blavatnik School of Government, Oxford University, in the United Kingdom</p>
                            <p class="my-2">Hajiya Maikore travelled widely to many countries on official assignments. She attended a short course on -Managing mine closures in Australia and South Africa in 2016 and -Local economics and social development in extractives in 2018.  She was born on 16th December 1982</p>
                        </div>
                    </div>
                    <div class="shadow p-3 bg-white">
                        <div class="text-center py-4">
                            <div class="mb-3"><img src="{{ asset('images/no_image.jpg') }}" alt="Hajiya Aisha Jamil Dantata" class="w-64 mx-auto rounded-full"></div>
                            <div class="mb-3 text-2xl">Hajiya Aisha Jamil Dantata</div>
                            <div class="mb-3"><b>Member BOT</b></div>
                        </div>
                        <div class="mx-auto">
                            <p class="my-2">Hajiya Dantata was born in Kano on 7th April 1968. She completed her primary and secondary education at Shekara and Women Teachers College, Kano, between 1978 and 1985. She is an international business personality especially shuttling between Nigeria and Saudi Arabia. Hajiya Dantata is a Member, Board of Trustees of the Binaa`il Masaajid Wal Madaaris Foundation and she is happily married with children and grandchildren</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
