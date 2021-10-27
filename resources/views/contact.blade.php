@extends('base')


@section('title','RSS')


@section('body')
    @include('Snippets.Header')
   
    <section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col ">
    <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="{{ asset('img/palakollu.jpg') }}">
    <div class="h-full bg-gray-100 bg-opacity-100 px-5 pt-5 pb-10 rounded-lg overflow-hidden text-center relative">
     <h1 class="text-red-500"><b>కాంటాక్ట్ నంబర్</b></h1>
    <a class="text-blue-500" href="tel:8333030386">8333030386</a>
    <div class="p-2 w-full pt-5 mt-8 border-t border-gray-200 text-center"></div>
    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3 text-red-500">రాజమహేంద్రవరం డివిజన్ కాంటాక్ట్ నంబర్</h2>
            <a class="text-blue-500" href="tel:9963433803">99634 33803</a>        
            <div class="p-2 w-full pt-5 mt-8 border-t border-gray-200 text-center"></div>
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3 text-red-500">కాకినాడ డివిజన్ కాంటాక్ట్ నంబర్</h2>
            <a class="text-blue-500" href="tel:9030236465">9030236465</a>
            <div class="p-2 w-full pt-5 mt-8 border-t border-gray-200 text-center"></div>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3 text-red-500">అమలాపురం డివిజన్ కాంటాక్ట్ నంబర్</h2>
            <a class="text-blue-500" href="tel:9492094928">9492094928</a>
            <div class="p-2 w-full pt-5 mt-8 border-t border-gray-200 text-center"></div>
            
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3 text-red-500">కాంటాక్ట్ ఇ - మెయిల్</h2>
            <a class="text-blue-500" href="mailto:rss.rjy@gmail.com">rss.rjy@gmail.com</a></div>

         
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                        <div class="w-24 h-full bg-red-500"></div>
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                        <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">సాంఘిక్ స్థలం</h1>
                                            
                    </div>
<section class="text-gray-600 body-font relative">
  <div class="absolute inset-0 bg-gray-300">
    <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3824.6914064929574!2d81.73574291486469!3d16.541669788590593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTbCsDMyJzMwLjAiTiA4McKwNDQnMTYuNiJF!5e0!3m2!1sen!2sin!4v1632376696505!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
  <div class="container px-5 py-24 mx-auto flex"></div>
  </section>
  <footer class="text-gray-600 body-font">
            <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-red-500">
                    <img src="{{ asset('img/logorss1.png') }}" class="w-10">
                    <span class="ml-3 text-xl">RSS</span>
                </a>
                <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">
                    Copyright by IT-wing Rss — @rjy
                    
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a href="https://www.facebook.com/rjyrss" class="text-gray-600 ml-1" rel="noopener noreferrer"
                       target="_blank">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
             viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
             viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
             class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"
             class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none"
                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
            </div>
        </footer>

@endsection