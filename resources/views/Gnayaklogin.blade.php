@extends('base')


@section('title','RSS')

@section('body')
@include('Snippets.Header')

<div class="container px-5 py-10 mx-auto">
<section class="text-gray-600 body-font relative" id="registration">
<div class="flex flex-col text-center w-full mb-20 items-center justify-" >
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-red-500">రాష్ట్రీయ స్వయంసేవక్ సంఘ్  రాజమహేంద్రవరం విభాగ్</h1>
                <h1 class="sm:text-4xl text-2xl font-medium title-font mb-4 text-indigo-600">గోదావరి సంగమం</h1>
    
    <section class="text-gray-600 body-font relative" id="login">
        
            <div class="p-2 w-full pt-0 mt-5 border-t border-gray-200 text-center"></div>
            <div class="container mx-auto flex px-20 py-24 md:flex-row flex-col items-center">
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                    <img class="object-cover object-center rounded" alt="hero" src="{{ asset('img/Mohan-Bhagwat.jpg') }}">
                </div>
                <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                    <h2 class="text-red-900 text-lg mb-1 font-medium title-font grid justify-items-center font-bold">
                    GATAPRAMUKH / GATANAYAK LOGIN</h2>
                   
                    <form @submit.prevent="login">
                        <div class="relative mb-4">
                            <label for="user_name" class="leading-7 text-sm text-gray-600">NAME</label>
                            <input type="text" id="user_name" name="user_name" v-model="user_name" ref="user_name"
                                   class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="relative mb-4">
                            <label for="password" class="leading-7 text-sm text-gray-600">PASSWORD</label>
                            <input type="password" id="password" name="password" v-model="password" ref="password"
                                   class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div>
                        <div>
                            <button id="signin" type="submit"
                                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-red-900 hover:bg-lightblue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-50"
                                    aria-required="true">
                                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <!-- Heroicon name: lock-closed -->
            <svg class="h-5 w-5 text-blue-50 group-hover:text-blue-400" xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd"
                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                    clip-rule="evenodd"/>
            </svg>
          </span>
                                Login
                            </button>
                        </div>
                    </form>
                    <p class="mt-2 text-center text-sm text-gray-600">
                        Don't have an account?
                        <a href="{{ route('Gnayak') }}" class="font-medium text-blue-600 hover:text-blue-500">
                            Create new account
                        </a>
                    </p>
                    <br>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember_me" type="checkbox"
                                   class="h-4 w-4 text-indigo-600 focus:ring-blue-500 border-gray-700 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                                Remember me
                            </label>
                        </div>
                        <div class="text-sm">
                            <a href="boxing.html" class="font-medium text-blue-600 hover:text-blue-500">
                                Forgot your password?
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection


@section('scripts')
    <script src="{{ mix('js/auth/login.js') }}"></script>
@endsection
