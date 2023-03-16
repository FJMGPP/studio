<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        {{-- <html lang="{{ str_replace('_', '-', app()->setLocale('en')) }}"> <html lang="{{ str_replace('_', '-', app()->setLocale('es')) }}"> --}}

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!--Esto lo agregue yo pq Arana lo tenia y creo que es necesario para que vea el css-->
        <link rel="stylesheet" href="{{asset('css\app.css')}}">
    
        <meta name="author" content="Francisco Javier Montes Gómez">

        <title>studio</title>
        <meta name="description" content="CHSK is a creative consultancy that works with entrepreneurs and SME leaders like you to create and take advantage of your business opportunities, based in Santiago de Compostela, Spain. We work globally, online or onsite.based in Santiago de Compostela, Spain.">
        
        <link rel="icon" type="image/png" href="{{asset('img/my-icon.png')}}">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- twitter -->
        <!-- <meta name="twitter:title" content="CHSK is a creative consultancy that works with entrepreneurs and SME leaders like you to create and take advantage of your business opportunities, based in Santiago de Compostela, Spain. We work globally, online or onsite.based in Santiago de Compostela, Spain."> -->
        
        <!-- facebook -->
        <!-- <meta property="og:image" content="https://developer.mozilla.org/static/img/opengraph-logo.png">
        <meta property="og:title" content="Francisco Javier Montes Gómez">
        <meta property="og:description" content="Curriculum vitae resumido de Francisco Javier Montes Gómez"> -->

        <!-- Styles -->
                  
        @vite('resources\css\app.css')
         
        @livewireStyles

    </head>

    <body>

        <!---------------------------------------
        | BODY WRAPPER - PARALLAX
        ---------------------------------------->    

        <div class="container h-screen overflow-y-auto overflow-x-hidden select-none"> 

            <!---------------------------------------
            | HEADER HOLDER UNIIQUE
            ---------------------------------------->

            <header class="container flex flex-row justify-between items-center bg-tranparent inset-0  z-50" id="wellcome-header">
                
                <!--------------------------
                | HEADER PACK 1 LOGO
                --------------------------->

                <div class="absolute mt-20 ml-4 lg:mt-20 lg:ml-8 w-auto h-auto flex basis-auto object-cover object-center">
        
                    <a href="{{asset('welcome')}}" target="_self" class="ease-in-out duration-300 hover:scale-110 focus:scale-110">
                        <img src="{{asset('img/fjmg-logotype.png')}}" alt="fjmg logotype" loading="lazy" class="w-10 h-auto"/>    
                    </a>

                </div>

            </header>

            <!----------------------------------------
            | INTRO HOLDER SLOGAN
            ----------------------------------------->

            <section class="container flex h-auto w-screen items-center bg-crayola-cadet-blue"  id="wellcome-intro">

                <!-------------
                | INTRO QUEEEEEEEEEEEEEEE
                --------------->

                <div class="flex flex-col h-auto w-screen p-20 gap-y-20"> 

                    <!---------------
                    | INTRO PACK 1
                    -----------------> 

                    <div class="flex flex-col lg:flex-row gap-20 lg:justify-start">

                        <!----------------------
                        | INTRO PACK 1 TUFT 1 
                        ----------------------->                     

                        <div class="flex flex-col w-full h-auto lg:w-1/2 gap-12">

                            <div class="flex justify-center lg:justify-start">

                                <div class="flex text-6xl text-center lg:text-left text-crayola-cadet-blue-300 ">Winter is here...</div>

                            </div>

                            <div class="flex justify-center lg:justify-start">  
                                
                                <div class="flex text-6xl text-center lg:text-left text-crayola-cadet-blue-300 ">Your customers<br>(still) are looking for</div>
                            
                            </div>

                            <div class="flex justify-center lg:justify-start">

                                <div class="flex p-8 rounded-lg text-8xl font-bold text-center lg:text-left text-crayola-cadet-blue bg-crayola-cadet-blue-300 ">you</div>

                            </div>
                        
                        </div>

                        <!-----------------------------
                        | INTRO PACK 1 TUFT 2 -IMAGE
                        ------------------------------->                       

                        <div class="flex w-full h-auto max-w-full lg:w-1/2">

                            <div class="flex place-content-center">
                            
                                <picture>
                                    <source srcset="{{asset('img/client-searching-for-you.webp')}}">
                                    <img src="{{asset('img/client-searching-for-you.png')}}" alt="client looking for you" loading="lazy" class="flex object-contain object-center h-auto w-full" />
                                </picture>

                            </div>

                        </div>

                    </div>

                    <!---------------
                    | INTRO PACK 2
                    -----------------> 

                    <h1 class="flex flex-col justify-center gap-12 lg:gap-16">
                     
                        <div class="text-6xl lg:text-9xl hover:text-crayola-cadet-blue-100 focus:text-crayola-cadet-blue-100 flex text-center flex-col  font-medium font-serif transition ease-in-out duration-300 hover:scale-110 focus:scale-110 text-crayola-cadet-blue-300" style="text-shadow: 0.2rem 0.2rem 0.4rem #9d9398;">Make Them</div>
                        
                        <div class="text-6xl lg:text-9xl hover:text-crayola-cadet-blue-100 focus:text-crayola-cadet-blue-100 flex text-center flex-col  font-medium font-serif transition ease-in-out duration-300 hover:scale-110 focus:scale-110 text-crayola-cadet-blue-300" style="text-shadow: 0.2rem 0.2rem 0.4rem #9d9398;">Find You</div>
                        
                        <div class="text-5xl lg:text-8xl hover:text-crayola-cadet-blue-100 focus:text-crayola-cadet-blue-100 flex text-center flex-col  font-medium font-serif transition ease-in-out duration-300 hover:scale-110 focus:scale-110 text-crayola-cadet-blue-300" style="text-shadow: 0.2rem 0.2rem 0.4rem #9d9398;"><em>... and fall in love</em></div>

                        <div class="text-5xl lg:text-8xl hover:text-crayola-cadet-blue-100 focus:text-crayola-cadet-blue-100 flex text-center flex-col font-medium font-serif transition ease-in-out duration-300 hover:scale-110 focus:scale-110 text-crayola-cadet-blue-300" style="text-shadow: 0.2rem 0.2rem 0.4rem #9d9398;"><em>with your brand.</em></div>
                        
                    </h1>                    

                </div>
                    
            </section>

            <!---------------------------------------
            | ETHOS HOLDER UNIQUE
            ---------------------------------------->

            <section class=" container flex flex-col h-auto w-screen bg-davy-grey ">

                <!--------------------
                | ETHOS PACK 1 UNIQUE
                --------------------->

                <div class="flex flex-col h-auto w-auto text-pink-300 place-content-center p-16 gap-12"><!--z-30 -->

                    <!-------------------------
                    | ETHOS PACK 1 TUFT 1
                    -------------------------->

                    <div class="flex py-8 lg:py-12 justify-start">

                        <!----------------------------
                        | ETHOS PACK 1 TUFT 1 YARN 1
                        ----------------------------->

                        <div class=" bg-dark-pink rounded-full  flex h-64 w-64 lg:h-96 lg:w-96 overflow-hidden hover:w-4/6 hover:transition hover:ease-in-out hover:duration-300 focus:w-fit focus:transition focus:ease-in-out focus:duration-300">

                            <div class=" flex w-full flex-col justify-center content-center gap-y-12">
        
                                <div class="flex animate_ticker_reverse w-[2154px;]">
        
                                    <span class="text-5xl lg:text-8xl inline-flex whitespace-nowrap">&nbsp;designed for all&nbsp;</span>
                                            
                                    <span class="text-5xl lg:text-8xl inline-flex whitespace-nowrap">&nbsp;designed for all&nbsp;</span>
                            
                                    <span class="text-5xl lg:text-8xl inline-flex whitespace-nowrap">&nbsp;hdesigned for all&nbsp;</span>
                                        
                                    <span class="text-5xl lg:text-8xl inline-flex whitespace-nowrap">&nbsp;designed for all&nbsp;</span>
                                                
                                    <span class="text-5xl lg:text-8xl inline-flex whitespace-nowrap">&nbsp;designed for all&nbsp;</span>
                                            
                                    <span class="text-5xl lg:text-8xl inline-flex whitespace-nowrap">&nbsp;designed for all&nbsp;</span>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!----------------------------
                     ETHOS PACK 1 TUFT 2
                    ----------------------------->

                    <div class="flex flex-col py-8 lg:py-12 gap-8 justify-center">

                        <!-----------------------------------
                        ETHOS PACK 1 TUFT 2 YARN 1 
                        ------------------------------------->

                        <div class="flex text-6xl lg:text-9xl font-semibold justify-center text-center ext-davy-grey-shade-400">We help you</div>
                        <div class="flex text-6xl lg:text-9xl font-semibold justify-center text-center ext-davy-grey-shade-400">do it</div>

                    </div>

                    <!----------------------------
                     ETHOS PACK 1 TUFT 3 
                    ----------------------------->

                    <div class=" flex py-8 lg:py-12 justify-end">

                        <!-----------------------------
                        | ETHOS PACK 1 TUFT 3 YARN 1
                        ------------------------------>

                        <div class=" bg-fuchsia-rose rounded-full  flex h-64 w-64 lg:h-96 lg:w-96 overflow-hidden hover:w-4/6 hover:transition hover:ease-in-out hover:duration-300 focus:w-fit focus:transition focus:ease-in-out focus:duration-300"><!---->

                            <div class=" flex w-full   flex-col justify-center content-center gap-y-12">                        
        
                                <div class="flex animate_ticker_normal w-[2154px;]">

                                    <span class="text-5xl lg:text-8xl inline-flex whitespace-nowrap">&nbsp;digital-first design&nbsp;</span>
                                        
                                    <span class="text-5xl lg:text-8xl inline-flex whitespace-nowrap">&nbsp;digital-first design&nbsp;</span>
                        
                                    <span class="text-5xl lg:text-8xl inline-flex whitespace-nowrap">&nbsp;digital-first design&nbsp;</span>
                                    
                                    <span class="text-5xl lg:text-8xl inline-flex whitespace-nowrap">&nbsp;digital-first design&nbsp;</span>
                                            
                                    <span class="text-5xl lg:text-8xl inline-flex whitespace-nowrap">&nbsp;digital-first design&nbsp;</span>
                                        
                                    <span class="text-5xl lg:text-8xl inline-flex whitespace-nowrap">&nbsp;digital-first design&nbsp;</span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

            <!---------------------------------
              CRAFTS (SERVICES) HOLDER UNIQUE
            ---------------------------------->

            <section class="container flex flex-col h-auto w-screen  bg-timberwolf" id="wellcome-crafts">

                <!-----------------------------
                | CRAFTS PACK 1 - SECTION TITLE 
                ------------------------------>                
                
                <div class="flex flex-col p-20">

                    <!----------------------------
                     CRAFTS PACK 1 TUFT 1  1.1
                    ----------------------------->

                    <div class="flex flex-row justify-start">

                        <!-----------------------------
                        | CRAFTS PACK 1 TUFT 1 YARN 1   1.1.1
                        ------------------------------>

                        <h2 class="text-6xl lg:text-9xl font-bold text-timberwolf-shade-400 font-serif">Crafts</h2>

                    </div>

                </div>

                <!-----------------------------
                | CRAFTS PACK 2 - IMAGE 
                ------------------------------>                        

                <div class="flex w-full h-auto max-w-full py-20">

                    <div class="flex place-content-center">
                            
                        <picture>
                            <source srcset="{{asset('img/our-crafts.webp')}}">
                            <img src="{{asset('img/our-crafts.png')}}" alt="our-crafts and services" loading="lazy" class="flex object-contain object-center h-auto w-full" />
                        </picture>

                    </div>

                </div>

                <!--------------------
                | CRAFTS PACK 3 
                --------------------->

                <div class="flex flex-col px-20 gap-y-12 lg:gap-y-24">                
                
                    <!----------------------------
                     CRAFTS PACK 3 TUFT 1   3.1
                    ----------------------------->

                    <div class="flex flex-col lg:flex-row gap-8 justify-items-stretch items-stretch">

                        <!--------------------------------------------------
                        | CRAFTS PACK 3 TUFT 1 YARN 1  3.1.1.
                        ---------------------------------------------------->                   

                        <div class="flex flex-col basis-2/5 gap-4">

                            <h3 class="flex text-4xl lg:p-8 lg:text-6xl text-timberwolf-shade-400 font-serif">strategy</h3>

                            <div class=" text-xl lg:basis-3/5 lg:p-8 lg:text-2xl rounded-lg text-timberwolf-shade-400">Bla bla bla.</div>

                        </div>                    
                    
                        <!----------------------------
                        CRAFTS PACK 3 TUFT 1   3.2
                        ----------------------------->

                        <div class="flex flex-col basis-3/5 gap-8">

                            <!---------------------------------------------------
                            | CRAFTS PACK 3 TUFT 1 YARN    
                            ---------------------------------------------------->       

                            <div class="flex flex-col rounded-lg p-6 lg:p-8 font-normal bg-timberwolf-shade-900 transition ease-in-out duration-200 hover:scale-105 focus:scale-105 hover:font-semibold focus:font-semibold hover:bg-timberwolf-700 focus:bg-timberwolf-700">

                                <h4 class="text-xl text-bold lg:text-3xl text-timberwolf-shade-400">strategy</h4>

                                <div class="p-6 lg:p-8 rounded-lg text-xl lg:text-2xl text-timberwolf-shade-400"><span class="font-bold">Develop</span> an actionable long-term strategy that allows you to create and seize business opportunities.</div>

                            </div>

                            <!-----------------------------------------------
                            | CRAFTS PACK 2 TUFT 2 YARN 2 TRESS 2   2.2.2.2 
                            ------------------------------------------------->

                            <div class="flex flex-col rounded-lg p-6 lg:p-8 font-normal bg-timberwolf-shade-900 transition ease-in-out duration-200 hover:scale-105 focus:scale-105 hover:font-semibold focus:font-semibold hover:bg-timberwolf-700 focus:bg-timberwolf-700">

                                <h4 class="text-xl text-bold lg:text-3xl text-timberwolf-shade-400">business model</h4>

                                <div class="p-6 lg:p-8 rounded-lg text-xl lg:text-2xl text-timberwolf-shade-400">Articulate a clear business model that simplifies your decision-making process, focusing your efforts and resources on the items critical to your business success.</div>

                            </div>

                            <!-----------------------------------------------
                            | CRAFTS PACK 2 TUFT 2 YARN 2 TRESS 3   2.2.2.3
                            ------------------------------------------------->

                            <div class="flex flex-col rounded-lg p-6 lg:p-8 font-normal bg-timberwolf-shade-900 transition ease-in-out duration-200 hover:scale-105 focus:scale-105 hover:font-semibold focus:font-semibold hover:bg-timberwolf-700 focus:bg-timberwolf-700">
                                    
                                <h4 class="text-xl text-bold sm:basis-2/5 lg:text-3xl">organization design</h4>

                                <div class="p-6 lg:p-8 text-xl lg:basis-3/5 lg:text-2xl rounded-lg">Build an organization designed to brilliantly serve your customers that allows you to reach your business objectives, making the best of your resources.</div>

                            </div>

                        </div>
                    </div>

                </div>

                <!--------------------
                | CRAFTS PACK 4 
                --------------------->

                <div class="flex flex-col p-16 lg:p-20 gap-y-12 lg:gap-y-24">

                    <!----------------------------
                     CRAFTS PACK 4 TUFT 1   4.1.
                    ----------------------------->

                    <div class="flex flex-col lg:flex-row gap-8 justify-items-stretch items-stretch">

                        <!-----------------------------------------------
                        | CRAFTS PACK 4 TUFT 1 YARN 1   4.1.1 LEFT HEAD
                        ------------------------------------------------>     

                        <div class=" top-0 z-10 flex flex-col basis-2/5 gap-4"><

                            <!-----------------------------------------------
                            | CRAFTS PACK 4 TUFT 1 YARN 1 TRESS 1   4.1.1.1 
                            ------------------------------------------------->

                            <h3 class="flex text-4xl lg:p-8 lg:text-6xl text-timberwolf-shade-400 font-serif">design</h3>

                            <div class="p-4 text-xl lg:basis-3/5 lg:p-8 5 lg:text-2xl rounded-lg text-timberwolf-shade-400">Bla bla bla.</div>

                        </div>

                        <!--------------------------------------------------
                        | CRAFTS PACK 4 - TUFT 1 - YARN 2   4.1.2 
                        ---------------------------------------------------->

                        <div class="flex flex-col basis-3/5 gap-8">

                            <!-----------------------------------------------
                            | CRAFTS PACK 4 - TUFT 1 - YARN 2 - TRESS 1   4.1.2.1 
                            -------------------------------------------------> 

                            <div class="flex flex-col rounded-lg p-6 lg:p-8 font-normal bg-timberwolf-shade-900 transition ease-in-out duration-200 hover:scale-105 focus:scale-105 hover:font-semibold focus:font-semibold hover:bg-timberwolf-700 focus:bg-timberwolf-700">

                                <h4 class="text-xl text-bold sm:basis-2/5 lg:text-3xl">branding</h4>

                                <div class="p-6 lg:p-8 text-xl lg:basis-3/5 lg:text-2xl rounded-lg">Build a coherent brand that appeals to your customers, uncovering, articulating, and sharing the underlying reason your brand exists.</div>

                            </div>

                            <!-----------------------------------------------
                            | CRAFTS PACK 4 TUFT 1 YARN 2 TRESS 2   3.1.2.2 
                            ------------------------------------------------->

                            <div class="flex flex-col rounded-lg p-6 lg:p-8 font-normal bg-timberwolf-shade-900 transition ease-in-out duration-200 hover:scale-105 focus:scale-105 hover:font-semibold focus:font-semibold hover:bg-timberwolf-700 focus:bg-timberwolf-700">

                                <h4 class="text-xl text-bold sm:basis-2/5 lg:text-3xl">design</h4>
                                <div class="p-6 lg:p-8 text-xl lg:basis-3/5 lg:text-2xl rounded-lg">Craft the organization, brand, messages, and components that allow you to deliver consistently to your customers.</div>

                            </div>

                            <!-----------------------------------------------
                            | CRAFTS PACK 4 - TUFT 1 - YARN 2 - TRESS 1   4.1.2.3 
                            ------------------------------------------------->

                            <div class="flex flex-col rounded-lg p-6 lg:p-8 font-normal bg-timberwolf-shade-900 transition ease-in-out duration-200 hover:scale-105 focus:scale-105 hover:font-semibold focus:font-semibold hover:bg-timberwolf-700 focus:bg-timberwolf-700">

                                <h4 class="text-xl text-bold sm:basis-2/5 lg:text-3xl">web & apps</h4>

                                <div class="p-6 lg:p-8 text-xl lg:basis-3/5 lg:text-2xl rounded-lg">Attract your customers to your website and make them love your brand.</div>

                            </div>

                            <!-----------------------------------------------
                            | CRAFTS PACK 4 - TUFT 1 - YARN 2 - TRESS 4   4.1.2.4 
                            ------------------------------------------------->

                            <div class="flex flex-col rounded-lg p-6 lg:p-8 font-normal bg-timberwolf-shade-900 transition ease-in-out duration-200 hover:scale-105 focus:scale-105 hover:font-semibold focus:font-semibold hover:bg-timberwolf-700 focus:bg-timberwolf-700">

                                <h4 class="text-xl text-bold sm:basis-2/5 lg:text-3xl">copywriting</h4>

                                <div class="p-6 lg:p-8 text-xl lg:basis-3/5 lg:text-2xl rounded-lg">Find your voice to tell an unambiguous message that weaves a deeper connection with your customers and stakeholders.</div>

                            </div>

                            <!-----------------------------------------------
                            | CRAFTS PACK 4 - TUFT 1 - YARN 2 - TRESS 5   4.1.2.5 
                            ------------------------------------------------->

                            <div class="flex flex-col rounded-lg p-6 lg:p-8 font-normal bg-timberwolf-shade-900 transition ease-in-out duration-200 hover:scale-105 focus:scale-105 hover:font-semibold focus:font-semibold hover:bg-timberwolf-700 focus:bg-timberwolf-700">

                                <h4 class="text-xl text-bold sm:basis-2/5 lg:text-3xl">SEO</h4>

                                <div class="p-6 lg:p-8 text-xl lg:basis-3/5 lg:text-2xl rounded-lg">Make sweet the spot where your customers search for you and make them find you.</div>

                            </div>

                        </div>

                    </div>           

                </div>
                
            </section>

            <!---------------------------------------
            | WORKS (PROJECTS) HOLDER UNIQUE
            ---------------------------------------->

            <section class="container flex h-auto w-screen bg-winter-metallic-seaweed-300" id="wellcome-works">

                <!---------------------------
                | WORKS PACK 1 SECTION TITLE 
                ---------------------------->

                <div class="p-16 lg:p-20 flex flex-col gap-y-12 lg:gap-y-24">

                    <!---------------------------------------
                     WORKS PACK 1 TUFT 1  1.1 
                    ---------------------------------------->

                    <div class="flex flex-row justify-start">

                        <h2 class="text-6xl lg:text-9xl font-bold font-serif text-winter-metallic-seaweed">Works</h2>

                    </div>

                    <!---------------------------------------
                     WORKS PACK 1 TUFT 2  1.2
                    ---------------------------------------->
                    
                    <div class="flex flex-col shrink-0 lg:flex-row gap-y-8 lg:justify-between lg:gap-x-16 lg:gap-y-0">

                        <!-----------------------------------------------
                        | WORKS PACK 1 TUFT 2 YARN 1   1.2.1 PICTURE POD
                        ------------------------------------------------>

                        <div  class="flex flex-col flex-auto basis-1/2 w-auto h-auto ">                      
                            <div class="flex place-content-center">
                                    
                                <picture>
                                    <source srcset="{{asset('img/plan-1s.png')}}">
                                    <img src="{{asset('img/plan-1s.png')}}" alt="our-crafts and services" loading="lazy" class="flex object-contain object-center h-auto w-full" />
                                </picture>

                            </div>

                        </div>

                        <!-----------------------------------------------
                        | WORKS PACK 1 TUFT 2 YARN 2   1.2.2 MENU
                        ------------------------------------------------>

                        <div class="flex flex-col  grow content-between basis-1/2">

                            <!------------------------------------------------------
                            | WORKS PACK 1 TUFT 3 YARN 1  TRESS 1  1.2.2.1 MENU LIST
                            ------------------------------------------------------->                            

                            <ul class="flex flex-col gap-y-6 text-3xl  sm:text-4xl md:text-6xl ">

                                <li class="flex-auto border-solid border-b-4 pb-8 border-winter-metallic-seaweed "><!--  -->
                                    
                                    <a href="{{asset('/nunuku')}}" target="_blank" class="text-winter-metallic-seaweed hover:text-winter-metallic-seaweed-shade-700 ease-in-out duration-300 hover:font-bold focus:font-bold">nunuku</a>

                                    <p class="text-xl lg:text-xl text-winter-metallic-seaweed ">strategic planning | project management | logotype | crowdfunding & online store website | copywriting</p>

                                </li>

                                <li class="flex-auto border-solid border-b-4 pb-8 border-winter-metallic-seaweed ">
                                    
                                    <a href="{{asset('/nsic')}}"  target="_blank" class="text-winter-metallic-seaweed hover:text-winter-metallic-seaweed-shade-700 ease-in-out duration-300 hover:font-bold focus:font-bold">nsic</a>
                                    
                                    <p class="text-xl lg:text-xl text-winter-metallic-seaweed ">strategic planning | project management | logotype | website | copywriting</p>

                                </li> 
                                
                            </ul>

                        </div>

                    </div>
                    
                </div>

            </section>             

            <!---------------------------------------
            | FOOTER HOLDER UNIQUE
            ---------------------------------------->

            <footer class="container h-auto w-screen flex flex-col justify-between bg-winter-metallic-seaweed text-winter-metallic-seaweed-300" id="wellcome-foot"><!-- class="foot-holder" -->
                <!---------------------------------------
                | FOOTER PACK 
                ---------------------------------------->
                                
                <div class="flex flex-col p-16 lg:p-20 gap-y-16">

                    <!---------------------------------------
                    | FOOTER PACK - TUFT 1 (TOP)
                    ---------------------------------------->

                    <div class="flex flex-col md:flex-row gap-16 col-span-2">
                    
                        <!---------------------------------------
                        | FOOTER PACK 1 - TUFT 1 (TOP) - YARN  1.1
                        ---------------------------------------->
                        
                        <div class="flex flex-col basis-1/2 font-semibold text-7xl text-winter-metallic-seaweed-300 font-serif">Do you have a project or idea?</div>

                        <!---------------------------------------
                        | FOOTER PACK 1 - TUFT 1 (TOP) - YARN  1.2
                        ---------------------------------------->

                        <div class="flex flex-col gap-y-8 basis-1/2">

                            <div class="text-5xl text-yellow-500">Let's create wonders together</div>

                            <!------------------------------------------------------------
                            | FOOTER PACK 1 - TUFT 1 (TOP) - YARN 1.3 (CALL+SOCIAL)
                            -------------------------------------------------------------->                            

                            <div class="flex flex-col grow gap-y-4 justify-end">

                                <!---------------------------------------------------------------------
                                | FOOTER PACK 1 - TUFT 1 (TOP) - YARN 1.3 (CALL) - TRESS 1.3.1 CALL
                                ----------------------------------------------------------------------->

                                <div class="flex flex-col text-yellow-500">

                                    <div class="text-xl lg:text-2xl">Send me an email</div>

                                    <a href="mailto:fjmgpp@gmail.com" class="inline-block text-2xl lg:text-4xl hover:text-yellow-400 hover:font-bold ease-in-out duration-300">fjmgpp@gmail.com</a>
                            
                                </div>

                                <!---------------------------------------------------------------------
                                | FOOTER PACK 1 - TUFT 1 (TOP) - YARN 1.3 (CALL) - TRESS 1.3.2 SOCIAL
                                ----------------------------------------------------------------------->                    

                                <div class="flex flex-col">

                                    <div class="text-xl lg:text-2xl pb-4 text-yellow-500">Follow me</div>

                                <!--------------------------------------------------------------------------------------
                                | FOOTER PACK 1 - TUFT 1 (TOP) - YARN 1.3 (CALL) - TRESS 1.3.2 SOCIAL - SOCIAL ICONS
                                ---------------------------------------------------------------------------------------->                                     

                                    <div class="flex flex-row"><!-- class="icon-pod" -->
                                        
                                        <a href="https://www.linkedin.com/in/franciscomontesgomez/" target="_blank" class="inline-block px-4"><!-- class="social-icon"  -->
                                                        
                                            <img src="https://assets.website-files.com/5f69856bad1199253301ca0a/62832c779c00898c5d7f4699_LinkedIN_white.svg" loading="lazy" alt="LinkedIn Logo" class="icon"><!--  -->
                                                    
                                        </a>
                                                                
                                        <a href="https://www.instagram.com/" target="_blank" class="social-icon"><!-- class="social-icon" -->
                                                        
                                        <img src="https://assets.website-files.com/5f69856bad1199253301ca0a/62832c8856a51906523acbab_Instagram_white.svg" loading="lazy" alt="Instagram Logo" class="icon"><!-- class="icon" -->
                                                    
                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!---------------------------------------
                    | FOOTER PACK 1 - TUFT 2 (MIDDLE)
                    ---------------------------------------->                    

                    <div class="flex flex-col sm:flex-row py-4 justify-evenly">

                        <!------------------------------------------------------------
                        | FOOTER PACK 1 - TUFT 2 (MIDDLE) - YARN 2.1 (NAV)
                        -------------------------------------------------------------->   

                        <nav class=" flex flex-col sm:flex-row">

                            <!---------------------------------------------------------------------
                            | FOOTER PACK 1 - TUFT 2 (MIDDLE) - YARN 2.1 (NAV) - TRESS 2.1.1. MENU
                            ----------------------------------------------------------------------> 

                            <ul class="flex-col sm:flex-row flex gap-x-4 text-2xl sm:text-3xl md:text-4xl items-start md:items-end">
    
                                <li>
                                    <a href="https://www.w3schools.com" target="_blank" class=" text-winter-metallic-seaweed-300 hover:text-winter-metallic-seaweed-shade-300 hover:font-bold ease-in-out duration-300">home</a>
                                </li>
                                
                                <li>
                                    <a href="https://www.w3schools.com" target="_blank" class="text-winter-metallic-seaweed-300 hover:text-teal-400  hover:font-bold ease-in-out duration-300">craft</a>
                                </li>
    
                                <li>    
                                    <a href="https://www.w3schools.com" target="_blank" class="text-winter-metallic-seaweed-300 hover:text-teal-400  hover:font-bold ease-in-out duration-300">work</a>
                                </li>
    
                                <li>
                                    <a href="{{asset('/about')}}" target="_blank"  class="text-winter-metallic-seaweed-300 hover:text-teal-400  hover:font-bold ease-in-out duration-300">about</a>
                                </li>
                                
                                <li>
                                    <a href="https://www.w3schools.com" target="_blank" class="text-winter-metallic-seaweed-300 hover:text-teal-400  hover:font-bold ease-in-out duration-300">contact</a>
                                </li>
    
                            </ul>
    
                        </nav>

                    </div>

                    <!---------------------------------------
                    | FOOTER PACK 1 - TUFT 3 (BOTTON)
                    ---------------------------------------->                   

                    <div class="flex flex-col"><!--class="foot-botton-pack"-->

                        <!------------------------------------------------------------
                        | FOOTER PACK 1 - TUFT 3 (BOTTON) - YARN 3.1 (NAV POLICIES) 
                        -------------------------------------------------------------->                        

                        <div class="py-2 sm:py-4"><!--class="foot-middle-tuft"-->

                            <ul class="flex flex-col lg:flex-row justify-between text-xs sm:text-sm text-neutral-50"><!--class="foot-policies-line-menu-nav-yarn"-->
                                <li><a href="https://www.w3schools.com" target="_blank" class="hover:text-neutral-400 hover:font-bold ease-in-out duration-300">Privacy Policy</a></li>
                                <li><a href="https://www.w3schools.com" target="_blank" class="hover:text-neutral-400 hover:font-bold ease-in-out duration-300">Cookies policy</a></li>
                                <li><a href="https://www.w3schools.com" target="_blank" class="hover:text-neutral-400 hover:font-bold ease-in-out duration-300">Privacy and Cookie Policy</a></li>
                                <li><a href="https://www.w3schools.com" target="_blank" class="hover:text-neutral-400 hover:font-bold ease-in-out duration-300">Terms and Conditions / Legal Notice</a></li>
                                <li><a href="https://www.w3schools.com" target="_blank" class="hover:text-neutral-400 hover:font-bold ease-in-out duration-300">Edit Personal Data</a></li>                 
                            </ul>
            
                        </div>

                        <!------------------------------------------------------------
                        | FOOTER PACK 1 - TUFT 3 (BOTTON) - YARN 3.2 (OWNERSHIP) 
                        -------------------------------------------------------------->                          

                        <!--FOOTER YARN OWNERSHIP -->
        
                        <div class="flex flex-row justify-start pt-2 sm:pt-4 border-t-2 border-neutral-50"><!--class="foot-botton-tuft"-->

                            <div class="flex flex-col sm:flex-row text-xs sm:text-sm text-neutral-50"><!--class="copyright-yarn"-->
                                <div class="pr-2">©2022 Francisco Montes.</div><!--class="copyright-tress-1"-->
                                <div class="pl-2">All Rights Reserved.</div><!--class="copyright-tress-2"-->
                            </div>

                        </div>
                
                    </div>

                </div>

            </footer>

        </div><!--WRAPPER FINISHES HERE-->

        @livewireScripts
        
    </body>
</html>
