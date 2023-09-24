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
    <div class="w-full px4">
      <div class="max-w-xl mx-auto text-center mb-16">
        <h4 class="font-semibold text-lg text-primary mb-2">Login</h4>
      </div>
    </div>
  </div>
</section>

    @endSection