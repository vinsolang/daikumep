<style>
    .texting {
        background: #f26b27;
        clip-path: polygon(0 0, 100% 20%, 100% 100%, 0% 100%);
    }

    @media (max-width: 639px) {
        .texting {
            clip-path: polygon(0 0, 100% 15%, 100% 100%, 0% 100%);
        }
    }
</style>

<section class="w-full bg-cover bg-center z-10 texting">

    @component('components.alert')
    @endcomponent

    <div class="w-full max-w-6xl mx-auto pt-40 pb-20 flex md:flex-row flex-col sm:gap-20 px-4">
        {{-- Contact Us --}}
        <div class="text-[#ffffff] text-[14px]">
            <h1 class="text-[20px] font-[700] text-[#ffffff]">Contact Us</h1>
            <div class="flex items-center space-x-3 mt-6 md:w-80">
                <div>
                    <svg class="w-6 h-6 text-[#ffffff]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z" />
                    </svg>
                </div>
                <div>
                    (+855) 93  64 25 89
                </div>
            </div>
            <div class="flex justify-start space-x-3 w-[270px] mt-4">
                <div>
                    <svg class="w-6 h-6 text-[#ffffff]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z" />
                    </svg>
                </div>
                <div>
                    #99, Street 76CC, Trapiang Thleoung 1 Village, 
                    Chom Chao 1,  Commune, Pur Senchey District, 
                    Phnom Penh
                </div>
            </div>
            <div class="mt-4 flex items-center space-x-3">
                <div>
                    <svg class="w-6 h-6 text-[#ffffff]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="1.5"
                            d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                    </svg>
                </div>
                <a href="#"
                    class="hover:underline hover:text-[#DFB266] hover:font-[600] duration-500">daikumep@gmail.com</a>
            </div>
            <div class="py-6">
                {{-- Face Book --}}
                <div class="mt-4 flex items-center space-x-3">
                    <a href="" class="flex items-center space-x-3">
                        <div>
                        <svg width="40" height="42" viewBox="0 0 40 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.182 16.0493V17.9374H16.3638V20.7696H18.182V29.2662H21.8183V20.7696H24.2365L24.5456 17.9374H21.8183V16.2853C21.8183 15.5206 21.891 15.1146 23.0274 15.1146H24.5456V12.2729H22.1092C19.2002 12.273 18.182 13.6891 18.182 16.0493Z" fill="white"/>
                        <path d="M20 0C8.9543 0 0 9.29879 0 20.7695C0 32.2401 8.9543 41.5389 20 41.5389C31.0457 41.5389 40 32.2401 40 20.7695C40 9.29879 31.0457 0 20 0ZM20 39.6507C9.95844 39.6507 1.8182 31.1973 1.8182 20.7695C1.8182 10.3416 9.95844 1.88815 20 1.88815C30.0416 1.88815 38.1818 10.3416 38.1818 20.7695C38.1818 31.1973 30.0416 39.6507 20 39.6507Z" fill="white"/>
                        </svg>
                    </div>
                    <p
                        class="hover:underline hover:text-[#DFB266] hover:font-[600] duration-500">Facebook</p>
                    </a>
                </div>
                {{-- Telegram --}}
                <div class="mt-4 flex items-center space-x-3">
                    <a href="https://t.me/+85567393333" class="flex items-center space-x-3">
                        <div>
                        <svg width="37" height="39" viewBox="0 0 37 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.5 0C28.7169 0 37 8.60178 37 19.2117C37 29.8217 28.7169 38.4235 18.5 38.4235C8.28311 38.4235 0 29.8217 0 19.2117C0 8.60178 8.28311 0 18.5 0ZM24.6968 26.3586C24.6953 26.3624 24.1604 27.749 22.7254 27.0988C21.9454 26.7445 17.0903 22.6365 16.0045 21.7732C18.1197 19.7988 20.235 17.8244 22.3488 15.8478L14.4098 21.0833C13.1107 20.6291 11.8109 20.1779 10.5133 19.7207C9.35591 19.3349 9.22361 17.9978 10.5176 17.4888L25.5925 11.3464C25.7371 11.2826 27.4157 10.6197 27.4157 12.1692L24.6968 26.3586ZM23.8958 26.0471L26.559 12.1016C26.5142 11.8952 25.9178 12.164 25.9163 12.1647L10.8053 18.3191C10.3333 18.482 10.3217 18.7118 10.7923 18.8859L14.2941 20.1104L23.718 13.8974C24.0382 13.6947 24.5211 13.5513 24.8009 13.9004C25.0835 14.254 24.8464 14.6886 24.5717 14.9551C24.2999 15.2186 18.9677 20.1974 17.3376 21.7192L23.11 26.3076C23.6168 26.511 23.8401 26.1582 23.8958 26.0471ZM18.5 0.887354C8.75445 0.887354 0.853757 9.09125 0.853757 19.2117C0.853757 29.3322 8.75445 37.5361 18.5 37.5361C28.2456 37.5361 36.1462 29.3322 36.1462 19.2117C36.1462 9.09125 28.2456 0.887354 18.5 0.887354Z" fill="white"/>
                            </svg>
                    </div>
                    <p
                        class="hover:underline hover:text-[#DFB266] hover:font-[600] duration-500">Telegram</>
                    </a>
                </div>
            </div>
        </div>
        {{-- Information --}}
        <div class="relative md:w-96">
            <h1 class="text-[20px] font-[700] text-[#ffffff]">Information</h1>
            <ul class="flex flex-col space-y-3 mt-6 text-[14px] text-white">
                <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:underline">About Us</a></li>
                <li><a href="{{ route('service') }}" class="hover:underline">Professional Services</a></li>
                <li><a href="{{ route('project') }}" class="hover:underline">Project Credentials</a></li>
                <li><a href="{{ route('career') }}" class="hover:underline">Career</a></li>
            </ul>
        </div>
        {{-- Map Location --}}
        <div class="text-[#ffffff] text-[14px]">
            <p class="mt-4">
                At present, Daiku MEP Solution operate with highly skilled and
                experienced in construction and management practices, 
                with the ability to carry out industrial, residential and commercial building projects.
            </p>

            <iframe 
                class="w-full h-[70%] rounded-lg mt-10"
                src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d2328.4546285034908!2d104.8578922908163!3d11.537621757142025!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTHCsDMyJzE0LjYiTiAxMDTCsDUxJzI0LjAiRQ!5e0!3m2!1sen!2skh!4v1765643084561!5m2!1sen!2skh" 
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>


    <p class="relative text-center lg:text-end md:mr-[20px] lg:mr-[70px] xl:mr-[200px] 2xl:mr-[380px] bottom-5 text-[14px] text-[#1C4089]">
        Daiku MEP Solution Co.,Ltd All Right Reserved
    </p>
</section>
