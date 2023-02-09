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
        
        <link rel="icon" type="image/png" href="{{asset('img/fjmg-logotype.png')}}">

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

        <div class="container h-screen overflow-y-auto overflow-x-hidden select-none"><!-- class="body-wrapper -->

            <!---------------------------------------
            | HEADER HOLDER UNIIQUE
            ---------------------------------------->

            <header class="container flex flex-row justify-between items-center bg-tranparent inset-0  z-50" id="wellcome-header"><!--sticky class="header-holder--->
                
                <!--------------------------
                | HEADER PACK 1 LOGO
                --------------------------->

                <div class="absolute mt-20 ml-4 lg:mt-20 lg:ml-8 w-auto h-auto  flex basis-auto object-cover object-center"><!--lg:p-6 class="logo-holder--->               
        
                    <img src="{{asset('img/fjmg-logo.png')}}" alt="fjmg logotype" loading="lazy" class="w-10 h-auto"/><!-- class="logo"--->   

                </div>

              <!--#700B23 #BDB539 #BC2649 #1390BD #115770-->

            </header>

            <!----------------------------------------
            | INTRO HOLDER SLOGAN
            ----------------------------------------->

            <section class="container flex h-auto w-screen items-center bg-crayola-cadet-blue"  id="wellcome-intro"><!--bg-yellow-500 class="intro-section-holder justify-center">-->

                <!-------------
                | INTRO QUEEEEEEEEEEEEEEE
                --------------->

                <div class="flex flex-col h-auto w-screen p-16 gap-y-16 lg:p-20 lg:gap-y-20"> <!--class="intro-pack"items-center gap-y-20relative-->

                    <!---------------
                    | INTRO PACK 1
                    -----------------> 

                    <div class="flex flex-col lg:flex-row gap-12 lg:gap-16">

                        <!----------------------
                        | INTRO PACK 1 TUFT 1 class="intro-tuft"
                        ----------------------->                     

                        <div class="flex flex-col text-crayola-cadet-blue-300 justify-center lg:justify-start text-center lg:text-left grow">
                            
                            <span class="text-3xl lg:text-6xl">Your customers<br>are looking for</span>
                                
                            <span class="text-5xl lg:text-8xl font-bold underline underline-offset-[1.5rem] leading-loose decoration-wavy">you</span>
                        
                        </div>

                        <!----------------------
                        | INTRO PACK 1 TUFT 2
                        ----------------------->                       

                        <div class="flex w-auto h-auto object-cover object-center place-content-center grow">

                            <img src="{{asset('img/client-searching-for-you.png')}}" alt="client looking for you" loading="lazy" class="w-1/2 h-auto ">

                        </div>

                    </div>

                    <!---------------
                    | INTRO PACK 2
                    -----------------> 

                    <!--<div class="flex flex-col justify-center ">

                        <h1 class="hover:text-crayola-cadet-blue-100 focus:text-crayola-cadet-blue-100 flex text-center flex-col text-6xl lg:text-9xl font-medium  font-serif transition ease-in-out duration-300 hover:scale-110 focus:scale-110 text-crayola-cadet-blue-300" style="text-shadow: 0.2rem 0.2rem 0.4rem #9d9398;">Make Them<br>Find You</h1>

                        <div class="hover:text-crayola-cadet-blue-100 focus:text-crayola-cadet-blue-100 flex text-center flex-col text-6xl lg:text-9xl font-medium  font-sans transition ease-in-out duration-300 hover:scale-110 focus:scale-110 text-crayola-cadet-blue-300" style="text-shadow: 0.2rem 0.2rem 0.4rem #9d9398;">and fall in<br>love with You</div>
                    
                    </div>

                    <div class="flex flex-col justify-center gap-y-16">

                        <h1 class="hover:text-crayola-cadet-blue-100 focus:text-crayola-cadet-blue-100 flex text-center flex-col text-6xl lg:text-9xl font-medium  font-serif transition ease-in-out duration-300 hover:scale-110 focus:scale-110 text-crayola-cadet-blue-300" style="text-shadow: 0.2rem 0.2rem 0.4rem #9d9398;">
                            
                            <span>Make Them</span>
                            <span>Find You</span>
                        
                        </h1>
                        
                        <div class="hover:text-crayola-cadet-blue-100 focus:text-crayola-cadet-blue-100 flex text-center flex-col text-6xl lg:text-9xl font-medium  font-serif transition ease-in-out duration-300 hover:scale-110 focus:scale-110 text-crayola-cadet-blue-300" style="text-shadow: 0.2rem 0.2rem 0.4rem #9d9398;">
                            
                            <span><em>... and fall in</em></span>
                            <span><em>love with You</em></span>
                        
                        </div>

                    </div>-->

                    <div class="flex flex-col justify-center gap-12 lg:gap-16">
                     
                        <div class="text-6xl lg:text-9xl hover:text-crayola-cadet-blue-100 focus:text-crayola-cadet-blue-100 flex text-center flex-col  font-medium font-serif transition ease-in-out duration-300 hover:scale-110 focus:scale-110 text-crayola-cadet-blue-300" style="text-shadow: 0.2rem 0.2rem 0.4rem #9d9398;">Make Them</div>
                        
                        <div class="text-6xl lg:text-9xl hover:text-crayola-cadet-blue-100 focus:text-crayola-cadet-blue-100 flex text-center flex-col  font-medium font-serif transition ease-in-out duration-300 hover:scale-110 focus:scale-110 text-crayola-cadet-blue-300" style="text-shadow: 0.2rem 0.2rem 0.4rem #9d9398;">Find You</div>
                        
                        <div class="text-5xl lg:text-8xl hover:text-crayola-cadet-blue-100 focus:text-crayola-cadet-blue-100 flex text-center flex-col  font-medium font-serif transition ease-in-out duration-300 hover:scale-110 focus:scale-110 text-crayola-cadet-blue-300" style="text-shadow: 0.2rem 0.2rem 0.4rem #9d9398;"><em>... and fall in love</em></div>

                        <div class="text-5xl lg:text-8xl hover:text-crayola-cadet-blue-100 focus:text-crayola-cadet-blue-100 flex text-center flex-col font-medium font-serif transition ease-in-out duration-300 hover:scale-110 focus:scale-110 text-crayola-cadet-blue-300" style="text-shadow: 0.2rem 0.2rem 0.4rem #9d9398;"><em>with your brand</em></div>
                        
                    </div>                    

                </div>
                    
            </section>

            <!---------------------------------------
            | ETHOS HOLDER UNIQUE
            ---------------------------------------->

            <section class=" container flex flex-col h-auto w-screen bg-davy-grey ">

                <!--------------------
                | ETHOS PACK 1 UNIQUE
                --------------------->

                <div class="flex flex-col h-auto w-screen text-pink-300 place-content-center px-20 gap-12"><!--z-30 -->

                    <!-------------------------
                    | ETHOS PACK 1 TUFT 1
                    -------------------------->

                    <div class="flex py-8 lg:py-12 justify-start"><!--z-30 -->

                        <!----------------------------
                        | ETHOS PACK 1 TUFT 1 YARN 1
                        ----------------------------->

                        <div class=" bg-dark-pink rounded-full  flex h-64 w-64 lg:h-96 lg:w-96 overflow-hidden hover:w-4/6 hover:transition hover:ease-in-out hover:duration-300 focus:w-fit focus:transition focus:ease-in-out focus:duration-300"><!--relative-->

                            <div class=" flex w-full flex-col justify-center content-center gap-y-12">
        
                                <div class="flex animate_ticker_reverse w-[2154px;]">
        
                                    <span class="text-5xl lg:text-8xl inline-flex whitespace-nowrap">&nbsp;human-centric&nbsp;</span>
                                            
                                    <span class="text-5xl lg:text-8xl inline-flex whitespace-nowrap">&nbsp;human-centric&nbsp;</span>
                            
                                    <span class="text-5xl lg:text-8xl inline-flex whitespace-nowrap">&nbsp;human-centric&nbsp;</span>
                                        
                                    <span class="text-5xl lg:text-8xl inline-flex whitespace-nowrap">&nbsp;human-centric&nbsp;</span>
                                                
                                    <span class="text-5xl lg:text-8xl inline-flex whitespace-nowrap">&nbsp;human-centric&nbsp;</span>
                                            
                                    <span class="text-5xl lg:text-8xl inline-flex whitespace-nowrap">&nbsp;human-centric&nbsp;</span>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!----------------------------
                     ETHOS PACK 1 TUFT 2
                    ----------------------------->

                    <div class="flex flex-col py-8 lg:py-12 gap-8 justify-center">

                        <!-----------------------------------
                        ETHOS PACK 1 TUFT 2 YARN 1  POT class="intro-tuft z-30
                        ------------------------------------->

                        <div class="flex text-6xl lg:text-9xl font-semibold justify-center text-center ext-davy-grey-shade-400">We help you</div>
                        <div class="flex text-6xl lg:text-9xl font-semibold justify-center text-center ext-davy-grey-shade-400">do it</div>

                    </div>

                    <!----------------------------
                     ETHOS PACK 1 TUFT 3 
                    ----------------------------->

                    <div class=" flex py-8 lg:py-12 justify-end"><!--z-30-->

                        <!-----------------------------
                        | ETHOS PACK 1 TUFT 3 YARN 1
                        ------------------------------>

                        <div class=" bg-fuchsia-rose rounded-full  flex h-64 w-64 lg:h-96 lg:w-96 overflow-hidden hover:w-4/6 hover:transition hover:ease-in-out hover:duration-300 focus:w-fit focus:transition focus:ease-in-out focus:duration-300"><!--relative-->

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

            <section class="container flex flex-col h-auto w-screen  bg-timberwolf" id="wellcome-crafts"><!-- class="crafts-section-holder" -->

                <!-----------------------------
                | CRAFTS PACK 1 SECTION TITLE 
                ------------------------------>                
                
                <div class="flex flex-col px-16 lg:px-20 gap-y-12 lg:gap-y-24"> <!-- MINE class="crafts-pack" -->

                    <!----------------------------
                     CRAFTS PACK 1 TUFT 1  1.1
                    ----------------------------->

                    <div class="flex flex-row py-8 justify-start"><!--class="section-title-tuft"-->

                        <!-----------------------------
                        | CRAFTS PACK 1 TUFT 1 YARN 1   1.1.1
                        ------------------------------>

                        <h2 class="text-6xl lg:text-9xl font-bold text-timberwolf-shade-400 font-serif">Craft</h2><!--class="section-title"-->

                    </div>

                </div>

                <!--------------------
                | CRAFTS PACK 2 
                --------------------->

                <div class="flex flex-col p-16 lg:p-20 gap-y-12 lg:gap-y-24">                
                
                    <!----------------------------
                     CRAFTS PACK 2 TUFT 1   2.1
                    ----------------------------->

                    <div class="flex flex-col lg:flex-row gap-8 justify-items-stretch items-stretch"><!--class="section-title-tuft" -->

                        <!--------------------------------------------------
                        | CRAFTS PACK 2 TUFT 2 YARN 1  2.2.1.  LEFT HEAD 
                        ---------------------------------------------------->                        
                        
                        <div class="flex flex-col basis-2/5 gap-4 "><!-- class="craft-yarn"-->

                            <h3 class="flex text-4xl lg:p-8 lg:text-6xl text-timberwolf-shade-400 font-serif">strategy</h3><!-- class="craft-subtitle-tress" bg-cyan-500-->

                            <div class=" text-xl lg:basis-3/5 lg:p-8 lg:text-2xl rounded-lg text-timberwolf-shade-400">Bla bla bla.</div><!-- class="craft-description-tress" -->

                        </div>

                        <!---------------------------------------------------
                        | CRAFTS PACK 2 TUFT 2 YARN 2   2.2.2 RIGHT CONTENT
                        ---------------------------------------------------->      

                        <div class="flex flex-col basis-3/5 gap-8 lg:gap-12 lg:p-10 rounded-lg"><!-- class="craft-yarn"-->

                            <!-----------------------------------------------
                            | CRAFTS PACK 2 TUFT 2 YARN 2 TRESS 1   2.2.2.1 
                            -------------------------------------------------> 

                            <div class="flex flex-col rounded-lg p-6 lg:p-8 font-normal bg-timberwolf-shade-900 transition ease-in-out duration-200 hover:scale-105 focus:scale-105 hover:font-semibold focus:font-semibold hover:bg-timberwolf-700 focus:bg-timberwolf-700">

                                <h4 class="text-xl text-bold lg:text-3xl text-timberwolf-shade-400">strategy</h4><!-- class="craft-subtitle-tress" -->

                                <div class="p-6 lg:p-8 rounded-lg text-xl lg:text-2xl text-timberwolf-shade-400">DEVELOP an actionable long-term strategy that allows you to create and seize business opportunities.</div><!-- class="craft-description-tress"-->

                            </div>

                            <!-----------------------------------------------
                            | CRAFTS PACK 2 TUFT 2 YARN 2 TRESS 2   2.2.2.2 
                            ------------------------------------------------->                             

                            <div class="flex flex-col rounded-lg p-6 lg:p-8 font-normal bg-timberwolf-shade-900 transition ease-in-out duration-200 hover:scale-105 focus:scale-105 hover:font-semibold focus:font-semibold hover:bg-timberwolf-700 focus:bg-timberwolf-700">

                                <h4 class="text-xl text-bold lg:text-3xl text-timberwolf-shade-400">business model</h4><!-- class="craft-yarn" -->

                                <div class="p-6 lg:p-8 rounded-lg text-xl lg:text-2xl text-timberwolf-shade-400">Articulate a clear business model that simplifies your decision-making process, focusing your efforts and resources on the items critical to your business success.</div><!-- class="craft-description-tress" -->

                            </div>

                            <!-----------------------------------------------
                            | CRAFTS PACK 2 TUFT 2 YARN 2 TRESS 3   2.2.2.3
                            ------------------------------------------------->

                            <div class="flex flex-col rounded-lg p-6 lg:p-8 font-normal bg-timberwolf-shade-900 transition ease-in-out duration-200 hover:scale-105 focus:scale-105 hover:font-semibold focus:font-semibold hover:bg-timberwolf-700 focus:bg-timberwolf-700">
                                
                                <h4 class="text-xl text-bold sm:basis-2/5 lg:text-3xl">organization design</h4><!-- class="craft-subtitle-tress" -->

                                <div class="p-6 lg:p-8 text-xl lg:basis-3/5 lg:text-2xl rounded-lg">Build an organization designed to brilliantly serve your customers that allows you to reach your business objectives, making the best of your resources.</div><!-- class="craft-description-tress" -->

                            </div>

                        </div>
                        
                    </div>

                </div>

                <!--------------------
                | CRAFTS PACK 3 
                --------------------->

                <div class="flex flex-col p-16 lg:p-20 gap-y-12 lg:gap-y-24"> <!-- MINE class="crafts-pack" class="flex flex-col gap-y-12 lg:gap-y-24" /// TCA class="p-fluid z-20 flex flex-col gap-6 overflow-visible md:flex-row md:gap-14 bg-white"-->  

                    <!----------------------------
                     CRAFTS PACK 3 TUFT 1   3.1.
                    ----------------------------->

                    <div class="flex flex-col lg:flex-row gap-8 justify-items-stretch items-stretch"><!--class="section-title-tuft"-->

                        <!-----------------------------------------------
                        | CRAFTS PACK 3 TUFT 1 YARN 1   3.1.1 LEFT HEAD
                        ------------------------------------------------>     

                        <div class=" top-0 z-10 flex flex-col basis-2/5 gap-4"><!-- class="craft-yarn"-->

                            <!-----------------------------------------------
                            | CRAFTS PACK 3 TUFT 1 YARN 1 TRESS 1   3.1.1.1 
                            ------------------------------------------------->

                            <h3 class="flex text-4xl lg:p-8 lg:text-6xl text-timberwolf-shade-400 font-serif">design</h3><!-- class="craft-subtitle-tress" -->

                            <div class="p-4 text-xl lg:basis-3/5 lg:p-8 5 lg:text-2xl rounded-lg text-timberwolf-shade-400">Bla bla bla.</div><!-- class="craft-description-tress" -->

                        </div>

                        <!--------------------------------------------------
                        | CRAFTS PACK 3 TUFT 1 YARN 2   3.1.2 RIGHT CONTENT
                        ---------------------------------------------------->

                        <div class="relative z-10 md:sticky  flex flex-col basis-3/5 gap-8 lg:gap-12 lg:p-10 rounded-lg"><!---->

                            <!-----------------------------------------------
                            | CRAFTS PACK 3 TUFT 1 YARN 2 TRESS 1   3.1.2.1 
                            -------------------------------------------------> 

                            <div class="flex flex-col rounded-lg p-6 lg:p-8 font-normal bg-timberwolf-shade-900 transition ease-in-out duration-200 hover:scale-105 focus:scale-105 hover:font-semibold focus:font-semibold hover:bg-timberwolf-700 focus:bg-timberwolf-700">

                                <h4 class="text-xl text-bold sm:basis-2/5 lg:text-3xl">branding</h4>

                                <div class="p-6 lg:p-8 text-xl lg:basis-3/5 lg:text-2xl rounded-lg">Build a coherent brand that appeals to your customers, uncovering, articulating, and sharing the underlying reason your brand exists.</div><!-- class="craft-description-tress" -->

                            </div>

                            <!-----------------------------------------------
                            | CRAFTS PACK 3 TUFT 1 YARN 2 TRESS 2   3.1.2.2 
                            ------------------------------------------------->

                            <div class="flex flex-col rounded-lg p-6 lg:p-8 font-normal bg-timberwolf-shade-900 transition ease-in-out duration-200 hover:scale-105 focus:scale-105 hover:font-semibold focus:font-semibold hover:bg-timberwolf-700 focus:bg-timberwolf-700">

                                <h4 class="text-xl text-bold sm:basis-2/5 lg:text-3xl">design</h4><!-- class="craft-subtitle-tress" -->

                                <div class="p-6 lg:p-8 text-xl lg:basis-3/5 lg:text-2xl rounded-lg">Craft the organization, brand, messages, and components that allow you to deliver consistently to your customers.</div><!-- class="craft-description-tress" -->

                            </div>

                            <!-----------------------------------------------
                            | CRAFTS PACK 3 TUFT 1 YARN 2 TRESS 1   3.1.2.3 
                            ------------------------------------------------->

                            <div class="flex flex-col rounded-lg p-6 lg:p-8 font-normal bg-timberwolf-shade-900 transition ease-in-out duration-200 hover:scale-105 focus:scale-105 hover:font-semibold focus:font-semibold hover:bg-timberwolf-700 focus:bg-timberwolf-700">

                                <h4 class="text-xl text-bold sm:basis-2/5 lg:text-3xl">web & apps</h4><!-- class="craft-tress" -->

                                <div class="p-6 lg:p-8 text-xl lg:basis-3/5 lg:text-2xl rounded-lg">Attract your customers to your website and make them love your brand.</div><!-- class="craft-description-tress" -->

                            </div>

                            <!-----------------------------------------------
                            | CRAFTS PACK 3 TUFT 1 YARN 2 TRESS 4   3.1.2.4 
                            ------------------------------------------------->

                            <div class="flex flex-col rounded-lg p-6 lg:p-8 font-normal bg-timberwolf-shade-900 transition ease-in-out duration-200 hover:scale-105 focus:scale-105 hover:font-semibold focus:font-semibold hover:bg-timberwolf-700 focus:bg-timberwolf-700">

                                <h4 class="text-xl text-bold sm:basis-2/5 lg:text-3xl">copywriting</h4><!-- craft-subtitle-tress -->

                                <div class="p-6 lg:p-8 text-xl lg:basis-3/5 lg:text-2xl rounded-lg">Find your voice to tell an unambiguous message that weaves a deeper connection with your customers and stakeholders.</div><!-- class="craft-description-tress" -->

                            </div>

                            <!-----------------------------------------------
                            | CRAFTS PACK 3 TUFT 1 YARN 2 TRESS 5   3.1.2.5 
                            ------------------------------------------------->

                            <div class="flex flex-col rounded-lg p-6 lg:p-8 font-normal bg-timberwolf-shade-900 transition ease-in-out duration-200 hover:scale-105 focus:scale-105 hover:font-semibold focus:font-semibold hover:bg-timberwolf-700 focus:bg-timberwolf-700">

                                <h4 class="text-xl text-bold sm:basis-2/5 lg:text-3xl">SEO</h4><!-- class="craft-yarn" -->

                                <div class="p-6 lg:p-8 text-xl lg:basis-3/5 lg:text-2xl rounded-lg">Make sweet the spot where your customers search for you and make them find you.</div><!-- class="craft-description-tress" -->
                    
                            </div>

                        </div>

                    </div>           

                </div>
                
            </section>

            <!---------------------------------------
            | WORKS (PROJECTS) HOLDER UNIQUE
            ---------------------------------------->

            <section class="container flex h-auto w-screen bg-winter-metallic-seaweed-300" id="wellcome-works"><!--class="works-section-holder"-->

                <!---------------------------
                | WORKS PACK 1 SECTION TITLE 
                ---------------------------->

                <div class="p-16 lg:p-20 flex flex-col gap-y-12 lg:gap-y-24"><!--class="works-pack"-->

                    <!---------------------------------------
                     WORKS PACK 1 TUFT 1  1.1 
                    ---------------------------------------->

                    <div class="flex flex-row justify-start"><!--lass="section-title-tuft"-->

                        <h2 class="text-6xl lg:text-9xl font-bold font-serif text-winter-metallic-seaweed">Works</h2><!--class="section-title"-->

                    </div>

                    <!---------------------------------------
                     WORKS PACK 1 TUFT 2  1.2
                    ---------------------------------------->
                    
                    <div class="flex flex-col lg:flex-row gap-y-8 lg:justify-between lg:gap-x-16 lg:gap-y-0">

                        <!-----------------------------------------------
                        | WORKS PACK 1 TUFT 2 YARN 1   1.2.1 PICTURE POD
                        ------------------------------------------------>

                        <div  class="  w-auto h-auto flex flex-col flex-auto basis-2/5 object-cover object-center bg-white p-8"><!--pod-->

                            <picture>
                                <source srcset="{{asset('img/nunuku-logotype-blue.webp')}}">
                                <img src="{{asset('img/nunuku-logotype-blue.png')}}" alt="Nunuku&#39;s logotype" loading="lazy" class="object-cover object-center rounded-lg ">
                            </picture>

                        </div>

                        <!-----------------------------------------------
                        | WORKS PACK 1 TUFT 2 YARN 2   1.2.2 MENU
                        ------------------------------------------------>

                        <div class="flex flex-col  grow content-between basis-3/5"><!-- class="works-list-yarn" -->

                            <!------------------------------------------------------
                            | WORKS PACK 1 TUFT 3 YARN 1  TRESS 1  1.2.2.1 MENU LIST
                            ------------------------------------------------------->                            

                            <ul class="flex flex-col gap-y-6 text-3xl  sm:text-4xl md:text-6xl"><!-- class="works-menu-nav-link" -->

                                <li class="flex-auto "><!--  -->
                                    <a href="{{asset('/nunuku')}}" target="_blank" class="text-winter-metallic-seaweed hover:text-winter-metallic-seaweed-shade-700 ease-in-out duration-300 hover:font-bold focus:font-bold">nunuku</a><!--target="#nunukucover"class="foot-top-pack-tuft-menu-link"--->
                                        <p class="text-xl lg:text-xl">Strategic planning | Project management | Logotype | Crowdfunding & Online store website | copywriting</p>

                                </li>

                                <li class="flex-auto"><!--  -->
                                    <a href="{{asset('/nsic')}}"  target="_blank" class="text-winter-metallic-seaweed hover:text-winter-metallic-seaweed-shade-700 ease-in-out duration-300 hover:font-bold focus:font-bold">nsic</a><!--  -->
                                </li> 
                                
                            </ul>

                        </div>

                    </div>
                    
                </div>

            </section>


            <!---------------------------------------
            | ABOUT US (Agency? Studio? see blvr) HOLDER UNIQUE - TO BE PASSED TO A SEPARATE PAGE
            ---------------------------------------->

            <section class="container flex flex-col h-auto w-screen  bg-timberwolf">

                <!-----------------------------
                | ABOUT US  PACK 1 SECTION TITLE 
                ------------------------------>                
                
                <div class="flex flex-col p-16 lg:p-20"> <!-- -->

                    <!----------------------------
                     ABOUT US  PACK 1 TUFT 1  1.1
                    ----------------------------->

                    <div class="flex flex-rowjustify-start"> <!--class="section-title-tuft"-->

                        <!-----------------------------
                        | ABOUT US  PACK 1 TUFT 1 YARN 1   1.1.1
                        ------------------------------>

                        <h2 class="text-6xl lg:text-9xl font-bold text-timberwolf-shade-400 font-serif">About us</h2>

                    </div>

                </div>

                <!--------------------
                | ABOUT US PACK 2 CONTENT 
                --------------------->

                <div class="flex flex-col p-16 lg:p-20 gap-y-16 lg:gap-y-20">             
             
                    <!-----------------------------
                     ABOUT US PACK 2 TUFT 1   2.1 
                    ------------------------------>
                   
                    <div class="flex flex-col gap-8 lg:gap-12 text-2xl lg:text-4xl text-timberwolf-shade-400">

                        <!----------------------------------------------
                        | ABOUT US  PACK 2 TUFT 1 YARN 1   2.1.1
                        ------------------------------------------------>
                                
                            <div class="flex w-1/2">Your organization exists to serve a customer's needs.</div>

                            <div class="flex w-1/2">And do it in such a way that the customer comes back to buy from you again...</div>

                            <div class="flex w-1/2 text-right place-self-end">... and again and again.</div>

                            <div class="flex w-1/2">But first, they need to find you.</div>
                            
                            <div class="flex w-1/2">Then, to be convinced that you can provide what they want.</div>

                            <div class="flex w-1/2">Only then, they will buy from you...</div>
                                
                            <div class="flex w-1/2 text-right place-self-end">... and if the experience was great, they may repeat.</div>
                    </div>

                    <!-----------------------------
                     ABOUT US PACK 2 TUFT 2   2.2 
                    ------------------------------>
                   
                    <div class="flex flex-col gap-16 lg:gap-20">

                        <!----------------------------------------------
                        | ABOUT US  PACK 2 TUFT 2 YARN 1   2.2.1
                        ------------------------------------------------>

                        <div class="flex text-timberwolf-shade-400 text-4xl lg:text-6xl">Making your customers find you and fall in love with your brand is our mission.</div>

                        <!----------------------------------------------
                        | ABOUT US  PACK 2 TUFT 2 YARN 2   2.2.2
                        ------------------------------------------------>

                        <div class="flex flex-col text-timberwolf-shade-400 text-2xl lg:flex-row lg:basis-1/2 lg:text-4xl gap-8 lg:gap-12">

                            <div >To achieve it, we assist you to thoroughly design and build your organization, brand and communications, ensuring that they are set and aligned.</div>

                            <div>We are an eclectic multidisciplinary collective, including designers, architects, strategists, programers and management experts assembled to make your brand succeed.</div>

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
                                
                <div class="flex flex-col p-16 lg:p-20 gap-y-16"><!-- class="foot-top-pack" -->

                    <!---------------------------------------
                    | FOOTER PACK - TUFT 1 (TOP)
                    ---------------------------------------->

                    <div class="flex flex-col md:flex-row gap-x-16 col-span-2"><!-- class="foot-top-pack-tuft-quest" before class="flex flex-row basis-1/2 grow pb-8"-->
                    
                        <!---------------------------------------
                        | FOOTER PACK 1 - TUFT 1 (TOP) - YARN  1.1
                        ---------------------------------------->
                        
                        <div class="basis-1/2 font-semibold text-4xl  sm:text-5xl md:text-7xl text-winter-metallic-seaweed-300 font-serif">Do you have a project or idea?</div><!-- class="foot-top-pack-tuft-yarn-1" -->

                        <!---------------------------------------
                        | FOOTER PACK 1 - TUFT 1 (TOP) - YARN  1.2
                        ---------------------------------------->

                        <div class="flex flex-col gap-y-8">

                            <div class="basis-1/2 pt-4 text-3xl sm:text-4xl md:text-6xl text-yellow-500">Let's create wonders together</div><!-- class="foot-top-pack-tuft-yarn-2 --> 

                            <!------------------------------------------------------------
                            | FOOTER PACK 1 - TUFT 1 (TOP) - YARN 1.3 (CALL+SOCIAL)
                            -------------------------------------------------------------->                            

                            <div class="flex flex-col grow gap-y-4 justify-end"><!-- class="hidden-menu-contact-tuft" -->

                                <!---------------------------------------------------------------------
                                | FOOTER PACK 1 - TUFT 1 (TOP) - YARN 1.3 (CALL) - TRESS 1.3.1 CALL
                                ----------------------------------------------------------------------->

                                <div class="flex flex-col text-yellow-500">

                                    <div class="text-xl lg:text-2xl">Send me an email</div><!-- class="act-call" -->

                                    <a href="mailto:fjmgpp@gmail.com" class="inline-block text-2xl lg:text-4xl hover:text-yellow-400 hover:font-bold ease-in-out duration-300">fjmgpp@gmail.com</a><!-- class="emailme" -->
                            
                                </div>

                                <!---------------------------------------------------------------------
                                | FOOTER PACK 1 - TUFT 1 (TOP) - YARN 1.3 (CALL) - TRESS 1.3.2 SOCIAL
                                ----------------------------------------------------------------------->                    

                                <div class="flex flex-col">

                                    <div class="text-xl lg:text-2xl pb-4 text-yellow-500">Follow me</div><!-- class="act-call" -->

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

                    <div class="flex flex-row pb-8 justify-start md:justify-endend "><!-- class="foot-top-pack-tuft-quest" -->


                        <!------------------------------------------------------------
                        | FOOTER PACK 1 - TUFT 2 (MIDDLE) - YARN 2.1 (NAV)
                        -------------------------------------------------------------->   

                        <nav class=" h-full w-full flex flex-col text-2xl sm:text-5xl"><!-- class="foot-top-pack-tuft-menu" -->

                            <!---------------------------------------------------------------------
                            | FOOTER PACK 1 - TUFT 2 (MIDDLE) - YARN 2.1 (NAV) - TRESS 2.1.1. MENU
                            ----------------------------------------------------------------------> 

                            <ul class="flex flex-col gap-y-2 text-2xl sm:text-4xl md:text-5xl items-start md:items-end"><!-- class="foot-top-pack-tuft-menu-yarn" -->
    
                                <li>
                                    <a href="https://www.w3schools.com" target="_blank" class=" text-winter-metallic-seaweed-300 hover:text-winter-metallic-seaweed-shade-300 hover:font-bold ease-in-out duration-300">home</a>  <!--class="foot-top-pack-tuft-menu-link"-->
                                </li>
                                
                                <li>
                                    <a href="https://www.w3schools.com" target="_blank" class="text-winter-metallic-seaweed-300 hover:text-teal-400  hover:font-bold ease-in-out duration-300">craft</a>
                                </li> <!--class="foot-top-pack-tuft-menu-link"-->
    
                                <li>    
                                    <a href="https://www.w3schools.com" target="_blank" class="text-winter-metallic-seaweed-300 hover:text-teal-400  hover:font-bold ease-in-out duration-300">work</a>
                                </li><!--class="foot-top-pack-tuft-menu-link"-->
    
                                <li>
                                    <a href="{{asset('/')}}" target="_blank"  class="text-winter-metallic-seaweed-300 hover:text-teal-400  hover:font-bold ease-in-out duration-300">about</a>
                                </li>  <!--class="foot-top-pack-tuft-menu-link"  components.about-->  
                                
                                <li>
                                    <a href="https://www.w3schools.com" target="_blank" class="text-winter-metallic-seaweed-300 hover:text-teal-400  hover:font-bold ease-in-out duration-300">contact</a> <!--class="foot-top-pack-tuft-menu-link"-->
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
