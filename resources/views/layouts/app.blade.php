<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daiku MEP Solution</title>


    {{-- logo --}}
    <link rel="icon" sizes="16x16" href="{{ asset('assets/images/logo-daiku.png') }}" class="w-5 h-5">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- aos --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    @vite('resources/css/app.css')

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">


    @yield('css')

    <style>
        .nav-item .active {
            font-weight: 700;
            color: #f26b27;
        }

        .nav-item .active::before {
            content: "";
            position: absolute;
            bottom: -14px;
            left: -10px;
            width: calc(100% + 20px);
            height: 6px;
            background-color: #f26b27;
        }

        video {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        @media (max-width: 640px) {
            video {
                display: block;
            }
        }
    </style>
</head>

<body class="font-sans w-full antialiased" style="font-family: 'Inter', sans-serif;">
    <div class="relative h-[40vh] sm:h-[70vh] md:h-[100vh] lg:h-[135.8vh] w-full overflow-hidden"
        style="background-image: url('fallback-image.jpg');">
        <video autoplay muted loop playsinline class="absolute inset-0 -z-50 object-cover w-full h-full"
            poster="fallback-image.jpg">
            <source src="{{ url('assets/images/video.mp4') }}" type="video/mp4">
            <source src="{{ url('assets/images/video.webm') }}" type="video/webm">
        </video>

        @include('components.header')
        @include('components.navbar')
        @include('components.welcome')
    </div>
    <!-- SVG OVERLAY -->
    @if (!request()->routeIs('career', 'project'))
        <div class="hidden absolute xl:bottom-[-265px] left-0 w-full xl:flex justify-between z-30 pointer-events-none">
            <svg width="511" height="168" viewBox="0 0 511 168" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-2 0V61L510.5 167.051L-2 0Z" fill="#C2C2C2" />
            </svg>

            <svg width="922" height="169" viewBox="0 0 922 169" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M924 0L0 168.5L924 60V0Z" fill="#C2C2C2" />
            </svg>
        </div>
    @endif


    @yield('content')



    @include('components.footer')
    @yield('js')
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- aos --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper1", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            spaceBetween: 400,
            slidesPerView: "auto",
            loop: true,
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 400,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            on: {
                slideChange: function() {
                    // Content for each slide
                    const content = [
                        `
                            <div class="w-full max-w-5xl mx-auto">
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 sm:gap-20 px-4">
                                    <div>
                                        <h1 class="text-[50px] text-[#2b3d4f]">01</h1>
                                        <hr class="border-[#2b3d4f] border-b-[2px]">
                                        <div class="text-[#000000] text-[15px] mt-2">
                                            <h2 class="text-[#f26b27] font-[600] text-[18px]">Technical Excellence</h2>
                                            <p class="mt-2 text-[#000000]">
                                                Striving for unparalleled proficiency in
                                                the fields of Mechanical, Electrical, and Plumbing design and implementation.
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <h1 class="text-[50px] text-[#2b3d4f]">02</h1>
                                        <hr class="border-[#2b3d4f] border-b-[2px]">
                                        <div class="text-[#000000] text-[15px] mt-2">
                                            <h2 class="text-[#f26b27] font-[600] text-[18px]">Innovation + Adaptability</h2>
                                            <p class="mt-2">Embracing a culture of innovation, continuous learning, and adaptability
                                                to stay at the forefront of industry advancements.
                                                </p>
                                        </div>
                                    </div>
                                    <div>
                                        <h1 class="text-[50px] text-[#2b3d4f]">03</h1>
                                        <hr class="border-[#2b3d4f] border-b-[2px]">
                                        <div class="text-[#000000] text-[15px] mt-2">
                                            <h2 class="text-[#f26b27] font-[600] text-[18px]">Environmental Stewardship</h2>
                                            <p class="mt-2">Demonstrating a strong commitment to environmental sustainability by
                                            integrating eco-friendly practices into our operations and solutions.</p>
                                        </div>
                                    </div>

                                    <div>
                                        <h1 class="text-[50px] text-[#2b3d4f]">04</h1>
                                        <hr class="border-[#2b3d4f] border-b-[2px]">
                                        <div class="text-[#000000] text-[15px] mt-2">
                                            <h2 class="text-[#f26b27] font-[600] text-[18px]">Accountability</h2>
                                            <p class="mt-2">
                                                Taking responsibility for our actions, decisions, and outcomes, and learning
                                                from both successes and challenges.
                                            </p>
                                        </div>
                                    </div>

                                    <div>
                                        <h1 class="text-[50px] text-[#2b3d4f]">05</h1>
                                        <hr class="border-[#2b3d4f] border-b-[2px]">
                                        <div class="text-[#000000] text-[15px] mt-2">
                                            <h2 class="text-[#f26b27] font-[600] text-[18px]">Client Satisfaction</h2>
                                            <p class="mt-2">Dedication to understanding, anticipating, and exceeding the needs and
                                                expectations of our clients through exceptional service.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `,
                        `
                            <div class="w-full max-w-6xl mx-auto text-[14px] md:text-[16px] text-[#000000] text-left flex flex-col space-y-2">
                                <p>Our mission is to lead in Mechanical, Electrical, Plumbing, and Firefighting
                                    design, delivering international standard services.</p>
                                <p>We actively engage with our customers, understand their challenges, and
                                    provide responsible, cost-effective solutions with environmental care.
                                    Simultaneously, we focus on developing our engineers' capacity for
                                    sustained excellence.</p>
                            </div>
                        `,
                        `
                            <div class="w-full max-w-2xl mx-auto text-[14px] md:text-[16px] text-[#000000] text-left">
                                To emerge as the forefront design firm in Mechanical, Electrical,
                                Plumbing, and Firefighting, delivering services that adhere to
                                international standards.
                            </div>
                        `,
                    ];

                    const currentIndex = this.realIndex;
                    // Get the dynamic content element
                    const contentElement = document.getElementById('dynamic-content1');
                    // Update the content
                    contentElement.innerHTML = `<p>${content[currentIndex]}</p>`;
                }
            }
        });

        var swiper = new Swiper(".mySwiper2", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            spaceBetween: 400,
            slidesPerView: "auto",
            loop: true,
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 400,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            on: {
                slideChange: function() {
                    // Content for each slide
                    const content = [
                        `
                            <div class="w-full max-w-3xl mx-auto">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 px-4">
                                    <div class="flex items-center justify-center">
                                        <img src="{{ asset('assets/images/services/image-1.jpg') }}" alt="" class="w-full h-full">
                                    </div>

                                    <div class="bg-[#F26A27] h-[300px] flex flex-col items-start justify-start">
                                        <p class="text-[#ffffff] font-[700] px-10 text-start text-[16px] sm:text-[20px] w-[250px] sm:w-[340px] pt-4">Low Voltage
                                            System</p>
                                        <ul
                                            class="space-y-2 list-disc text-[10px] md:text-[11px] ml-6 sm:ml-10 text-[#ffffff] w-[200px] sm:w-[300px] mt-2">
                                            <li>Main Feeder MV & LV Distribution.</li>
                                            <li>General Lighting System.</li>
                                            <li>Emergency Lighting System.</li>
                                            <li>Power Supply System.</li>
                                            <li>LV & ELV Cable Containment.</li>
                                            <li>Lightning Protection and Earthing System.</li>
                                        </ul>
                                    </div>

                                    <div class="bg-[#F26A27] h-[300px] flex flex-col items-start justify-start">
                                        <p class="text-[#ffffff] font-[700] px-10 text-start text-[16px] sm:text-[20px] w-[250px] sm:w-[340px] pt-4">Extra Low
                                            Voltage System</p>
                                        <ul
                                            class="space-y-[2px] list-disc text-[10px] md:text-[11px] ml-6 sm:ml-10 text-[#ffffff] w-[200px] sm:w-[300px] mt-1">
                                            <li>Data and Telephone System</li>
                                            <li>Building Management System (BMS)</li>
                                            <li>Public Addressable System</li>
                                            <li>Automatic Fire Alarm System</li>
                                            <li>Guard Tour System</li>
                                            <li>Fire Intercom System</li>
                                            <li>Parking Guidance System</li>
                                            <li>Gas Suppression System</li>
                                            <li>Car Parking Management System</li>
                                            <li>Card Access Control System</li>
                                            <li>CCTV System</li>
                                            <li>CATV and MATV System</li>
                                            <li>Lighting Control System</li>
                                        </ul>
                                    </div>

                                    <div class="flex items-center justify-center">
                                        <img src="{{ asset('assets/images/services/image-2.jpg') }}" alt="" class="w-full h-full">
                                    </div>
                                </div>
                            </div>
                        `,
                        `
                            <div class="w-full max-w-3xl mx-auto text-start">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 px-4">
                                    <div class="flex items-center justify-center">
                                        <img src="{{ asset('assets/images/services/image-3.jpg') }}" alt="" class="w-full h-full">
                                    </div>

                                    <div class="bg-[#F26A27] h-[300px] flex items-center justify-center">
                                        <ul class="space-y-3 list-disc text-[12px] md:text-[14px] ml-6 sm:ml-8 text-[#ffffff] w-[200px] sm:w-[300px]">
                                            <li>
                                                Fire Detection System
                                            </li>
                                            <li>
                                                Fire Hose System
                                            </li>
                                            <li>
                                                Fire Sprinkler System
                                            </li>
                                            <li>
                                                Fm200
                                            </li>
                                            <li>
                                                Fire Extinguisher
                                            </li>
                                            <li>
                                                Cold & Hot Water Supply System
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="bg-[#F26A27] h-[300px] flex items-center justify-center">
                                        <ul class="space-y-3 list-disc text-[12px] md:text-[14px] ml-6 sm:ml-8 text-[#ffffff] w-[200px] sm:w-[300px]">
                                            <li>
                                                Boiler System
                                            </li>
                                            <li>
                                                Sanitary Drainage
                                            </li>
                                            <li>
                                                Storm Drainage
                                            </li>
                                            <li>
                                                Irrigation
                                            </li>
                                            <li>
                                                Water Treatment Plant
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="flex items-center justify-center">
                                        <img src="{{ asset('assets/images/services/image-4.jpg') }}" alt="" class="w-full h-full">
                                    </div>

                                </div>
                            </div>
                        `,
                        `
                            <div class="w-full max-w-3xl mx-auto text-start">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 px-4">
                                    <div class="flex items-center justify-center">
                                        <img src="{{ asset('assets/images/services/image-5.jpg') }}" alt="" class="w-full h-full">
                                    </div>

                                    <div class="bg-[#F26A27] h-[300px] flex flex-col space-y-4 items-center justify-center">
                                        <p class="text-[#ffffff] font-[700] px-10 text-start text-[16px] sm:text-[20px] w-[250px] sm:w-[340px] pt-4">Air-Conditioning System</p>
                                        <ul class="space-y-3 list-disc text-[12px] md:text-[14px] ml-6 sm:ml-8 text-[#ffffff] w-[200px] sm:w-[300px]">
                                            <li>
                                                Cool Room
                                            </li>
                                            <li>
                                                Clean Room
                                            </li>
                                            <li>
                                                Ventilation System
                                            </li>
                                            <li>
                                                Air-Curtain
                                            </li>
                                            <li>
                                                Kitchen Hood
                                            </li>
                                            <li>
                                                Central Gas System (LPG)
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="bg-[#F26A27] h-[300px] flex items-center justify-center">
                                        <ul class="space-y-3 list-disc text-[12px] md:text-[14px] ml-6 sm:ml-8 text-[#ffffff] w-[200px] sm:w-[300px]">
                                            <li>
                                                Fire Detection System
                                            </li>
                                            <li>
                                                Fire Hose System
                                            </li>
                                            <li>
                                                 Fire Sprinkler System
                                            </li>
                                            <li>
                                                Fm 200
                                            </li>
                                            <li>
                                                 Fire Extinguisher
                                            </li>
                                            <li>
                                                Cold & Hot Water Supply System
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="flex items-center justify-center">
                                        <img src="{{ asset('assets/images/services/image-6.jpg') }}" alt="" class="w-full h-full">
                                    </div>
                                </div>
                            </div>
                        `,
                    ];

                    const currentIndex = this.realIndex;
                    // Get the dynamic content element
                    const contentElement = document.getElementById('dynamic-content2');
                    // Update the content
                    contentElement.innerHTML = `<p>${content[currentIndex]}</p>`;
                }
            }
        });

        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            easing: 'ease-in-out',
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 200,
                modifier: 2,
                slideShadows: false,
            },
            loop: true,
            pagination: {
                el: ".swiper-pagination",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            on: {
        init: function () {
            jumpToSlideFromURL(this);
        },
    }
            // on: {
            //     slideChange: function() {
            //         document.querySelectorAll('.swiper-text').forEach(function(el) {
            //             el.style.display = 'none';
            //             el.style.opacity = 0;
            //             el.style.transform = 'translateY(20px)';
            //         });

            //         var activeSlide = this.slides[this.activeIndex];
            //         var activeText = activeSlide.querySelector('.swiper-text');
            //         if (activeText) {
            //             activeText.style.display = 'block';
            //             setTimeout(() => {
            //                 activeText.style.opacity = 1;
            //                 activeText.style.transform = 'translateY(0)';
            //             }, 50);
            //         }
            //     }
            // }
        });

       function jumpToSlideFromURL(swiperInstance) {
    const params = new URLSearchParams(window.location.search);
    const slideId = params.get('slide'); // item1, item2...

    if (!slideId) return;

    const target = document.getElementById(slideId);
    if (!target) return;

    const realIndex = Number(target.dataset.swiperSlideIndex);

    if (Number.isNaN(realIndex)) return;

    // ✅ Safe jump after loop clones exist
    swiperInstance.slideToLoop(realIndex, 0, false);

    // Smooth scroll
    const section = document.getElementById('our_experience');
    section?.scrollIntoView({ behavior: 'smooth' });
}

        AOS.init();
    </script>




</body>

</html>
