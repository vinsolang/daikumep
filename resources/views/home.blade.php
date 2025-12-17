@extends('layouts.app')

@section('css')
    <style>
        .card1,
        .card2 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            clip-path: polygon(0 28%, 100% 15%, 100% 94.6%, 0 58%);
        }

        .content {
            position: absolute;
            top: 0;
            right: 0;
            /* width: 100%; */
            height: 100%;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;
            z-index: 3;
            color: white;
            /* padding: 0 20px; */
        }

        .home_clip {
            clip-path: polygon(35% 12%, 100% 0, 100% 78%, 0 100%, 0 0);
        }

        .bg_clip {
            clip-path: polygon(0 0, 100% 20%, 100% 100%, 0 83%);
        }

        /* Animation */
        @keyframes scrollleft {
            /* from {
                            left: 100%;
                        } */

            to {
                left: -200px;
                /* width + gap */
            }
        }

        /* Item style */
        .item {
            width: 200px;
            height: 180px;
            border-radius: 6px;
            position: absolute;
            left: max(calc(200px * 9), 100%);
            animation: scrollleft 45s linear infinite;
        }

        /* TOTAL ITEMS = 9 */
        .item1 {
            animation-delay: calc(45s / 9 * (9 - 1) * -1);
        }

        .item2 {
            animation-delay: calc(45s / 9 * (9 - 2) * -1);
        }

        .item3 {
            animation-delay: calc(45s / 9 * (9 - 3) * -1);
        }

        .item4 {
            animation-delay: calc(45s / 9 * (9 - 4) * -1);
        }

        .item5 {
            animation-delay: calc(45s / 9 * (9 - 5) * -1);
        }

        .item6 {
            animation-delay: calc(45s / 9 * (9 - 6) * -1);
        }

        .item7 {
            animation-delay: calc(45s / 9 * (9 - 7) * -1);
        }

        .item8 {
            animation-delay: calc(45s / 9 * (9 - 8) * -1);
        }

        .item9 {
            animation-delay: calc(45s / 9 * (9 - 9) * -1);
        }

        /* Optional: pause on hover */
        .wrapper:hover .item {
            animation-play-state: paused;
        }

        /* @media (max-width: 640px) {
                    .item {
                        width: 150px;
                        height: 100px;
                        left: max(calc(160px * 9), 100%);
                    }
                } */


        @media screen and (max-width: 1023px) {
            .home_clip {
                clip-path: polygon(0 4%, 100% 0, 100% 94%, 0% 100%);
            }

            .bg_clip {
                clip-path: polygon(0 0, 100% 20%, 100% 100%, 0 80%);
            }
        }

        @media screen and (max-width: 640px) {
            .item {
                width: 100px;
                height: 100px;
                border-radius: 6px;
                position: absolute;
                left: max(calc(100px * 16), 100%);
                animation-name: scrollleft;
                animation-duration: 20s;
                animation-timing-function: linear;
                animation-iteration-count: infinite;
            }
        }

        .filter-btn {
            @apply flex items-center justify-center border border-[#F26A27] h-8 px-4 rounded-full cursor-pointer hover:bg-[#F26A27] hover:text-white transition;
        }

        .filter-btn.active {
            background-color: #F26A27;
            color: white;
        }

        .card:target {
            transform: scale(1) !important;
            opacity: 1 !important;
            box-shadow: 0 20px 50px rgba(242, 106, 39, 0.45);
            border: 2px solid #F26A27;
        }
    </style>
@endsection

@section('content')
    {{-- company background --}}
    <div class="relative -top-[30px] lg:-top-[100px] bg-[#F26A27] h-[550px] lg:h-[800px] home_clip">
        <img src="{{ asset('assets/images/line.png') }}" alt=""
            class="relative 2xl:-top-40 xl:-top-24 w-full hidden lg:block pt-4 xl:pt-20" data-aos="fade-up"
            data-aos-duration="1000">

        <div id="company_background"
            class="relative 2xl:-top-40 xl:-top-24 w-full max-w-3xl mx-auto flex flex-col items-center justify-center lg:justify-start lg:pt-10 text-left h-full text-[12px] md:text-[15px] font-[400] space-y-5 px-4 text-[#ffffff] overflow-hidden">
            <h1 class="text-[20px] md:text-[30px] font-[700] self-start" data-aos="fade-right" data-aos-duration="1500">
                Company’s Background</h1>
            <p data-aos="fade-left" data-aos-duration="1500">
                Daiku MEP Solution is a mechanical, electrical and plumbing (MEP) service provider firm,
                located in Phnom Penh. It has commenced operations in early 2020, founded by Mr. Phan Tola with
                expertise in MEP design, supplies and installation of engineering solutions, and technical services for
                industrial, residential and commercial buildings.
            </p>
            <p data-aos="fade-right" data-aos-duration="1500">
                We officially registered with the Ministry of Commerce on under the name Daiku Solutions Co.,Ltd.
                The establishment of the company aimed to contribute to the thriving construction industry and
                create valuable job opportunities for the younger generation
            </p>
            <p data-aos="fade-left" data-aos-duration="1500">
                At present, Daiku MEP Solution operate with highly skilled and
                experienced in construction and management practices.
            </p>
        </div>
    </div>

    {{-- Project Credentials --}}
    <div class="relative w-full">
        <h1
            class="text-start text-[20px] md:text-[30px] text-[#2b3d4f] font-[700] py-10 max-w-7xl mx-auto px-4 leading-none">
            Project Credentials</h1>
        {{-- Filter category of project --}}
        <div class="flex flex-wrap gap-2 justify-center md:justify-end px-4 md:px-12">

            <button
                class="filter-btn active flex justify-center items-center border border-[#F26A27] w-16 h-8 rounded-full cursor-pointer hover:bg-[#F26A27] hover:text-[#ffffff]"
                data-filter="all">All</button>
            <button
                class="filter-btn flex justify-center items-center border border-[#F26A27] w-24 h-8 rounded-full cursor-pointer hover:bg-[#F26A27] hover:text-[#ffffff]"
                data-filter="resort">Resort</button>
            <button
                class="filter-btn flex justify-center items-center border border-[#F26A27] w-16 h-8 rounded-full cursor-pointer hover:bg-[#F26A27] hover:text-[#ffffff]"
                data-filter="hotel">Hotel</button>
            <button
                class="filter-btn flex justify-center items-center border border-[#F26A27] w-24 h-8 rounded-full cursor-pointer hover:bg-[#F26A27] hover:text-[#ffffff]"
                data-filter="polyclinic">Polyclinic</button>
            <button
                class="filter-btn flex justify-center items-center border border-[#F26A27] w-36 h-8 rounded-full cursor-pointer hover:bg-[#F26A27] hover:text-[#ffffff]"
                data-filter="residence">Residence & Villa</button>
            <button
                class="filter-btn flex justify-center items-center border border-[#F26A27] w-24 h-8 rounded-full cursor-pointer hover:bg-[#F26A27] hover:text-[#ffffff]"
                data-filter="aeon">Stores</button>
            <button
                class="filter-btn flex justify-center items-center border border-[#F26A27] w-32 h-8 rounded-full cursor-pointer hover:bg-[#F26A27] hover:text-[#ffffff]"
                data-filter="restaurant">Restaurant</button>
            {{-- <button
                class="filter-btn flex justify-center items-center border border-[#F26A27] w-36 h-8 rounded-full cursor-pointer hover:bg-[#F26A27] hover:text-[#ffffff]"
                data-filter="traffic">Traffic Tower</button> --}}

        </div>

        <div id="homeCardsWrapper"
            class="py-12 xl:px-3 px-3 grid grid-cols-1 xl:grid-cols-5 lg:grid-cols-3 md:grid-cols-2 md:gap-x-6 gap-y-4 place-items-center">
            {{-- Card 1 --}}
            <div class="project-card relative bg-white shadow-xl xl:w-64 w-full h-[360px] overflow-hidden group rounded-lg"
                data-category="hotel">

                <!-- Image -->
                <div class="w-full h-[200px]">
                    <img src="{{ asset('assets/images/DaikuMEP/01.Sofitel/01.png') }}" alt=""
                        class="w-full h-full object-cover">
                </div>

                <!-- Hover overlay -->
                <div
                    class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                    <a href="{{ route('project') }}?slide=item1"
                        class="bg-[#F26A27] text-white px-6 py-2 rounded-md font-semibold hover:bg-[#d85c20] transition -mt-2">
                        <button>View Details</button>
                    </a>
                </div>

                <!-- Content -->
                <div class="py-6 px-4 bg-white flex flex-col h-full">

                    <!-- Top content -->
                    <div class="space-y-2">
                        <p class="uppercase text-[#F26A27] font-bold text-[10px] md:text-[12px]">
                            Hotel
                        </p>

                        <h3 class="text-[#F26A27] min-h-16 text-[14px] md:text-[15px] font-semibold">
                            Sofitel Phnom Penh Phokeethra - 5 Stars Luxury Hotel
                        </h3>
                    </div>

                    <!-- Bottom content -->
                    <p class="text-gray-600 text-[12px] md:text-[14px]">
                        Phnom Penh, Cambodia
                    </p>
                </div>

            </div>

            {{-- Card 2 --}}
            <div class="project-card relative bg-white shadow-xl
                                     xl:w-64 w-full h-[360px]
                                     overflow-hidden group rounded-lg"
                data-category="resort">

                <!-- Image -->
                <div class="w-full h-[200px]">
                    <img src="{{ asset('assets/images/DaikuMEP/2.SiemPang/01.png') }}" alt=""
                        class="w-full h-full object-cover">
                </div>

                <!-- Hover overlay -->
                <div
                    class="absolute inset-0 bg-black/40
                                            flex items-center justify-center
                                            opacity-0 group-hover:opacity-100
                                            transition duration-300">
                    <a href="{{ route('project') }}?slide=item2">
                        <button
                            class="bg-[#F26A27] text-white px-6 py-2 rounded-md font-semibold
                                                       hover:bg-[#d85c20] transition -mt-2">
                            View Details
                        </button>
                    </a>
                </div>

                <!-- Content -->
                <div class="py-6 px-4 bg-white
                                    flex flex-col h-full">

                    <!-- Top content -->
                    <div class="space-y-2">
                        <p class="uppercase text-[#F26A27] font-bold text-[10px] md:text-[12px]">
                            Resort
                        </p>

                        <h3 class="text-[#F26A27] min-h-16 text-[14px] md:text-[16px] font-semibold line-clamp-2">
                            Siem Pang Resort
                        </h3>
                    </div>

                    <!-- Spacer -->
                    {{-- <div class="flex-grow"></div> --}}

                    <!-- Bottom content -->
                    <p class="text-gray-600 text-[12px] md:text-[14px]">
                        Stung Treng Province, Cambodia
                    </p>
                </div>

            </div>

            {{-- Card 3 --}}
            <div class="project-card relative bg-white shadow-xl
                                     xl:w-64 w-full h-[360px]
                                     overflow-hidden group rounded-lg"
                data-category="polyclinic">

                <!-- Image -->
                <div class="w-full h-[200px]">
                    <img src="{{ asset('assets/images/DaikuMEP/06.ChendaolyClinic/01.jpg') }}" alt=""
                        class="w-full h-full object-cover">
                </div>

                <!-- Hover overlay -->
                <div
                    class="absolute inset-0 bg-black/40
                                            flex items-center justify-center
                                            opacity-0 group-hover:opacity-100
                                            transition duration-300">
                    <a href="{{ route('project') }}?slide=item3">
                        <button
                            class="bg-[#F26A27] text-white px-6 py-2 rounded-md font-semibold
                                                       hover:bg-[#d85c20] transition -mt-2">
                            View Details
                        </button>
                    </a>
                </div>

                <!-- Content -->
                <div class="py-6 px-4 bg-white
                                    flex flex-col h-full">

                    <!-- Top content -->
                    <div class="space-y-2">
                        <p class="uppercase text-[#F26A27] font-bold text-[10px] md:text-[12px]">
                            Polyclinic
                        </p>

                        <h3 class="text-[#F26A27] min-h-16 text-[14px] md:text-[16px] font-semibold line-clamp-2">
                            Chenda Polyclinic
                        </h3>
                    </div>

                    <!-- Spacer -->
                    {{-- <div class="flex-grow"></div> --}}

                    <!-- Bottom content -->
                    <p class="text-gray-600 text-[12px] md:text-[14px]">
                        Phnom Penh, Cambodia
                    </p>
                </div>

            </div>

            {{-- Card 4 --}}
            <div class="project-card relative bg-white shadow-xl
                                    xl:w-64 w-full h-[360px]
                                     overflow-hidden group rounded-lg"
                data-category="resort">

                <!-- Image -->
                <div class="w-full h-[200px]">
                    <img src="{{ asset('assets/images/project/3.jpg') }}" alt="" class="w-full h-full object-cover">
                </div>

                <!-- Hover overlay -->
                <div
                    class="absolute inset-0 bg-black/40
                                            flex items-center justify-center
                                            opacity-0 group-hover:opacity-100
                                            transition duration-300">
                    <a href="{{ route('project') }}?slide=item4">
                        <button
                            class="bg-[#F26A27] text-white px-6 py-2 rounded-md font-semibold
                                                       hover:bg-[#d85c20] transition -mt-2">
                            View Details
                        </button>
                    </a>
                </div>

                <!-- Content -->
                <div class="py-6 px-4 bg-white
                                    flex flex-col h-full">

                    <!-- Top content -->
                    <div class="space-y-2">
                        <p class="uppercase text-[#F26A27] font-bold text-[10px] md:text-[12px]">
                            Resort
                        </p>

                        <h3 class="text-[#F26A27] min-h-16 text-[14px] md:text-[16px] font-semibold line-clamp-2">
                            Koh Tang Resort
                        </h3>
                    </div>

                    <!-- Spacer -->
                    {{-- <div class="flex-grow"></div> --}}

                    <!-- Bottom content -->
                    <p class="text-gray-600 text-[12px] md:text-[14px]">
                        Phnom Penh, Cambodia
                    </p>
                </div>

            </div>

            {{-- Card 5 --}}
            <div class="project-card relative bg-white shadow-xl
                                     xl:w-64 w-full h-[360px]
                                     overflow-hidden group rounded-lg"
                data-category="residence">
                <!-- Image -->
                <div class="w-full h-[200px]">
                    <img src="{{ asset('assets/images/DaikuMEP/08.VillaYimsResedence/01.png') }}" alt=""
                        class="w-full h-full object-cover">
                </div>

                <!-- Hover overlay -->
                <div
                    class="absolute inset-0 bg-black/40
                                            flex items-center justify-center
                                            opacity-0 group-hover:opacity-100
                                            transition duration-300">
                    <a href="{{ route('project') }}?slide=item5">
                        <button
                            class="bg-[#F26A27] text-white px-6 py-2 rounded-md font-semibold
                                                       hover:bg-[#d85c20] transition -mt-2">
                            View Details
                        </button>
                    </a>
                </div>

                <!-- Content -->
                <div class="py-6 px-4 bg-white
                                    flex flex-col h-full">

                    <!-- Top content -->
                    <div class="space-y-2">
                        <p class="uppercase text-[#F26A27] font-bold text-[10px] md:text-[12px]">
                            Residence
                        </p>

                        <h3 class="text-[#F26A27] min-h-16 text-[14px] md:text-[16px] font-semibold line-clamp-2">
                            Yim’s Residence
                        </h3>
                    </div>

                    <!-- Spacer -->
                    {{-- <div class="flex-grow"></div> --}}

                    <!-- Bottom content -->
                    <p class="text-gray-600 text-[12px] md:text-[14px]">
                        Phnom Penh, Cambodia
                    </p>
                </div>

            </div>

            {{-- Card 6 --}}
            <div class="project-card relative bg-white shadow-xl
                                     xl:w-64 w-full h-[360px]
                                     overflow-hidden group rounded-lg"
                data-category="residence">
                <!-- Image -->
                <div class="w-full h-[200px]">
                    <img src="{{ asset('assets/images/DaikuMEP/09.VillaSiemReap/01.jpg') }}" alt=""
                        class="w-full h-full object-cover">
                </div>

                <!-- Hover overlay -->
                <div
                    class="absolute inset-0 bg-black/40
                                            flex items-center justify-center
                                            opacity-0 group-hover:opacity-100
                                            transition duration-300">
                    <a href="{{ route('project') }}?slide=item6">
                        <button
                            class="bg-[#F26A27] text-white px-6 py-2 rounded-md font-semibold
                                                       hover:bg-[#d85c20] transition -mt-2">
                            View Details
                        </button>
                    </a>
                </div>

                <!-- Content -->
                <div class="py-6 px-4 bg-white
                                    flex flex-col h-full">

                    <!-- Top content -->
                    <div class="space-y-2">
                        <p class="uppercase text-[#F26A27] font-bold text-[10px] md:text-[12px]">
                            Villa
                        </p>

                        <h3 class="text-[#F26A27] min-h-16 text-[14px] md:text-[16px] font-semibold line-clamp-2">
                            Villa Siem Reap
                        </h3>
                    </div>

                    <!-- Spacer -->
                    {{-- <div class="flex-grow"></div> --}}

                    <!-- Bottom content -->
                    <p class="text-gray-600 text-[12px] md:text-[14px]">
                        Siem Reap, Cambodia
                    </p>
                </div>

            </div>

            {{-- Card 7 --}}
            <div class="project-card relative bg-white shadow-xl
                                     xl:w-64 w-full h-[360px]
                                     overflow-hidden group rounded-lg"
                data-category="aeon">
                <!-- Image -->
                <div class="w-full h-[200px]">
                    <img src="{{ asset('assets/images/DaikuMEP/10.CPS(AEONMALL3)/01.png') }}" alt=""
                        class="w-full h-full object-cover">
                </div>

                <!-- Hover overlay -->
                <div
                    class="absolute inset-0 bg-black/40
                                            flex items-center justify-center
                                            opacity-0 group-hover:opacity-100
                                            transition duration-300">
                    <a href="{{ route('project') }}?slide=item7">
                        <button
                            class="bg-[#F26A27] text-white px-6 py-2 rounded-md font-semibold
                                                       hover:bg-[#d85c20] transition -mt-2">
                            View Details
                        </button>
                    </a>
                </div>

                <!-- Content -->
                <div class="py-6 px-4 bg-white
                                    flex flex-col h-full">

                    <!-- Top content -->
                    <div class="space-y-2">
                        <p class="uppercase text-[#F26A27] font-bold text-[10px] md:text-[12px]">
                            FASHIONS Store
                        </p>

                        <h3 class="text-[#F26A27] min-h-16 text-[14px] md:text-[16px] font-semibold line-clamp-2">
                            CPS Aeon Mall Mean Chey
                        </h3>
                    </div>

                    <!-- Spacer -->
                    {{-- <div class="flex-grow"></div> --}}

                    <!-- Bottom content -->
                    <p class="text-gray-600 text-[12px] md:text-[14px]">
                        Phnom Penh, Cambodia
                    </p>
                </div>

            </div>

            {{-- Card 8 --}}
            <div class="project-card relative bg-white shadow-xl
                                     xl:w-64 w-full h-[360px]
                                     overflow-hidden group rounded-lg"
                data-category="resort">
                <!-- Image -->
                <div class="w-full h-[200px]">
                    <img src="{{ asset('assets/images/DaikuMEP/20.OsoumResort/01.png') }}" alt=""
                        class="w-full h-full object-cover">
                </div>

                <!-- Hover overlay -->
                <div
                    class="absolute inset-0 bg-black/40
                                            flex items-center justify-center
                                            opacity-0 group-hover:opacity-100
                                            transition duration-300">
                    <a href="{{ route('project') }}?slide=item8">
                        <button
                            class="bg-[#F26A27] text-white px-6 py-2 rounded-md font-semibold
                                                       hover:bg-[#d85c20] transition -mt-2">
                            View Details
                        </button>
                    </a>
                </div>

                <!-- Content -->
                <div class="py-6 px-4 bg-white
                                    flex flex-col h-full">

                    <!-- Top content -->
                    <div class="space-y-2">
                        <p class="uppercase text-[#F26A27] font-bold text-[10px] md:text-[12px]">
                            Resort
                        </p>

                        <h3 class="text-[#F26A27] min-h-16 text-[14px] md:text-[16px] font-semibold line-clamp-2">
                            Samanea Wellness Resort
                        </h3>
                    </div>

                    <!-- Spacer -->
                    {{-- <div class="flex-grow"></div> --}}

                    <!-- Bottom content -->
                    <p class="text-gray-600 text-[12px] md:text-[14px]">
                        Ousom Pursat Province, Cambodia
                    </p>
                </div>

            </div>

            {{-- Card 9 --}}
            <div class="project-card relative bg-white shadow-xl
                                     xl:w-64 w-full h-[360px]
                                     overflow-hidden group rounded-lg"
                data-category="aeon">
                <!-- Image -->
                <div class="w-full h-[200px]">
                    <img src="{{ asset('assets/images/DaikuMEP/AeonMallMeanchey/01.jpg') }}" alt=""
                        class="w-full h-full object-cover">
                </div>

                <!-- Hover overlay -->
                <div
                    class="absolute inset-0 bg-black/40
                                            flex items-center justify-center
                                            opacity-0 group-hover:opacity-100
                                            transition duration-300">
                    <a href="{{ route('project') }}?slide=item9">
                        <button
                            class="bg-[#F26A27] text-white px-6 py-2 rounded-md font-semibold
                                                       hover:bg-[#d85c20] transition -mt-2">
                            View Details
                        </button>
                    </a>
                </div>

                <!-- Content -->
                <div class="py-6 px-4 bg-white
                                    flex flex-col h-full">

                    <!-- Top content -->
                    <div class="space-y-2">
                        <p class="uppercase text-[#F26A27] font-bold text-[10px] md:text-[12px]">
                            Aeon Mall
                        </p>

                        <h3 class="text-[#F26A27] min-h-16 text-[14px] md:text-[16px] font-semibold line-clamp-2">
                            Aeon Mall Mean Chey
                        </h3>
                    </div>

                    <!-- Spacer -->
                    {{-- <div class="flex-grow"></div> --}}

                    <!-- Bottom content -->
                    <p class="text-gray-600 text-[12px] md:text-[14px]">
                        Phnom Penh, Cambodia
                    </p>
                </div>

            </div>

            {{-- Card 10 --}}
            <div class="project-card relative bg-white shadow-xl
                                     xl:w-64 w-full h-[360px]
                                     overflow-hidden group rounded-lg"
                data-category="restaurant">
                <!-- Image -->
                <div class="w-full h-[200px]">
                    <img src="{{ asset('assets/images/project/9.png') }}" alt=""
                        class="w-full h-full object-cover">
                </div>

                <!-- Hover overlay -->
                <div
                    class="absolute inset-0 bg-black/40
                                            flex items-center justify-center
                                            opacity-0 group-hover:opacity-100
                                            transition duration-300">
                    <a href="{{ route('project') }}?slide=item10">
                        <button
                            class="bg-[#F26A27] text-white px-6 py-2 rounded-md font-semibold
                                                       hover:bg-[#d85c20] transition -mt-2">
                            View Details
                        </button>
                    </a>
                </div>

                <!-- Content -->
                <div class="py-6 px-4 bg-white
                                    flex flex-col h-full">

                    <!-- Top content -->
                    <div class="space-y-2">
                        <p class="uppercase text-[#F26A27] font-bold text-[10px] md:text-[12px]">
                            Restaurant
                        </p>

                        <h3 class="text-[#F26A27] min-h-16 text-[14px] md:text-[16px] font-semibold line-clamp-2">
                            Kobe Teppanyaki Restaurant Koh Pich
                        </h3>
                    </div>

                    <!-- Spacer -->
                    {{-- <div class="flex-grow"></div> --}}

                    <!-- Bottom content -->
                    <p class="text-gray-600 text-[12px] md:text-[14px]">
                        Phnom Penh, Cambodia
                    </p>
                </div>

            </div>
        </div>
    </div>

    <section id="notable_clients" class="">
        <h1 class="text-center text-[20px] md:text-[30px] text-[#1C4089] font-[700]">Our Notable Clients</h1>
        <div class="wrapper w-full max-w-auto mx-auto relative h-[350px] sm:h-[400px] mt-[5rem] overflow-hidden">
            <div class="item item1 bg-contain bg-center bg-no-repeat"
                style="background-image: url('assets/images/client/client-15new.png')"></div>

            <div class="item item2 bg-contain bg-center bg-no-repeat"
                style="background-image: url('assets/images/client/2.png')"></div>

            <div class="item item3 bg-contain bg-center bg-no-repeat"
                style="background-image: url('assets/images/client/3.png')"></div>

            <div class="item item4 bg-contain bg-center bg-no-repeat"
                style="background-image: url('assets/images/client/4.jpg')"></div>

            <div class="item item5 bg-contain bg-center bg-no-repeat"
                style="background-image: url('https://www.samanea-resort.com/wp-content/uploads/2025/02/Normal.png')">
            </div>

            <div class="item item6 bg-contain bg-center bg-no-repeat"
                style="background-image: url('assets/images/client/6.jpg')"></div>

            <div class="item item7 bg-contain bg-center bg-no-repeat"
                style="background-image: url('assets/images/client/7.jpg')"></div>

            <div class="item item8 bg-contain bg-center bg-no-repeat"
                style="background-image: url('assets/images/client/8.jpg')"></div>
            <div
                class="item item9 flex items-center justify-center
                            bg-white
                            text-[#F26A27] font-semibold text-lg
                            rounded-lg hover:text-[#F26A27]
                            transition md:text-xl text-[14px] w-1/2">
                + Many More</div>
        </div>

    </section>

    {{-- --}}
    <section class="h-screen section_clip">
        <div class="w-full h-full relative top-[2rem] flex items-center justify-center bg-cover bg-center bg-scroll md:bg-fixed bg_clip"
            style="background-image: url('assets/images/home/bg-home.jpg');">
            <div class="absolute inset-0 bg-[#DFB266] mix-blend-multiply opacity-75"></div>

            <h1 class="text-center text-[20px] md:text-[30px] lg:text-[40px] text-[#ffffff] z-10 font-[500] w-[978px]"
                data-aos="fade-up" data-aos-duration="1000">Together, we have achieved remarkable milestones
                and faced challenges with resilience, reinforcing
                the strength of our partnership. </h1>
        </div>
    </section>

    <script>
        const filterButtons = document.querySelectorAll(".filter-btn");
        const cards = document.querySelectorAll(".project-card");

        filterButtons.forEach(button => {
            button.addEventListener("click", () => {
                const filter = button.dataset.filter;

                // Active button style
                filterButtons.forEach(btn => btn.classList.remove("active"));
                button.classList.add("active");

                cards.forEach(card => {
                    const category = card.dataset.category;

                    if (filter === "all" || category === filter) {
                        card.classList.remove("hidden");
                    } else {
                        card.classList.add("hidden");
                    }
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (window.location.hash) {
                const target = document.querySelector(window.location.hash);
                if (target) {
                    setTimeout(() => {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                    }, 200);
                }
            }
        });
    </script>
@endsection
