@extends('base')


@section('title','RSS')

@section('body')
    @include('Snippets.Header')

    
            <section class="text-gray-600 body-font">
                
                <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
                    <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero"
                         src="{{ asset('/img/भगवा-झंडा.jpg') }}">
                    <div class="text-center lg:w-2/3 w-full">
                        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"><b>అభిరుచులు</b></h1>
                        <p class="mb-8 leading-relaxed">సంఘం లోని అభిరుచులు క్రింద పేర్కొనబడ్డాయి</p>
                    </div>
                </div>
            </section>

            <section class="text-gray-600 body-font">
            
                <div class="p-4 lg:w-1/2">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                             class="flex-shrink-0 rounded-lg w-48 h-48 object- object-center sm:mb-0 mb-4"
                             src="{{ asset('/img/sharirakgames.jpg') }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">శారీరక్ విభాగ్</h2>
                            <h3 class="text-gray-500 mb-3">సంఘ శారీరిక్ చేయించడం, యోగ చేయించడం, క్రీడల నిర్వహణ</h3>
                           
                        </div>
                    </div>
                </div>
                
                <div class="p-4 lg:w-1/2">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                             class="flex-shrink-0 rounded-lg w-48 h-48 object- object-center sm:mb-0 mb-4"
                             src="{{ asset('/img/bhoudhikvibhag.jpg') }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">బౌద్ధిక్ విభాగ్</h2>
                            <h3 class="text-gray-500 mb-3">ఒక విషయం ఎంచుకొని అధ్యయనం చేయడం, బోధ కథల సేకరణ</h3>
                        </div>
                    </div>
                </div>

                <div class="p-4 lg:w-1/2">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                             class="flex-shrink-0 rounded-lg w-48 h-48 object- object-center sm:mb-0 mb-4"
                             src="{{ asset('/img/vyavastha.jpg') }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">వ్యవస్థ విభాగ్
</h2>
                            <h3 class="text-gray-500 mb-3"> కార్యక్రమాలలో వసతి, భోజనం వంటి ఏర్పాట్లు చూడడం, అకౌంట్ల నిర్వహణ, కార్యాలయ వ్యవస్థలు చూడటం
</h3>
                       </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/2">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                             class="flex-shrink-0 rounded-lg w-48 h-48 object- object-center sm:mb-0 mb-4"
                             src="{{ asset('/img/Seva.jpeg') }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">సేవా విభాగ్</h2>
                            <h3 class="text-gray-500 mb-3">సేవా ప్రకల్ప (project) నిర్వహణ, ప్రకల్పాలకు విరాళాల సేకరణ,  సేవా అవసరాల గుర్తింపుకై సర్వే, అధ్యయనము.</h3>
                           
                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/2">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                             class="flex-shrink-0 rounded-lg w-48 h-48 object- object-center sm:mb-0 mb-4"
                             src="{{ asset('/img/samparka.jpeg') }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">సంపర్క్ విభాగ్</h2>
                            <h3 class="text-gray-500 mb-3">సమాజంలో గుర్తించిన శ్రేణి వారిని కలవడం,పరిచయ సమావేశాల నిర్వహణ
</h3>
                           </div>
                    </div>
                </div>

              <div class="p-4 lg:w-1/2">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                             class="flex-shrink-0 rounded-lg w-48 h-48 object- object-center sm:mb-0 mb-4"
                             src="{{ asset('/img/prachara.jpeg') }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">ప్రచార విభాగ్</h2>
                            <h3 class="text-gray-500 mb-3">వార్తా సేకరణ మరియు లేఖనం, ప్రచార పత్రికలకు చందాదారులను చేర్పించుట, సోషల్ మీడియా యాక్టివిటీ, మూడు భాషలలోకి తర్జుమా (T,E,H), పుస్తక విక్రయం, ఈ బుక్ తయారీ.</h3>
                           </div>
                    </div>
                </div>

                <div class="p-4 lg:w-1/2">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                             class="flex-shrink-0 rounded-lg w-48 h-48 object- object-center sm:mb-0 mb-4"
                             src="{{ asset('/img/bala.jpg') }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">బాల విభాగ్</h2>
                            <h3 class="text-gray-500 mb-3">బాలుర వికాసం కొరకు కార్యక్రమాల నిర్వహణ</h3>
                           </div>
                    </div>
                </div>
                
                
                <div class="p-4 lg:w-1/2">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                             class="flex-shrink-0 rounded-lg w-48 h-48 object- object-center sm:mb-0 mb-4"
                             src="{{ asset('/img/college_students.jpeg') }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">కళాశాల విద్యార్థులు విభాగ్</h2>
                            <h3 class="text-gray-500 mb-3">కళాశాల విద్యార్థుల వికాసానికి కార్యక్రమాల నిర్వహణ</h3>
                              </div>
                    </div>
                </div>

                <div class="p-4 lg:w-1/2">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                             class="flex-shrink-0 rounded-lg w-48 h-48 object- object-center sm:mb-0 mb-4"
                             src="{{ asset('/img/proud.jpeg') }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900"> ప్రౌఢ విభాగ్</h2>
                            <h3 class="text-gray-500 mb-3">ప్రౌఢ శాఖల నిర్వహణ, సంపర్కము
</h3>
                        
                       </div>
                    </div>
                </div>

                <div class="p-4 lg:w-1/2">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                             class="flex-shrink-0 rounded-lg w-48 h-48 object- object-center sm:mb-0 mb-4"
                             src="{{ asset('/img/tharuana.jpg') }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">తరుణ్ విభాగ్</h2>
                            <h3 class="text-gray-500 mb-3">20-40 వయస్సు వారికి కార్యక్రమాల యోజన, సంపర్కము</h3>
                            </div>
                    </div>
                </div>


                <div class="p-4 lg:w-1/2">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                             class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                             src="{{ asset('/img/ghosh.jpeg') }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">ఘోష్ విభాగ్</h2>
                            <h3 class="text-gray-500 mb-3">ఘోష్ వాద్య ప్రశిక్షణ ఆన్లైన్ మరియు ఆఫ్ లైన్ లో</h3>
                           </div>
                    </div>
                </div>

                <div class="p-4 lg:w-1/2">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                             class="flex-shrink-0 rounded-lg w-48 h-48 object- object-center sm:mb-0 mb-4"
                             src="{{ asset('/img/teachers.jpg') }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">ఉపాధ్యాయుల విభాగ్</h2>
                            <h3 class="text-gray-500 mb-3">అధ్యాపకుల పరిచయం, వికాసం కోసం కార్యక్రమాల నిర్వహణ</h3>
                           </div>
                    </div>
                </div>

                <div class="p-4 lg:w-1/2">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                             class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                             src="{{ asset('/img/paryavaran.jpeg') }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">పర్యావరణం విభాగ్</h2>
                            <h3 class="text-gray-500 mb-3">ప్లాస్టిక్ నిషేధ ప్రచారము, జల సంరక్షణ, మొక్కలు నాటడం</h3>
                          </div>
                    </div>
                </div>

                <div class="p-4 lg:w-1/2">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                             class="flex-shrink-0 rounded-lg w-48 h-48 object- object-center sm:mb-0 mb-4"
                             src="{{ asset('/img/family.jpeg') }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">కుటుంబ ప్రబోధన్</h2>
                            <h3 class="text-gray-500 mb-3">కుటుంబ సత్సంగము, కుటుంబాల సమ్మేళనం నిర్వహణ</h3>
                             </div>
                    </div>
                </div>


                <div class="p-4 lg:w-1/2">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                             class="flex-shrink-0 rounded-lg w-48 h-48 object- object-center sm:mb-0 mb-4"
                             src="{{ asset('/img/Dharmajagarana.jpeg') }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">ధర్మ జాగరణ</h2>
                            <h3 class="text-gray-500 mb-3"> ధర్మ ప్రచారము, తద్వారా మతమార్పిడుల నిరోధము</h3>
                          </div>
                    </div>
                </div>

                <div class="p-4 lg:w-1/2">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                             class="flex-shrink-0 rounded-lg w-48 h-48 object- object-center sm:mb-0 mb-4"
                             src="{{ asset('/img/goseva.jpg') }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">గో సేవ</h2>
                            <h3 class="text-gray-500 mb-3">గోపాలన, పోషణ, రక్షణ, ఉత్పత్తుల విక్రయం, గో ఆధారిత వ్యవసాయం పై అవగాహన పెంచడం </h3>
                            </div>
                    </div>
                </div>


                <div class="p-4 lg:w-1/2">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                             class="flex-shrink-0 rounded-lg w-48 h-48 object- object-center sm:mb-0 mb-4"
                             src="{{ asset('/img/gramam.jpg') }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">గ్రామ వికాస్</h2>
                            <h3 class="text-gray-500 mb-3">గ్రామ వికాసానికై వివిధ కార్యక్రమాల నిర్వహణ</h3>
                             </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/2">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                             class="flex-shrink-0 rounded-lg w-48 h-48 object- object-center sm:mb-0 mb-4"
                             src="{{ asset('/img/samajikasamarasatha.jpeg') }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">సామాజిక సమరసత</h2>
                            <h3 class="text-gray-500 mb-3">వివిధ కులాల మధ్య సామరస్యానికి కార్యక్రమాల నిర్వహణ</h3>
                             </div>
                    </div>
                </div>


               


                        
                    </div>
                </div>
            </div>
        </div>
    </section>

      
    <section class="text-gray-600 body-font">
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