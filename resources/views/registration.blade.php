@extends('base')


@section('title','RSS')

@section('body')
@include('Snippets.Header')

<div class="container px-5 py-10 mx-auto">
<section class="text-gray-600 body-font relative" id="registration">
<div class="flex flex-col text-center w-full mb-20 items-center justify-" >
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-red-500">రాష్ట్రీయ స్వయంసేవక్ సంఘ్  రాజమహేంద్రవరం విభాగ్</h1>
                <h1 class="sm:text-4xl text-2xl font-medium title-font mb-4 text-indigo-600">గోదావరి సంగమం</h1>
               
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    
        
    </div>

    <div class="container px-5 pt-10 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-red-900">SWAYAMSEVAK REGISTRATION </h1><h4 class="text-red-900">(స్వయంసేవక్ సమాచారం)</h4>
        </div>
        <section v-if="!registered">
            <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                <span class="flex justyfy-center block rounded-full w-6 h-6 mr-3 border-blue-500 text-blue-500"></span>
                <span class="font-bold text-gray-700">PERSONAL INFORMATION (వ్యక్తిగత సమాచారం)</span>
            </div>


            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <form @submit.prevent="enroll">
                    <div class="grid grid-cols-1 md:grid-cols-2 -m-2">
                        <div class="mx-2">
                            <label for="name" class="leading-7 text-sm text-gray-600">Full Name (పూర్తి పేరు)</label>
                            <input type="text" id="name" name="name" v-model="name" ref="name" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mx-2">
                            <label for="age" class="leading-7 text-sm text-gray-600">Age (వయస్సు)</label>
                            <input type="number" id="age" name="age" v-model="age" ref="age" @blur="checkAge" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mx-2">
                            <label for="phone" class="leading-7 text-sm text-gray-600">Phone Number(ఫోన్ నంబర్)</label>
                            <input type="tel" id="phone" name="phone" v-model="phone" ref="phone" minlength="10" maxlength="10" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mx-2">
                            <label for="email" class="leading-7 text-sm text-gray-600">E-Mail(ఇ-మెయిల్)</label>
                            <input type="email" id="email" name="email" v-model="email" ref="email" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mx-2">
                            <label for="profession" class="leading-7 text-sm text-gray-600">Profession(వృత్తి/చదువు)</label>
                            <input type="text" id="profession" name="profession" v-model="profession" ref="profession" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center col-span-full">

                            <span class="block rounded-full w-6 h-6 mr-3 border-blue-500 text-blue-500"></span>
                            <span class="font-bold text-gray-700">UNIFORM INFORMATION (గణవేష్ సమాచారం)</span>

                            <h2 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-red-900 ">Do you have
                                Uniform? </h2><h4 class="text-red-900"><b>(మీకు గణవేష్ ఉందా?)</b> </h4>

                            <div>
                                <div class="inline mr-3">
                                    <label>Yes(ఉంది)
                                        <input type="radio" name="uniform_status" v-model="uniform_status" ref="uniform_status" value="1">
                                    </label>
                                </div>
                                <div class="inline">
                                    <label>No(లేదు)
                                        <input type="radio" name="uniform_status" v-model="uniform_status" ref="uniform_status" value="0">
                                    </label>
                                </div>
                            </div>

                            <div v-if="!uniform_bool_status">
                                <section class="text-gray-600 body-font overflow-hidden">
                                    <div class="container px-5 pt-24 mx-auto">
                                        <div class="lg:w-4/5 mx-auto flex flex-wrap">
                                            <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset('img/pant.jpeg') }}">
                                            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                                                <h2 class="text-sm title-font text-gray-500 tracking-widest">Sangh
                                                    Ganavesh (సంఘ గణవేష్)</h2>
                                                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">
                                                    Pant(ఫ్యాంట్)</h1>
                                                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                                                    <div class="flex ml-6 items-center">
                                                        <label for="pant_size" class="mr-3">Size(సైజ్)</label>
                                                        <div class="relative">
                                                            <select class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10" name="pant_size" v-model="pant_size" id="pant_size" ref="pant_size">
                                                                <option value="">నంబర్</option>
                                                                <option value="28">28</option>
                                                                <option value="30">30</option>
                                                                <option value="32">32</option>
                                                                <option value="34">34</option>
                                                                <option value="36">36</option>
                                                                <option value="38">38</option>
                                                                <option value="40">40</option>
                                                                <option value="42">42</option>
                                                                <option value="44">44</option>
                                                                <option value="46">46</option>
                                                                <option value="48">48</option>
                                                            </select>
                                                            <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                                                    <path d="M6 9l6 6 6-6"></path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="text-gray-600 body-font overflow-hidden">
                                    <div class="container px-5 pt-24 mx-auto">
                                        <div class="lg:w-4/5 mx-auto flex flex-wrap">
                                            <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset('img/shirt.jpeg') }}">
                                            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                                                <h2 class="text-sm title-font text-gray-500 tracking-widest">Sangh
                                                    Ganavesh(సంఘ గణవేష్)</h2>
                                                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">
                                                    Shirt(షర్ట్)</h1>
                                                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                                                    <div class="flex ml-6 items-center">
                                                        <label for="shirt_size" class="mr-3">Size(సైజ్)</label>
                                                        <div class="relative">
                                                            <select class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10" name="shirt_size" v-model="shirt_size" ref="shirt_size" id="shirt_size">
                                                                <option value="">నంబర్</option>
                                                                <option value="38">38</option>
                                                                <option value="40">40</option>
                                                                <option value="42">42</option>
                                                                <option value="44">44</option>
                                                                <option value="46">46</option>
                                                                <option value="48">48</option>
                                                            </select>
                                                            <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                                                    <path d="M6 9l6 6 6-6"></path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="text-gray-600 body-font overflow-hidden">
                                    <div class="container px-5 pt-24 mx-auto">
                                        <div class="lg:w-4/5 mx-auto flex flex-wrap">
                                            <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset('img/cap.jpeg') }}">
                                            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                                                <h2 class="text-sm title-font text-gray-500 tracking-widest">Sangh
                                                    Ganavesh(సంఘ గణవేష్)</h2>
                                                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">
                                                    Cap(క్యాప్)</h1>
                                                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">

                                                    <div class="flex ml-6 items-center">
                                                        <label for="cap" class="mr-3">Required(కావాలా?)</label>
                                                        <div class="relative">
                                                            <select class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10" name="cap" v-model="cap" ref="cap" id="cap">
                                                                <option value="1">Yes(కావాలి)</option>
                                                                <option value="0">No(వద్దు)</option>
                                                            </select>
                                                            <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                                                    <path d="M6 9l6 6 6-6"></path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                                                <path d="M6 9l6 6 6-6"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </section>
                                <section class="text-gray-600 body-font overflow-hidden">
                                    <div class="container px-5 pt-24 mx-auto">
                                        <div class="lg:w-4/5 mx-auto flex flex-wrap">
                                            <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-center rounded" src="{{ asset('img/belt.jpeg') }}">
                                            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                                                <h2 class="text-sm title-font text-gray-500 tracking-widest">Sangh
                                                    Ganavesh(సంఘ గణవేష్)</h2>
                                                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">
                                                    Belt(బెల్ట్)</h1>
                                                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">

                                                    <div class="flex ml-6 items-center">
                                                        <label for="belt" class="mr-3">Required(కావాలా?)</label>
                                                        <div class="relative">
                                                            <select class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10" name="belt" v-model="belt" ref="belt" id="belt">
                                                                <option value="1">Yes(కావాలి)</option>
                                                                <option value="0">No(వద్దు)</option>
                                                            </select>
                                                            <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                                                    <path d="M6 9l6 6 6-6"></path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                                                <path d="M6 9l6 6 6-6"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>

                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 -m-2">
                        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center col-span-full">

                            <span class="block rounded-full w-6 h-6 mr-3 border-blue-500 text-blue-500"></span>
                            <span class="font-bold text-gray-700">ADDRESS INFORMATION (
చిరునామా సమాచారం)</span>
                        </div>

                        <div class="mx-2">
                            <label for="state" class="leading-7 text-sm text-gray-600">State(ప్రాంతం)</label>

                            <select id="state" name="state" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" @change="getVibhags" v-model="state" ref="state">
                                <option value=""> -- Select State --</option>
                                <option v-for="state in states" :value="state.id" v-text="state.Name"></option>
                            </select>
                        </div>
                        <div class="mx-2">
                            <label for="vibhag" class="leading-7 text-sm text-gray-600">Vibhag(విభాగ్)</label>
                            <select id="vibhag" name="vibhag" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" @change="getZillas" v-model="vibhag" ref="vibhag">
                                <option value=""> -- Select Vibhag --</option>
                                <option v-for="vibhag in vibhags" :value="vibhag.id" v-text="vibhag.Name"></option>
                            </select>
                        </div>
                        <div class="mx-2">
                            <label for="zilla" class="leading-7 text-sm text-gray-600">Zilla(జిల్లా)</label>
                            <select id="zilla" name="zilla" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" @change="getCities" v-model="zilla" ref="zilla">
                                <option value=""> -- Select Zilla --</option>
                                <option v-for="zilla in zillas" :value="zilla.id" v-text="zilla.Name"></option>
                            </select>
                        </div>
                        <div class="mx-2">
                            <label for="city" class="leading-7 text-sm text-gray-600">Khanda/City(ఖండ/నగర)</label>
                            <select id="city" name="city" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" @change="getRevenueMandal" v-model="city" ref="city">
                                <option value=""> -- Select Khanda / City --</option>
                                <option v-for="city in cities" :value="city.id" v-text="city.Name"></option>
                            </select>
                        </div>
                        <div class="mx-2">
                            <label for="revenue_mandal" class="leading-7 text-sm text-gray-600">Revenue
                                Mandal(రెవెన్యూ మండలం)</label>
                            <select type="text" id="revenue_mandal" name="revenue_mandal" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" @change="getMandals" v-model="revenue_mandal" ref="revenue_mandal">
                                <option value=""> -- Select Revenue Mandal --</option>
                                <option v-for="revenue_mandal in revenue_mandals" :value="revenue_mandal.id" v-text="revenue_mandal.Name"></option>
                            </select>
                        </div>
                        <div class="mx-2">
                            <label for="manadal" class="leading-7 text-sm text-gray-600">Bhagh/Sangha
                                Mandal(భాగ్/సంఘ మండలం)</label>
                            <select type="text" id="manadal" name="mandal" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" @change="getPanchayathis" v-model="mandal" ref="mandal">
                                <option value=""> -- Select Mandal --</option>
                                <option v-for="mandal in mandals" :value="mandal.id" v-text="mandal.Name"></option>
                            </select>
                        </div>
                        <div class="mx-2" v-if="panchayathis.length > 0">
                            <label for="panchayathi" class="leading-7 text-sm text-gray-600">Basti/
                                Panchayathi(బస్తీ/పంచాయితీ)</label>
                            <select type="text" id="panchayathi" name="panchayathi" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" v-model="panchayathi" ref="panchayathi">
                                <option value=""> -- Select Basti / Panchayathi --</option>
                                <option v-for="panchayathi in panchayathis" :value="panchayathi.id" v-text="panchayathi.Name"></option>
                            </select>
                        </div>

                        <div class="col-span-full m-2">
                            <label for="address" class="leading-7 text-sm text-gray-600">Full Address(పూర్తి చిరునామా)</label>
                            <textarea id="address" name="address" v-model="address" ref="address" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"></textarea>
                        </div>
                        <div class="p-5 col-span-full w-full">
                            <input type="submit" class="flex mx-auto text-white bg-red-900 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" value="REGISTER HERE">
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section class="text-center" v-if="registered">
            <div class="text-red-500">
                <h3 class="text-2xl font-mono">You are successfully Registered</h3>
                <h1 class="text-6xl">Get Ready for Sanghik</h1>
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




@section('scripts')
<script src="{{ mix('js/registration.js') }}"></script>
@endsection