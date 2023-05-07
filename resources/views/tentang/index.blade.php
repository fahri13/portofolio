@extends('layouts.index')

@section('content')

 <!-- About section start -->
 <section id="about" class="pt-36 pb-32">
    <div class="container">

        <div class="flex flex-wrap">
            
            <div class="w-full px-4 mb-10 lg:w-1/2">
               <h4 class="font-bold uppercase mb-3 text-dark text-xl">Tentang</h4>
               <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl"><span class="text-primary">Cerita </span>Singkat</h2>
               <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">Hai, <a href="">saya</a> adalah seeorang programmer lulusan<a href="" class="font-bold text-dark"> Universitas Muhammadiyah Prof DR. Hamka</a> program studi <a href="" class="text-dark">Teknik Informatika</a>. <a href="" class="text-primary">Saya</a> memiliki pengalaman dalam pembuatan sebuah website selama 1 tahun.</p> 
            </div>

            <div class="w-full px-4 lg:w-1/2">
                <div class="relative mt-10 lg:mt-0 lg:right-40">
                    <img src="/assets/img/profile3a.png" alt="tuan muda" class="max-w-full mx-auto">
                    <span class="absolute -bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-1">
                    <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#60A5FA" d="M25.4,-41.7C30.7,-40.9,31.3,-29.7,30.3,-21C29.3,-12.3,26.7,-6.1,35.5,5C44.2,16.2,64.3,32.5,63.2,37.6C62.2,42.8,40.1,37,26,35.8C12,34.6,6,38.1,1.2,36C-3.5,33.8,-7,26,-13.9,23.1C-20.8,20.1,-31.1,22,-36.7,19C-42.3,16,-43.1,8,-40.1,1.8C-37,-4.4,-29.9,-8.8,-29.7,-21.1C-29.4,-33.3,-35.9,-53.4,-32.1,-55.1C-28.3,-56.8,-14.2,-40,-2.1,-36.4C10,-32.9,20.1,-42.5,25.4,-41.7Z" transform="translate(100 100)" />
                    </svg>
            </span>
            </div>
                </div>

            </div>


            
            <div class="w-full px-4">
                <h2 class="font-bold text-dark text-3xl lg:text-4xl mb-5 text-center mt-20">Bidang <span class="text-primary">Kemampuan</span></h2>
                {{-- <p>Gambar logo lingkaran 1 sistem operasiLingkaran 2 laravel codeigniter php html javascript bootstrap tailwindcss</p> --}}
            </div>

            <div class="w-full px-4">
                <div class="flex flex-wrap items-center justify-center">
                    <a class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" href="asda">
                        <img class="70" src="/assets/img/html.svg" alt="HTML">
                    </a>
                    <a class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" href="sadd">
                        <img class="70" src="/assets/img/php.svg" alt="PHP">
                    </a>
                    <a class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" href="adw">
                        {{-- <img src="Google_2015_logo.svg" alt="Google"> --}}
                        <img class="70" src="/assets/img/javascript.svg" alt="JavaScript">
                    </a>
                    <a class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" href="awd">
                        {{-- <img src="Google_2015_logo.svg" alt="Google"> --}}
                        <img class="70" src="/assets/img/codeigniter.svg" alt="CodeIgniter">
                    </a>
                    
                    <a class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" href="awd">
                        {{-- <img src="Google_2015_logo.svg" alt="Google"> --}}
                        <img class="70" src="/assets/img/laravel.svg" alt="Laravel">
                    </a>
                    <a class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" href="awd">
                        {{-- <img src="Google_2015_logo.svg" alt="Google"> --}}
                        <img class="70" src="/assets/img/bootstrap.svg" alt="Bootstrap">
                    </a>

                    <a class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" href="awd">
                        {{-- <img src="Google_2015_logo.svg" alt="Google"> --}}
                        <img class="70" src="/assets/img/tailwindcss.svg" alt="TailwindCSS">
                    </a>
                </div>
            </div>

    </div>
 </section>
 <!-- About section end -->
   
@endSection