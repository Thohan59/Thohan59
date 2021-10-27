<header class="text-red-500 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="{{ route('Home') }}" class="flex title-font font-medium items-center text-red-500 mb-4 md:mb-0 ">
            <img src="{{ asset('img/logorss1.png') }}" class="w-10">
            
            <span class="ml-3 font-mono"><b>RSS</b></span>
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900"  href="{{ route('Home') }} "><b>Home</b></a>
      <a class="mr-5 hover:text-gray-900" href="{{ route('About') }}"><b>About Us</b></a>
      <a class="mr-5 hover:text-gray-900"href="{{ route('Contact') }}"><b>Contact</b></a>
      <a class="mr-5 hover:text-gray-900" href="{{ route('Enroll') }}" ><b>Event Register</b></a>            
     
     <!-- component -->
<div class="group inline-block">
  <button
    class="outline-none focus:outline-none border px-3 py-1 bg-white rounded-sm flex items-center min-w-32"
  >
    <span class="pr-1 font-semibold flex-1"><b>Gatapramukh / Gatanayak</b></span>
    <span>
      <svg
        class="fill-current h-4 w-4 transform group-hover:-rotate-180
        transition duration-150 ease-in-out"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 20 20"
      >
        <path
          d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
        />
      </svg>
    </span>
  </button>
  <ul
    class="bg-red-500 border rounded-sm transform scale-0 group-hover:scale-100 absolute 
  transition duration-150 ease-in-out origin-top min-w-32"
  >
    <li class="rounded-sm px-3 py-1 hover:bg-gray-100 text-white hover:bg-indigo-600"><a href="{{ route('Gnayaklogin') }}">Login</a></li>
    <li class="rounded-sm px-3 py-1 hover:bg-gray-100 text-white hover:bg-indigo-600"><a href="{{ route('Gnayaklist') }}">Add Swayamsevak list</a></li>
    <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
     
              </svg>
            </span>
          </button>
         
</div>

<style>
  /* since nested groupes are not supported we have to use 
     regular css for the nested dropdowns 
  */
  li>ul                 { transform: translatex(100%) scale(0) }
  li:hover>ul           { transform: translatex(101%) scale(1) }
  li > button svg       { transform: rotate(-90deg) }
  li:hover > button svg { transform: rotate(-270deg) }

  /* Below styles fake what can be achieved with the tailwind config
     you need to add the group-hover variant to scale and define your custom
     min width style.
  	 See https://codesandbox.io/s/tailwindcss-multilevel-dropdown-y91j7?file=/index.html
  	 for implementation with config file
  */
  .group:hover .group-hover\:scale-100 { transform: scale(1) }
  .group:hover .group-hover\:-rotate-180 { transform: rotate(180deg) }
  .scale-0 { transform: scale(0) }
  .min-w-32 { min-width: 8rem }
</style>
     
    <div class="p-2 w-full pt-2 mt-8 border-t bg-gray-500 text-center"></div>
    </div>
    </nav>
    
</header>

