@extends('layouts.index')

@section('content')
 <!-- Hero Section start -->
 <section id="home" class="pt-3">
<div class="container">
    <div class="flex flex-wrap">
        <div class="w-full self-center px-4 lg:w-1/2">
            <h1 class="text-base font-semibold text-primary md:text-xl">Heloo <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl">Tuanmuda</span></h1>
            <h2 class="font-medium text-slate-500 text-lg mb-5 lg:text-2xl">Programmer | <span class="text-dark">Web</span></h2>
            <p class="font-medium text-slate-400 mb-10 leading-relaxed">Belajar portofolio <span class="text-dark font-bold">bukan</span></p>
            <a href="" class="text-base font-semibold text-white bg-primary py-3 px-3 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Hubungi</a>
        </div>
        <div class="w-full self-end px-4 lg:w-1/2">
            <div class="relative mt-10 lg:mt-0 lg:right-0"><img src="/profile3.png" alt="tuan muda" class="max-w-full mx-auto">
                <span class="absolute -bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-125">
                    <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#14b8a6" d="M38.5,-30C53.3,-12.2,70.9,4,68.6,16.3C66.4,28.7,44.2,37.1,25.2,42.4C6.3,47.8,-9.4,49.9,-28.6,45.9C-47.8,41.8,-70.5,31.5,-72,18.4C-73.4,5.2,-53.6,-10.8,-38,-28.8C-22.5,-46.7,-11.2,-66.5,0.3,-66.8C11.9,-67,23.8,-47.7,38.5,-30Z" transform="translate(100 100) scale(1.1)" />
              </svg></span></div>
        </div>
    </div>
</div>
 </section>
 <!-- Hero Section end -->
@endSection