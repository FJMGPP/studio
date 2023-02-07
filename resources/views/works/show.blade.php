<x-app-layouts>

<!-- Styles -->
                  
    @vite('resources\css\app.css')
         
    @livewireStyles


<body>

    <!---------------------------------------
    | BODY WRAPPERS - PARALLAX - HORIZONTAL
    ---------------------------------------->    

    <div class="bg-[#6c808c] h-full w-full transform origin-top-left -rotate-90 -translate-y-[100vh] overflow-y-scroll overflow-x-hidden absolute" style="scrollbar-width:none;"><!--  class="works-outer-wrapper" -->

        <div class="flex flex-row w-[400vw] transform origin-top-left rotate-90 -translate-y-[100vh] "><!-- works-inner-wrapper -->

            <!---------------------------------------
            | PAGE ONE - PARALLAX - HORIZONTAL
            ---------------------------------------->

            <section class="slide one"><!--class="slide one"-->

                <h1 class="text-neutral-50 text-9xl lg:text-[15rem] uppercase">Nombre (nunuku)</h1>

            </section>

            <!---------------------------------------
            | PAGE TWO - PARALLAX - HORIZONTAL
            ---------------------------------------->

            <section class="flex flex-col lg:flex-row"><!--class="slide two"-->

                <div class="flex flex-col lg:flex-row lg:col-span-2 gap-16">
                        
                    <picture id=""><!--imagencita-->
                            <source srcset="{{asset('img/nunuku-nav-hero.webp')}}">
                            <img src="{{asset('img/nunuku-nav-hero.png')}}" alt="Nunuku website opening" loading="lazy" class=" w-auto h-auto object-cover object-center text-base rounded-lg " />
                    </picture>

                    <div>

                        <h2 class="flex flex-col text-xl lg:text-2xl justify-start justify-items-stretch">Descripcion</h2>


                        <div>

                            <ul class="flex flex-col text-xl lg:text-2xl justify-start justify-items-stretch">

                                <li>FJMG</li>
                                    <ul>
                                        <li>Project and project management</li>
                                        <li>Strategic plnning</li>
                                        <li>Webs design</li>
                                        <li>copywriting</li>
                                    </ul>
                                <li><span class="semibold">Logo and final product design</span>Amaya Montes Villalba</li>
                            </ul>
                            
                            <ul class="flex flex-col text-xl lg:text-2xl justify-start justify-items-stretch">
                                <li><span class="semibold">Audiovisual Production:</span>Closet Comunicación</li>
                                <li><span class="semibold">Photographers:</span>Xaime Cortizo</li>
                                <li><span class="semibold">Models:</span>XXX</li>
                                <li><span class="semibold">Social Media:</span>Gabriela López Bencid & XXX</li>                           
                            </ul>

                        </div>

                    </div>
                    
                </div>

            </section>

            <!---------------------------------------
            | PAGE X - PARALLAX - HORIZONTAL
            ---------------------------------------->

            <div class="slide three">slide three</div>
            <div class="slide four">slide four</div>
            <div class="slide five">slide five</div>
            <div class="slide six">slide six</div>

            


            <!---------------------------------------
            | FOOTER
            ---------------------------------------->

            <footer class="container h-auto w-screen flex flex-col justify-between bg-teal-900 text-neutral-50" id="wellcome-foot"><!-- class="foot-holder" -->

                <!-- FOOTER PACK -->
                
                <div class="flex flex-col p-16 lg:p-20 gap-y-16"><!-- class="foot-top-pack" -->

                    <!-- FOOTER TUFT 1 TOP -->

                    <div class="flex flex-col md:flex-row gap-x-16 col-span-2"><!-- class="foot-top-pack-tuft-quest" before class="flex flex-row basis-1/2 grow pb-8"-->

                        <!-- FOOTER TUFT 1 TOP YARN  1.1-->
                        
                        <div class="basis-1/2 font-semibold text-4xl  sm:text-5xl md:text-7xl text-teal-200 font-serif">Do you have a project or idea?</div><!-- class="foot-top-pack-tuft-yarn-1" -->

                        <!-- FOOTER TUFT 1 TOP YARN 1.2-->

                        <div class="flex flex-col gap-y-8">

                            <div class="basis-1/2 pt-4 text-3xl sm:text-4xl md:text-6xl text-yellow-500">Let's create wonders together</div><!-- class="foot-top-pack-tuft-yarn-2 --> 
                        
                            <!-- (FOOTER TUFT 2 MIDDLE YARN 2.2 CALL+SOCIAL) FOOTER TUFT 1 BOTTON-LEFT YARN 1.2 CALL+SOCIAL-->

                            <div class="flex flex-col grow gap-y-4 justify-end"><!-- class="hidden-menu-contact-tuft" -->

                                <!-- FOOTER TUFT 2 MIDDLE TRESS 2.2.1 CALL-->

                                <div class="flex flex-col text-yellow-500">

                                    <div class="text-xl lg:text-2xl">Send me an email</div><!-- class="act-call" -->

                                    <a href="mailto:fjmgpp@gmail.com" class="inline-block text-2xl lg:text-4xl hover:text-yellow-400 hover:font-bold ease-in-out duration-300">fjmgpp@gmail.com</a><!-- class="emailme" -->
                            
                                </div><!-- FOOTER TUFT 2 MIDDLE TRESS 2.2.1 CALL ENDS -->

                        

                                <!-- FOOTER TUFT 2 MIDDLE TRESS 2.2.2 SOCIAL -->

                                <div class="flex flex-col">

                                    <div class="text-xl lg:text-2xl pb-4 text-yellow-500">Follow me</div><!-- class="act-call" -->

                                    <!--FOOTER MIDDLE YARN 1.2 SOCIAL ICONS-->

                                    <div class="flex flex-row"><!-- class="icon-pod" -->
                                        
                                        <a href="https://www.linkedin.com/in/franciscomontesgomez/" target="_blank" class="inline-block px-4"><!-- class="social-icon"  -->
                                                        
                                            <img src="https://assets.website-files.com/5f69856bad1199253301ca0a/62832c779c00898c5d7f4699_LinkedIN_white.svg" loading="lazy" alt="LinkedIn Logo" class="icon"><!--  -->
                                                    
                                        </a>
                                                                
                                        <a href="https://www.instagram.com/" target="_blank" class="social-icon"><!-- class="social-icon" -->
                                                        
                                        <img src="https://assets.website-files.com/5f69856bad1199253301ca0a/62832c8856a51906523acbab_Instagram_white.svg" loading="lazy" alt="Instagram Logo" class="icon"><!-- class="icon" -->
                                                    
                                        </a>

                                    </div>

                                </div><!-- FOOTER TUFT 2 MIDDLE TRESS 2.2.2 SOCIAL ENDS -->

                            </div><!-- FOOTER TUFT 2 MIDDLE YARN 2.2 CALL+SOCIAL ENDS-->

                        </div>

                    </div><!-- FOOTER TUFT 1 TOP  ENDS -->

                    <!-- FOOTER TUFT 2 MIDDLE -->

                    <div class="flex flex-row pb-8 justify-start md:justify-endend "><!-- class="foot-top-pack-tuft-quest" -->

                        <!-- FOOTER TUFT 2 MIDDLE YARN 2.1 -->

                        <nav class=" h-full w-full flex flex-col text-2xl sm:text-5xl"><!-- class="foot-top-pack-tuft-menu" -->
                            
                            <!-- FOOTER TUFT 2 MIDDLE YARN 2.1 TRESS NAV -->

                            <ul class="flex flex-col gap-y-2 text-2xl sm:text-4xl md:text-5xl items-start md:items-end"><!-- class="foot-top-pack-tuft-menu-yarn" -->
    
                                <li>
                                    <a href="https://www.w3schools.com" target="_blank" class=" text-teal-200 hover:text-teal-400 hover:font-bold ease-in-out duration-300">home</a>  <!--class="foot-top-pack-tuft-menu-link"-->
                                </li>
                                
                                <li>
                                    <a href="https://www.w3schools.com" target="_blank" class="text-teal-200 hover:text-teal-400  hover:font-bold ease-in-out duration-300">craft</a>
                                </li> <!--class="foot-top-pack-tuft-menu-link"-->
    
                                <li>    
                                    <a href="https://www.w3schools.com" target="_blank" class="text-teal-200 hover:text-teal-400  hover:font-bold ease-in-out duration-300">work</a>
                                </li><!--class="foot-top-pack-tuft-menu-link"-->
    
                                <li>
                                    <a href="https://www.w3schools.com" target="_blank" class="text-teal-200 hover:text-teal-400  hover:font-bold ease-in-out duration-300">about</a>
                                </li>  <!--class="foot-top-pack-tuft-menu-link"-->  
                                
                                <li>
                                    <a href="https://www.w3schools.com" target="_blank" class="text-teal-200 hover:text-teal-400  hover:font-bold ease-in-out duration-300">contact</a> <!--class="foot-top-pack-tuft-menu-link"-->
                                </li>
    
                            </ul>
    
                        </nav><!-- FOOTER TUFT 2 MIDDLE YARN 2.1 TRESS NAV ENDS -->


                        

                    </div><!-- FOOTER TUFT 2 MIDDLE ENDS -->

                    <!--FOOTER TUFT 3 BOTTON -->

                    <div class="flex flex-col"><!--class="foot-botton-pack"-->

                        <!--FOOTER YARN LAW MANDATORY -->

                        <div class="py-2 sm:py-4"><!--class="foot-middle-tuft"-->

                            <ul class="flex flex-col lg:flex-row justify-between text-xs sm:text-sm text-neutral-50"><!--class="foot-policies-line-menu-nav-yarn"-->
                                <li><a href="https://www.w3schools.com" target="_blank" class="hover:text-neutral-400 hover:font-bold ease-in-out duration-300">Privacy Policy</a></li>
                                <li><a href="https://www.w3schools.com" target="_blank" class="hover:text-neutral-400 hover:font-bold ease-in-out duration-300">Cookies policy</a></li>
                                <li><a href="https://www.w3schools.com" target="_blank" class="hover:text-neutral-400 hover:font-bold ease-in-out duration-300">Privacy and Cookie Policy</a></li>
                                <li><a href="https://www.w3schools.com" target="_blank" class="hover:text-neutral-400 hover:font-bold ease-in-out duration-300">Terms and Conditions / Legal Notice</a></li>
                                <li><a href="https://www.w3schools.com" target="_blank" class="hover:text-neutral-400 hover:font-bold ease-in-out duration-300">Edit Personal Data</a></li>                 
                            </ul>
            
                        </div>

                        <!--FOOTER YARN OWNERSHIP -->
        
                        <div class="flex flex-row justify-start pt-2 sm:pt-4 border-t-2 border-neutral-50"><!--class="foot-botton-tuft"-->

                            <div class="flex flex-col sm:flex-row text-xs sm:text-sm text-neutral-50"><!--class="copyright-yarn"-->
                                <div class="pr-2">©2022 Francisco Montes.</div><!--class="copyright-tress-1"-->
                                <div class="pl-2">All Rights Reserved.</div><!--class="copyright-tress-2"-->
                            </div>

                        </div>
                
                    </div><!--FOOTER TUFT 3 BOTTON -->

                </div><!-- FOOTER PACK -->

            </footer><!-- FOOTER ENDS -->

        </div><!-- WORKS-INNER-WRAPPER ENDS-->

        </div>
        
    </div><!-- WORKS-OUTER-WRAPPER ENDS -->

    @livewireScripts

</body>

</x-app-layouts>