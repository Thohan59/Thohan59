@extends('base')


@section('title','RSS')

@section('body')
    @include('Snippets.Header')
    
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
            <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero"
                 src="{{ asset('img/mohan_ji.jpeg') }}">
            <div class="text-center lg:w-5/3 w-full">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">మోహన్ భగవత్ జీ</h1>
                <p class="mb-8 leading-relaxed">1950 సెప్టెంబర్ 11న పరమపూజ్యనీయ సర్ సంఘచాలాక్  శ్రీమోహన్ భగవత్ జీ నాగపూర్ లో జన్మించారు.   అకోలాలోని పంజాబ్ రావు వ్యవసాయ విద్యా పీఠం నుండి పశువైద్య  శాస్త్రంలో బి.వి.యస్సీ. పట్టాను పొందినారు.
                   ఆ తరువాత పశువైద్య  శాస్త్రంలో పోస్టుగ్రాడ్యుయేషన్ (యమ్.వి.యస్.శి.)లో చేరి మధ్యలో వదిలి పెట్టి ఎమర్జెన్సీ సమయంలో ప్రచారక్ అయ్యారు. 1977లో అకోలాలో ప్రచారక్, 1981లో నాగపూర్ విదర్భ  ప్రాంతప్రచారక్ 1986లో అఖిల బారతీయ సహశారీరాక్ ప్రముఖ్, తదుపరి అఖిల భారతీయ శారీరాక్ ప్రముఖ్ గా, ఓకే సంవత్సరం అఖిల భారతీయ ప్రచారక్ ప్రముఖ్ గా భాద్యతలు నిర్వహించారు. 2000 సంవత్సరంలో వారు సర్ కార్య వాహ భాద్యతకి ఎన్నికఅయ్యారు.2009లో పరమపూజ్యనీయ సర్ సంఘచాలాక్ గా నియుక్తులయ్యారు. ప్రస్తుతం వారు
 పరమపూజ్యనీయ సర్ సంఘచాలాక్ గా కొనసాగుతున్నారు.</p>

            </div>
            <a class="flex mx-auto mt-16 text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" href="{{ route('Home') }}">Back</a>
        </div>
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