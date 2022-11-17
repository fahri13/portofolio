@extends('layouts.index')

@section('content')
  
 <!-- Portofolio section start -->
 <section id="portofolio" class="pt-36 pb-16 bg-slate-100">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">Portofolio</h4>
                <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Project terbaru</h2>
                <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit ipsum eveniet unde suscipit nisi voluptatem nemo ab excepturi fugiat voluptatibus.</p>
            </div>
        </div>
        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <img src="p1.png" width="w-full" alt="landing page">
                </div>
                <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing Page</h3>
                <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolores natus expedita.</p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <img src="p2.png" width="w-full" alt="landing page">
                </div>
                <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing Page</h3>
                <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolores natus expedita.</p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <img src="p3.png" width="w-full" alt="landing page">
                </div>
                <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing Page</h3>
                <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolores natus expedita.</p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <img src="p4.png" width="w-full" alt="landing page">
                </div>
                <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing Page</h3>
                <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolores natus expedita.</p>
            </div>
        </div>
    </div>
 </section>
 <!-- Portofolio section end -->
 <!-- Clients section start -->
 <section id="clients" class="pt-36 pb-32 bg-slate-700">
    <div class="container">
        <div class="w-full px-4">
            <div class="mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">Clients</h4>
                <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Project yang pernah Kerjasama</h2>
                <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit ipsum eveniet unde suscipit nisi voluptatem nemo ab excepturi fugiat voluptatibus.</p>
            </div>
        </div>
        <div class="w-full px-4">
            <div class="flex flex-wrap items-center justify-center">
                <a class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" href="asda">
                    <img src="Gojek_logo_2019.svg" alt="Gojek">
                    {{-- <img src="Google_2015_logo.svg" alt="Google"> --}}
                </a>
                <a class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" href="sadd">
                    <img src="Google_2015_logo.svg" alt="Google">
                </a>
                <a class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" href="adw">
                    {{-- <img src="Google_2015_logo.svg" alt="Google"> --}}
                    <img width="70" src="Shopee_logo.svg" alt="Shopee">
                </a>
                <a class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" href="awd">
                    {{-- <img src="Google_2015_logo.svg" alt="Google"> --}}
                   <img src="Tokopedia.svg" alt="Tokopedia">
                </a>
            </div>
        </div>
    </div>
 </section>
 <!-- Clients section end --> 
@endSection