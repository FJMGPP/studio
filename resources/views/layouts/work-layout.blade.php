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

        <title>studio</title><!-- VARIABLE -->
        <meta name="description" content="CHSK is a creative consultancy that works with entrepreneurs and SME leaders like you to create and take advantage of your business opportunities, based in Santiago de Compostela, Spain. We work globally, online or onsite.based in Santiago de Compostela, Spain.">
        
        <link rel="icon" type="image/png" href="{{asset('img/fjmg-logo.png')}}">

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

        {{$slot}}

        <!---------------------------------------
        | FOOTER
        ---------------------------------------->

        <footer class="container h-auto w-screen flex flex-col justify-between bg-winter-metallic-seaweed text-winter-metallic-seaweed-300"><!-- class="foot-holder" -->
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

                            <div class="basis-1/2 pt-4 text-3xl sm:text-4xl md:text-6xl text-winter-metallic-seaweed-300">Let's create wonders together</div><!-- class="foot-top-pack-tuft-yarn-2 --> 

                            <!------------------------------------------------------------
                            | FOOTER PACK 1 - TUFT 1 (TOP) - YARN 1.3 (CALL+SOCIAL)
                            -------------------------------------------------------------->                            

                            <div class="flex flex-col grow gap-y-4 justify-end"><!-- class="hidden-menu-contact-tuft" -->

                                <!---------------------------------------------------------------------
                                | FOOTER PACK 1 - TUFT 1 (TOP) - YARN 1.3 (CALL) - TRESS 1.3.1 CALL
                                ----------------------------------------------------------------------->

                                <div class="flex flex-col text-winter-metallic-seaweed-300">

                                    <div class="text-xl lg:text-2xl">Send me an email</div><!-- class="act-call" -->

                                    <a href="mailto:fjmgpp@gmail.com" class="inline-block text-2xl lg:text-4xl hover:text-winter-metallic-seaweed-300 hover:font-bold ease-in-out duration-300">fjmgpp@gmail.com</a><!-- class="emailme" -->
                            
                                </div>

                                <!---------------------------------------------------------------------
                                | FOOTER PACK 1 - TUFT 1 (TOP) - YARN 1.3 (CALL) - TRESS 1.3.2 SOCIAL
                                ----------------------------------------------------------------------->                    

                                <div class="flex flex-col">

                                    <div class="text-xl lg:text-2xl pb-4 text-winter-metallic-seaweed-300">Follow me</div><!-- class="act-call" -->

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
                                    <a href="https://www.w3schools.com" target="_blank" class=" text-winter-metallic-seaweed-300 hover:#07252B focus:#07252B hover:font-bold ease-in-out duration-300">home</a>  <!--class="foot-top-pack-tuft-menu-link"-->
                                </li>
                                
                                <li>
                                    <a href="https://www.w3schools.com" target="_blank" class="text-winter-metallic-seaweed-300 hover:text-winter-metallic-seaweed-shade-300 focus:text-winter-metallic-seaweed-shade-300 hover:font-bold ease-in-out duration-300">craft</a>
                                </li> <!--class="foot-top-pack-tuft-menu-link"-->
    
                                <li>    
                                    <a href="https://www.w3schools.com" target="_blank" class=" text-winter-metallic-seaweed-300 hover:text-winter-metallic-seaweed-shade-300 focus:text-winter-metallic-seaweed-shade-300 hover:font-bold ease-in-out duration-300">work</a>
                                </li><!--class="foot-top-pack-tuft-menu-link"-->
    
                                <li>
                                    <a href="https://www.w3schools.com" target="_blank" class=" text-winter-metallic-seaweed-300 hover:text-winter-metallic-seaweed-shade-300 focus:text-winter-metallic-seaweed-shade-300 hover:font-bold ease-in-out duration-300">about</a>
                                </li>  <!--class="foot-top-pack-tuft-menu-link"-->  
                                
                                <li>
                                    <a href="https://www.w3schools.com" target="_blank" class=" text-winter-metallic-seaweed-300 hover:text-winter-metallic-seaweed-shade-300 focus:text-winter-metallic-seaweed-shade-300 hover:font-bold ease-in-out duration-300">contact</a> <!--class="foot-top-pack-tuft-menu-link"-->
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

        
        @livewireStyles

    </body>

</html>
