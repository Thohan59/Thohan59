@extends('base')


@section('title','RSS')


@section('body')
    @include('Snippets.Header')
    
    <section class="text-gray-600 body-font ">
        
            <div class="container px-5 py-10 mx-auto">
                
            <div class="flex flex-col text-center w-full mb-20 items-center justify-" >
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-red-500">రాష్ట్రీయ స్వయంసేవక్ సంఘ్  రాజమహేంద్రవరం విభాగ్</h1>
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-blue-gray-500">గోదావరి సంగమం</h1>
               
                <img class="lg:w-5/6 md:w-5/6 w-10/6 mb-10 object-center object-center rounded" alt="hero"
                         src="{{ asset('/img/mohanjibhagawath.webp') }}">
                <p class="lg:w-4/3 mx-auto leading-relaxed text-base text-blue-gray-500">

                వ్యక్తి నిర్మాణం ద్వారా  మాత్రమే జాతి  నిర్మాణం తద్వారా వ్యవస్థ, సామాజిక పరివర్తన వస్తుంది. దాని ద్వారా జాతి నిర్మాణం  సాధ్యం అని బలంగా నమ్మిన సంస్థ <b>రాష్ట్రీయ స్వయంసేవక్ సంఘ్</b> వైభవోపేత భారతీయ సమాజాన్ని నిర్మించడం  కోసం గత 96 సంవత్సరాలుగా పని చేస్తోంది . ఇది సాధించడం కోసం కులాలకు అతీతంగా హిందూ సంఘటనే మూలసూత్రంగా పనిచేస్తోంది. 
 ఈ లక్ష్య సాధనలో భాగంగా ఉభయ గోదావరి జిల్లాల సాంఘీక్  26 డిశంబరు 2021 పాలకొల్లు లో కలదు. మనమన గ్రామాల్లో శాఖలు ఏర్పాటు చేసుకొని శారీరక అంశాలు అభ్యాసం చేసి ఆరోజు జరిగే హిందూ సంఘటనా శక్తిని దర్శిద్దాం.</p><br><b>🚩భారత్ మాతాకీ జై🚩</b></br>
           
            <div class="flex">
                <a href="{{ route('Enroll') }}"
                   class="mx-auto mt-16 text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">
                   Register here (నమోదు కొరకు)
                </a>
            </div>
        </div>
            <div class="p-2 w-full pt-5 mt-8 border-t bg-gray-100 text-center "></div>
            <div class="flex flex-wrap">
                <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                    <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-10 text-red-500">భవిష్యత్తు కార్యక్రమాలు</h2>
                    <p class="leading-relaxed text-base mb-4 text-blue-500">అక్టోబర్ 09 నుండి అక్టోబర్ 15 వరకు ప్రాథమిక శిక్షావర్గ</p>
                    <div class="p-2 w-full pt-5 mt-8 border-t border-gray-200 text-center"></div>
                                  </div>
                <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                    <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-10 text-red-500">సాంఘిక్ వివరాలు</h2>
                    <p class="leading-relaxed text-base mb-4 text-blue-500">
                    తేదీ: 26-12-2021, ఆదివారం<br>
                    సమయం: సాయంత్రం 3 గంటలకు సాంఘీక్ స్థలమునకు చేరుకోవాలి<br>

                    స్థలం: RR రైస్ మిల్ లేఔట్స్ ,
                    పెనుమదం రోడ్ ,
                    పాలకొల్లు.</p>
                    <div class="p-2 w-full pt-5 mt-8 border-t border-gray-200 text-center"></div>
                </div>
               
                <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                    <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-10 text-red-500">సోషల్ మీడియా వివరాలు</h2>
                    <a class="text-gray-500">
        
                    <a href="https://www.facebook.com/rjyrss/"><h2 class="text-blue-500"><svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
             viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
        హైందవ గోదావరి</h2></a>
        <div class="p-2 w-full pt-5 mt-8 border-t border-gray-200 text-center"></div>    
                </div>

                <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
              
                <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-10 text-red-500">లైబ్రరీ</h2>
                <a href="https://vskandhra.org/"><h2 class="text-blue-500">➡️Vskandhra</h2></a>
                <a href="http://vijayavipanchi.org/Vivek150.aspx"><h2 class="text-blue-500">➡️vijayavipanchi</h2></a>
                <a href="https://www.jagritiweekly.com/"><h2 class="text-blue-500">➡️jagritiweekly</h2></a>
                <a href="https://anyflip.com/bookcase/ucaml/"><h2 class="text-blue-500">➡️New books publications</h2></a>
                <div class="p-2 w-full pt-5 mt-8 border-t border-gray-200 text-center"></div>
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
                    <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">స్థాపన</h1>
                   
                </div>
            </div>
            
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-96 overflow-hidden">
                        <img alt="content" class="object-center h-full w-full animation-pulse"
                             src="{{ asset('/img/doctorjee.jpg') }}">
                    </div>
                    <h2 class="text-xl font-medium title-font text-gray-900 mt-5">ప.పూ||డాక్టర్ కేశవరావు బలిరామ్ హెడ్గెవార్</h2>
                    <p class="text-base leading-relaxed mt-2">డాక్టర్ కేశవరావ్ బలీరాం హెడ్గెవార్ రాష్ట్రీయ స్వయం సేవక సంఘాన్ని స్థాపించిన మహాపురుషులు. వీరు క్రీ.శ 1889 వ సంవత్సరం ఉగాది పర్వదినాన జన్మించారు. వీరి తల్లిదండ్రులు రేవతీబాయి, బలిరాంపంత్ అనే పుణ్యదంపతులు. కేశవరావు జన్మజాత దేశభక్తులు. 12 సంవత్సరాల వయస్సులో విక్టోరియా రాణి సింహాసనాన్ని అధిష్ఠించి 60 సంవత్సరాలు పూర్తయిన సందర్భంగా పంచి పెట్టిన మిఠాయిలను విసిరి ఆవల పారేశారు.</p>
                    <a class="text-red-500 inline-flex items-center mt-3" href="{{ route('Doctorji') }}">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-96 overflow-hidden">
                        <img alt="content" class=" object-center h-full w-full"
                             src="{{ asset('img/gurujee.jpg') }}">
                    </div>
                    <h2 class="text-xl font-medium title-font text-gray-900 mt-5">
                    ప.పూ||మాధవరావ్ సదాశివరావ్ గోళ్వాల్కర్</h2>
                    <p class="text-base leading-relaxed mt-2">శ్రీ గురూజీ (మాధవ సదాశివ గోళ్వల్కర్‌) రాష్ట్రీయ స్వయంసేవక సంఘ్‌ సరసంఘచాలకులు.
                         భారతదేశ ఐకమత్యం, అఖండతను సంరక్షించటానికి; హిందూధర్మరక్షణకు, హిందూ సమాజ ఏకాత్మతకు,
                          సమరసతా నిర్మాణానికి తన సంపూర్ణ జీవితాన్ని సమర్పించినవారు. భారతీయ సాంస్కృతిక జీవనానికి వ్యతిరేకమైన 
                          విదేశీ సిద్ధాంతాలు, జాతీయ భావనలు వ్యతిరేకిస్తూ,
</p>
                    <a class="text-red-500 inline-flex items-center mt-3" href="{{ route('Guruji') }}">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-96 overflow-hidden">
                        <img alt="content" class=" object-center h-full w-full"
                             src="{{ asset('img/rss-bhagwat-pti.jpg') }}">
                    </div>
                    <h2 class="text-xl font-medium title-font text-gray-900 mt-5">ప.పూ||మోహన్ మధుకర్ భగవత్ జీ</h2>
                    <p class="text-base leading-relaxed mt-2">1950 సెప్టెంబర్ 11న పరమపూజ్యనీయ సర్ సంఘచాలాక్ శ్రీమోహన్ భగవత్ జీ నాగపూర్ లో జన్మించారు. అకోలాలోని పంజాబ్ రావు వ్యవసాయ విద్యాపీఠం నుండి పశువైద్య శాస్త్రంలో బి.వి.యస్సీ. పట్టాను పొందినారు. ఆ తరువాత పశువైద్య శాస్త్రంలో పోస్టుగ్రాడ్యుయేషన్ (యమ్.వి.యస్.శి.)లో చేరి మధ్యలో వదిలి పెట్టి ఎమర్జెన్సీ సమయంలో ప్రచారక్ అయ్యారు.
</p>
                    <a class="text-red-500 inline-flex items-center mt-3" href="{{ route('Mohanji') }}">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font">
        <div class="container px-2 py-15 mx-auto">
            <div class="flex flex-col">
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    <div class="w-24 h-full bg-red-500"></div>
                </div>
                <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                    <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0 ">భవ్య స్వరూపం</h1></div>
                    <div class="bg-gray-200"><video controls class="h-1/4 w-3/4 mx-auto">
                        <source src="{{ asset('december26video.mp4') }}">
                    </video>
                             </div>
            </div>

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                        <div class="w-24 h-full bg-red-500"></div>
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                    <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">ఘోష్</h1></div>
                    <div class="bg-gray-200"><video controls class="h-1/4 w-3/4 mx-auto">
                        <source src="{{ asset('ghosh2021.mp4') }}">
                    </video>
                             </div>

  </div>
  <div class="container px-5 py-24 mx-auto flex flex-wrap">
    <div class="flex w-full mb-20 flex-wrap">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-red-500 lg:w-1/3 lg:mb-0 mb-4">RSS లో ఘోష్ వాయిద్యాలు</h1>
     
    </div>
    
            
                
            
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-96 overflow-hidden">
                        <img alt="content" class="object-center h-full w-full"
                             src="{{ asset('/img/shank.jpg') }}">
                    </div>
                    <h2 class="text-xl font-medium title-font text-red-500 mt-5">శంఖ</h2>
                    
                                    </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-96 overflow-hidden">
                        <img alt="content" class=" object-center h-full w-full"
                             src="{{ asset('img/flute.jpg') }}">
                    </div>
                    <h2 class="text-xl font-medium title-font text-red-500 mt-5">వంశి</h2>
                   
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-96 overflow-hidden">
                        <img alt="content" class=" object-center h-full w-full"
                             src="{{ asset('img/Anak2021.jpeg') }}">
                    </div>
                    <h2 class="text-xl font-medium title-font text-red-500 mt-5">ఆనక్</h2>
                                    </div>
            </div>
        </div>


          </section>
        <section class="text-gray-600 body-font">
        <div class="container px-2 py-15 mx-auto">
            <div class="flex flex-col">
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    <div class="w-24 h-full bg-red-500"></div>
                </div>
                <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                    <h1 class="sm:w-5/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">వ్యాయామ్ యోగ్</h1></div>
                    <div class="flex flex-col text-center w-full mb-20 items-center justify-" >
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-red-500">సర్ సంఘచాలాక్ జీ సాంఘిక్ లో వ్యాయామ్ యోగ్ ప్రదర్సన కొరకు అభ్యాసం చేసి రావాలి</h1></div>
                    
                <div class="bg-gray-200"><video controls class="h-1/4 w-3/4 mx-auto">
                        <source src="{{ asset('vyayama_yog.mp4') }}">
                    </video>
                             </div>
            </div>

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                        <div class="w-24 h-full bg-red-500"></div>
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                        <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
సాంఘిక్ స్థలం</h1>
                                            
                    </div>
        
        <section class="text-gray-600 body-font relative">
  <div class="absolute inset-0 bg-gray-300">
    <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3824.6914223538342!2d81.73574231486472!3d16.541668988590512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0!2zMTbCsDMyJzMwLjAiTiA4McKwNDQnMTYuNiJF!5e0!3m2!1sen!2sin!4v1632814519591!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
