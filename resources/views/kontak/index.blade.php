@extends('layouts.index')

@section('content')
 
 <!-- Contact section start -->
 <section id="contact" class="pt-36 pb-32">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">Contact</h4>
                <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Hubungi saya</h2>
                <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit ipsum eveniet unde suscipit nisi voluptatem nemo ab excepturi fugiat voluptatibus.</p>
            </div>
        </div>
        <form action="">
            <div class="w-full lg:w-2/3 lg:mx-auto">
            <div class="w-full px-4 mb-8">
                <label for="nama" class="text-base text-primary font-bold">Nama</label>
                <input type="text" id="nama" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">         
            </div>
            <div class="w-full px-4 mb-8">
                <label for="nama" class="text-base text-primary font-bold">Email</label>
                <input type="text" id="nama" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">         
            </div>
            <div class="w-full px-4 mb-8">
                <label for="nama" class="text-base text-primary font-bold">Pesan</label>
                <textarea type="text" id="nama" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"></textarea>         
            </div>
            <div class="w-full px-4">
                <button class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Hubungi Saya</button>
            </div>
            </div>
        </form>
    </div>
 </section>
 <!-- Contact section end -->
  
@endSection