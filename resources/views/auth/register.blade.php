@extends('layouts.index')
@section('content')

<section id="masuk" class="pt-36 pb-32">
  <div class="conntainer">
    
    <div class="w-full px-4">
      
      <div class="max-w-xl mx-auto text-center mb-16">
        <h2 class="text-primary text-3xl mb-4 sm:text-4xl lg:text-5xl ">
          Masuk
        </h2>
      </div>
      <form action="">
        <form action="">
          <div class="w-full lg:w-2/3 lg:mx-auto">
          <div class="w-full px-4 mb-8">
            <label for="nama" class="text-base textprimary font-bold">Username</label>
            <input type="text" id="nama" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
          </div>
          <div class="w-full px-4 mb-8">
            <label for="nama" class="text-base textprimary font-bold">Password</label>
            <input type="text" id="nama" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
          </div>
          <div class="w-full px-4">
            <button class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Masuk</button>
          </div>
        
          </div>
        </form>
      </form>

    </div>

  </div>
</section>

    @endSection