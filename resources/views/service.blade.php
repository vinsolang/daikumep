@extends('layouts.app')

@section('css')
    <style>
        .service_swiper .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .service_swiper .swiper {
            margin-inline: initial;
            padding-bottom: 5rem !important;
        }

        .service_swiper .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }

        .service_swiper .swiper-slide img {
            display: block;
            width: 100%;
        }

        .service_swiper .swiper-slide-active {
            color: #ffffff;
            font-weight: 700;
            font-size: 20px;
        }
        .service_swiper .swiper-pagination .swiper-pagination-bullet {
            background-color: #ffffff;
            width: 7px;
            height: 5px;
            border-radius: 10px;
        }

        .service_swiper .swiper-pagination .swiper-pagination-bullet-active {
            background-color: #ffffff;
            width: 12px;
            height: 5px;
            border-radius: 10px;
        }

        .service_swiper .swiper-button-prev::after,
        .service_swiper .swiper-button-next::after{
            content: "";
        }

        .service_bg {
            background-image: url('assets/images/services/service-bg.png');
        }

        .new_swiper .swiper {
            width: 80%;
            height: 50%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .new_swiper .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 700px;
            height: 100%;
            filter: blur(2px);
        }

        .new_swiper .swiper {
            margin-inline: initial;
            padding-bottom: 5rem !important;
            padding-top: 4rem !important;
        }


        .new_swiper .swiper-slide-active {
            filter: blur(0px);
        }

        .new_swiper .swiper-slide img {
            display: block;
            width: 100%;
        }

        .new_swiper .swiper-text {
            transition: opacity 0.5s ease, transform 0.5s ease;
            transform: translateY(20px);
        }

        .new_swiper .swiper-pagination .swiper-pagination-bullet {
            background-color: #1c408a;
            width: 4px;
            height: 4px;
            border-radius: 10px;
        }

        .new_swiper .swiper-pagination .swiper-pagination-bullet-active {
            background-color: #1c408a;
            width: 4px;
            height: 4px;
            border-radius: 10px;
        }

        .new_swiper .swiper-button-prev::after,
        .new_swiper .swiper-button-next::after{
            content: "";
        }

        .new_swiper .swiper-button-prev,
        .new_swiper .swiper-button-next{
            top: initial;
            top: 30px;
            border-radius: 4px;
            color: white;
        }

        .new_swiper .swiper-button-prev{
            left: 10px;
        }

        .new_swiper .swiper-button-next{
            right: 10px;
        }


        @media screen and (max-width: 1280px) {
            .new_swiper .swiper-slide {
                width: 640px;
                height: 100%;
            }
        }

        @media screen and (max-width: 768px) {
            .service_bg {
                background: #1c408a;
                clip-path: polygon(0 10%, 100% 0, 100% 90%, 0% 100%);
            }
        }

        @media screen and (max-width: 640px) {
            .service_swiper .swiper-slide {
                width: 190px;
                height: 200px;
            }

            .new_swiper .swiper-slide {
                width: 100%;
                height: 100%;
            }
        }
        .home_clip {
            clip-path: polygon(35% 12%, 100% 0, 100% 78%, 0 100%, 0 0);
        }

        .bg_clip {
            clip-path: polygon(0 0, 100% 20%, 100% 100%, 0 83%);
        }
    </style>
@endsection

@section('content')
    <div class="relative z-20 -top-[30px] lg:-top-[100px] bg-[#F26A27] h-[550px] lg:h-[800px] home_clip">
        <img src="{{ asset('assets/images/line.png') }}" alt="" class="relative lg:-top-40 w-full hidden lg:block pt-4 xl:pt-20"
            data-aos="fade-up" data-aos-duration="1000">

        {{-- <div id="company_background"
            class="w-full max-w-3xl mx-auto flex flex-col items-center justify-center lg:justify-start lg:pt-10 text-start h-full text-[12px] md:text-[15px] font-[400] space-y-5 px-4 text-[#ffffff] overflow-hidden">
            <h1 class="text-[20px] md:text-[30px] font-[700] self-start" data-aos="fade-right" data-aos-duration="1500">
                Vision, Mission Statement, <br> Core Values
            </h1>
        </div> --}}
        <div class="relative z-50 lg:-top-24 top-16">
            <h1
                class="text-start text-[20px] md:text-[30px] text-[#2b3d4f] font-[700] py-10 max-w-7xl mx-auto px-4 leading-none">
                Services and Qualification</h1>


        </div>
    </div>

    <section>
        <div id="service_qualifications" class="service_swiper h-full relative z-50 -mt-48 -top-[250px] md:-top-[300px] lg:-top-[420px]">
            <div class="service_content m-0 p-0 overflow-hidden">
                <div class="swiper mySwiper2">
                    <div class="swiper-wrapper text-[#C5C5C5]">
                        <div class="swiper-slide flex flex-col" id="value">
                            <img src="{{ asset('assets/images/services/electrical.png') }}" alt="" class="">
                            <p class="text-center mt-1 md:mt-2">Electrical System</p>
                        </div>
                        <div class="swiper-slide flex flex-col" id="mission">
                            <img src="{{ asset('assets/images/services/fire.png') }}" alt="" class="">
                            <p class="text-center mt-1 md:mt-2">Fire & Plumbing System</p>
                        </div>
                        <div class="swiper-slide flex flex-col" id="vision">
                            <img src="{{ asset('assets/images/services/mechanical.png') }}" alt="" class="">
                            <p class="text-center mt-1 md:mt-2">Mechanical System</p>
                        </div>
                    </div>

                    <div class="swiper-button-next sm:!hidden">
                        <svg class="w-20 h-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1C4089">
                            <path d="M7 6l-.112 .006a1 1 0 0 0 -.669 1.619l3.501 4.375l-3.5 4.375a1 1 0 0 0 .78 1.625h6a1 1 0 0 0 .78 -.375l4 -5a1 1 0 0 0 0 -1.25l-4 -5a1 1 0 0 0 -.78 -.375h-6z"></path>
                        </svg>
                    </div>
                    <div class="swiper-button-prev sm:!hidden">
                        <svg class="w-20 h-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1C4089">
                            <path d="M17 6h-6a1 1 0 0 0 -.78 .375l-4 5a1 1 0 0 0 0 1.25l4 5a1 1 0 0 0 .78 .375h6l.112 -.006a1 1 0 0 0 .669 -1.619l-3.501 -4.375l3.5 -4.375a1 1 0 0 0 -.78 -1.625z"></path>
                          </svg>
                    </div>
                    <div class="swiper-pagination md:hidden"></div>
                </div>
            </div>
        </div>

        <div id="dynamic-content2" class="p-4 relative mt-4 lg:mt-0 lg:-top-[200px]">
        </div>

        <div class="w-full max-w-7xl mx-auto px-4 lg:-mt-40" id="reason">
        <h1 class="text-start text-[20px] md:text-[30px] text-[#2b3d4f] font-[700] py-10 max-w-7xl mx-auto px-4 leading-none"
            data-aos="fade-right" data-aos-duration="1500">Reasons to Choose Daiku MEP Solution</h1>

        {{-- Why Partner with Us? --}}
        <section class="space-y-10">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-x-8 gap-y-12">

                    <div class="commitment-card space-y-4" data-aos="fade-right" data-aos-duration="1500">
                        <div class="commitment-header flex justify-between items-center px-2 bg-[#F26A27] text-white">
                            <h2 class="text-xl font-bold uppercase">Quality</h2>
                            <div class="commitment-number text-3xl font-extrabold px-6 py-1">01</div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-[#F26A27] text-lg font-bold mb-2">Uncompromising Commitment</h3>
                            <p class="text-gray-600 text-sm">
                                We pride ourselves on delivering our services swiftly and efficiently, completing
                                construction projects 6-7 days ahead of schedule without any delays.
                            </p>
                        </div>
                        <div class="bg-[#F26A27] h-2 w-full"></div>
                    </div>

                    <div class="commitment-card space-y-4" data-aos="fade-right" data-aos-duration="1500">
                        <div class="commitment-header flex justify-between items-center px-2 bg-[#F26A27] text-white">
                            <h2 class="text-xl font-bold uppercase">Standard</h2>
                            <div class="commitment-number text-3xl font-extrabold px-6 py-1">02</div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-[#F26A27] text-lg font-bold mb-2">Consistency in Our Approach</h3>
                            <p class="text-gray-600 text-sm">
                                Our work methodology adheres to a high standard, ensuring consistency and reliability in
                                every project we undertake.
                            </p>
                        </div>
                        <div class="bg-[#F26A27] h-2 w-full"></div>
                    </div>

                    <div class="commitment-card space-y-4" data-aos="fade-left" data-aos-duration="1500">
                        <div class="commitment-header flex justify-between items-center px-2 bg-[#F26A27] text-white">
                            <h2 class="text-xl font-bold uppercase">Quick Services Delivery</h2>
                            <div class="commitment-number text-3xl font-extrabold px-6 py-1">03</div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-[#F26A27] text-lg font-bold mb-2">Ahead of Schedule</h3>
                            <p class="text-gray-600 text-sm">
                                We pride ourselves on delivering our services swiftly and efficiently, completing
                                construction projects 6-7 days ahead of schedule without any delays.
                            </p>
                        </div>
                        <div class="bg-[#F26A27] h-2 w-full"></div>
                    </div>

                    <div class="commitment-card space-y-4" data-aos="fade-left" data-aos-duration="1500">
                        <div class="commitment-header flex justify-between items-center px-2 bg-[#F26A27] text-white">
                            <h2 class="text-xl font-bold uppercase">After Sale Service</h2>
                            <div class="commitment-number text-3xl font-extrabold px-6 py-1">04</div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-[#F26A27] text-lg font-bold mb-2">One Year Maintenance</h3>
                            <p class="text-gray-600 text-sm">
                                We provide one year maintenance assurance to our clients with peace of mind. Our commitment
                                extends beyond project completion to ensure continuous satisfaction.
                            </p>
                        </div>
                        <div class="bg-[#F26A27] h-2 w-full"></div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    </section>

    {{-- <div class="h-[200px] relative bg-[#1C4089]" style="clip-path: polygon(0 90%, 100% 0%, 0% 100%);" data-aos="fade-up"
        data-aos-duration="1000"></div> --}}

@endsection

