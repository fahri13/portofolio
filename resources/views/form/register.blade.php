@extends('layouts.index')
@section('content')
<!--
    This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-50">
  <body class="h-full">
  ```
-->
<section id="contact" class="pt-36 pb-32">
  <div class="container">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-16">
        <h4 class="font-semibold text-lg text-primary mb-2">Register</h4>
      </div>
      <div class="max-w-xl mx-auto text-center mb-16">
        @if(session()->has('success'))
        
        <h4 class="font-semibold text-lg text-primary mb-2">{{session('success')}}</h4>
        @endif
      </div>
    </div>
  <div class="w-full lg:w-2/3 lg:mx-auto">
    <form action="/auth/register" method="post">
      @csrf
   

        <div class="w-full px4 mb-8">
            <label for="email" class="text-base text-primary font-bold">Email</label>
            <input type="text" name="email" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none rounded-red-500 border-red-500 focus:ring-primary @error('email') focus:ring-red-500 @enderror focus:bg-slate-50 focus:ring-1 focus:border-primary">
            @error('email')
            <h6 class="text-red-500">{{$message}}</h6>
            @enderror
        </div>
        <div class="w-full px4 mb-8">
            <label for="nama" class="text-base text-primary font-bold">Nama</label>
            <input type="text" name="nama" id="nama" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:bg-slate-50 focus:border-primary">
        </div>
        <div class="w-full px4 mb-8">
            <label for="password" class="text-base text-primary font-bold">Password</label>
            <input type="password" name="password" id="password" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:bg-slate-50 focus:border-primary">
        </div>
        <div class="w-full px4 mb-8">
            <label for="password-confirm" class="text-base text-primary font-bold">Konfirmasi Password</label>
            <input type="password" name="password-confirm" id="password-confirm" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:bg-slate-50 focus:border-primary">
        </div>
        <div class="w-full px4 mb-8">
    <button type="submit" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition-duration-500">Daftar</button>
    </div>
    </form>
  </div>
  </div>
</section>

    @endSection