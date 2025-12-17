@extends('layouts.app')

@section('css')
    <style>
        .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper {
            margin-inline: initial;
            padding-bottom: 5rem !important;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
        }

        .swiper-slide-active {
            color: #ffffff;
            font-weight: 700;
            font-size: 20px;
        }

        .swiper .swiper-pagination .swiper-pagination-bullet {
            background-color: #ffffff;
            width: 7px;
            height: 5px;
            border-radius: 10px;
        }

        .swiper .swiper-pagination .swiper-pagination-bullet-active {
            background-color: #ffffff;
            width: 12px;
            height: 5px;
            border-radius: 10px;
        }

        .swiper .swiper-button-prev::after,
        .swiper .swiper-button-next::after {
            content: "";
        }

        /* .swiper .swiper-button-prev,
                .swiper .swiper-button-next{
                    top: initial;

                    border-radius: 4px;
                    color: white;
                }

                .swiper .swiper-button-prev{
                    left: 10px;
                }

                .swiper .swiper-button-next{
                    right: 10px;
                } */

        .people_clip {
            clip-path: polygon(35% 12%, 100% 0, 100% 100%, 0 100%, 0 0);
        }

        @media screen and (max-width: 1023px) {
            .people_clip {
                clip-path: polygon(0 4%, 100% 0, 100% 94%, 0% 100%);
            }
        }

        @media screen and (max-width: 768px) {
            .swiper-slide-active {
                font-size: 18px;
            }

            .swiper-slide-active p {
                padding-top: 10px;
            }
        }

        @media screen and (max-width: 640px) {
            .swiper-slide {
                width: 190px;
                height: 200px;
            }
        }

        .home_clip {
            clip-path: polygon(35% 12%, 100% 0, 100% 78%, 0 100%, 0 0);
        }

        .bg_clip {
            clip-path: polygon(0 0, 100% 20%, 100% 100%, 0 83%);
        }

        @keyframes scrollleft {
            to {
                left: -200px;
            }
        }
    </style>
@endsection
@section('content')
    {{-- <div class="relative -top-[30px] md:-top-[90px] bg-[#ffffff] hidden lg:block h-[200px] people_clip">

        <img src="{{ asset('assets/images/line.png') }}" alt="" class="w-full pt-4 xl:pt-0" data-aos="fade-up"
            data-aos-duration="1000">
    </div> --}}
    <div class="relative z-10 -top-[30px] lg:-top-[100px] bg-[#F26A27] h-[550px] lg:h-[800px] home_clip">
        <img src="{{ asset('assets/images/line.png') }}" alt="" class="w-full hidden lg:block pt-4 xl:pt-20 relative lg:-top-40"
            data-aos="fade-up" data-aos-duration="1000">

        {{-- <div id="company_background"
            class="w-full max-w-3xl mx-auto flex flex-col items-center justify-center lg:justify-start lg:pt-10 text-start h-full text-[12px] md:text-[15px] font-[400] space-y-5 px-4 text-[#ffffff] overflow-hidden">
            <h1 class="text-[20px] md:text-[30px] font-[700] self-start" data-aos="fade-right" data-aos-duration="1500">
                Vision, Mission Statement, <br> Core Values
            </h1>
        </div> --}}
        {{-- <div class="relative z-50 md:top-10 top-20">
            <h1
                class="text-start text-[20px] md:text-[30px] text-[#2b3d4f] font-[700] py-10 max-w-7xl mx-auto px-4 leading-none">
                Vision, Mission Statement, Core Values</h1>


        </div> --}}
    </div>
    <div class="relative z-50 home_swiper h-full -mt-[200px] -top-[170px] md:-mt-[320px] lg:-top-[250px] md:-top-[120px]">
        <div class="home_content m-0 p-0">
            <div class="swiper mySwiper1">
                <div class="relative swiper-wrapper text-[#C5C5C5] -mt-12">
                    <div class="swiper-slide flex flex-col" id="value">
                        <img src="{{ asset('assets/images/core_value.png') }}" alt="">
                        <p class="text-center uppercase tracking-[1px] mt-2">Core Values</p>
                    </div>
                    <div class="swiper-slide flex flex-col" id="mission">
                        <img src="{{ asset('assets/images/mission.png') }}" alt="">
                        <p class="text-center uppercase tracking-[1px] mt-2">Mission</p>
                    </div>
                    <div class="swiper-slide flex flex-col" id="vision">
                        <img src="{{ asset('assets/images/vision.png') }}" alt="">
                        <p class="text-center uppercase tracking-[1px] mt-2">Vision</p>
                    </div>
                </div>

                <div class="swiper-button-next sm:!hidden">
                    <svg class="w-20 h-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1C4089">
                        <path
                            d="M7 6l-.112 .006a1 1 0 0 0 -.669 1.619l3.501 4.375l-3.5 4.375a1 1 0 0 0 .78 1.625h6a1 1 0 0 0 .78 -.375l4 -5a1 1 0 0 0 0 -1.25l-4 -5a1 1 0 0 0 -.78 -.375h-6z">
                        </path>
                    </svg>
                </div>
                <div class="swiper-button-prev sm:!hidden">
                    <svg class="w-20 h-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1C4089">
                        <path
                            d="M17 6h-6a1 1 0 0 0 -.78 .375l-4 5a1 1 0 0 0 0 1.25l4 5a1 1 0 0 0 .78 .375h6l.112 -.006a1 1 0 0 0 .669 -1.619l-3.501 -4.375l3.5 -4.375a1 1 0 0 0 -.78 -1.625z">
                        </path>
                    </svg>
                </div>
                <div class="swiper-pagination md:hidden"></div>
            </div>
        </div>
    </div>
    <div id="dynamic-content1" class="p-4 relative lg:-top-32 md:-mt-16 lg:mt-0">
    </div>


    {{-- <div class="w-full max-w-7xl mx-auto relative mt-5 lg:-top-[100px] px-4">
        <h1 class="text-start text-[20px] md:text-[30px] text-[#1C4089] font-[700] py-10">About Us</h1>
        <video class="w-full h-full object-cover px-4" controls autoplay>
            <source src="{{ asset('assets/images/video-1.mp4') }}" type="video/mp4">
            <source src="{{ asset('assets/images/video-1.ogg') }}" type="video/ogg">
        </video>
    </div> --}}


    <div id="chart" class="w-full max-w-7xl mx-auto overflow-hidden px-4 mt-10">
        <h1 class="text-start text-[20px] md:text-[30px] text-[#2C3E50] leading-none font-[700]">Organizational Chart
        </h1>

        <div class="my-5">
            <img src="{{ asset('assets/images/organization-Chat.jpg') }}" alt="" class="md:w-[90%] mx-auto">
        </div>
    </div>

    <div id="business_registration" class="w-full max-w-7xl mx-auto overflow-hidden px-4 mt-10">
        <h1 class="text-start text-[20px] md:text-[30px] text-[#2C3E50] leading-none font-[700]">Business Registration
            Certifications</h1>
        <div class="flex justify-center items-center py-12">
            <div class="flex md:flex-row flex-col justify-center items-center md:space-x-4 md:space-y-0 space-y-10">
                <div>
                    <img src="{{ asset('assets/images/catificate/3.png') }}" class="md:h-[300px] w-full object-cover" />
                </div>
                <div>
                    <img src="{{ asset('assets/images/catificate/2.png') }}" class="md:h-[300px] w-full object-cover" />
                </div>
                <div>
                    <img src="{{ asset('assets/images/catificate/1.png') }}" class="md:h-[300px] w-full object-cover" />
                </div>
            </div>
        </div>
    </div>
@endsection