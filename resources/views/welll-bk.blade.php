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
        <link rel="icon" type="image/png" href="images\my-icon.png">

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

        <div class="body-wrapper">

            <header class="header-holder">
                
                    <!--LOGO-HOLDER-->
                    <div class="logo-holder">
                    
                        <div class="logo">
                            <img src="resources\images\fjmg-logo-white.png" alt="fjmg logotype" width="20px" height="20px"loading="lazy" alt="logo" class="logo-image">

                        </div>
                    </div>

                    <!--BOTON MENU/CLOSE HIDDEN MENU-HOLDER-->
                    <div class="menu-button-holder">

                        <!-- BOTON MENU/CLOSE HIDDEN MENU -->

                        <a href="#gotomenu" target="_blank" class="hidden-menu-on" >
                            <button type="button" >menu</button>
                        </a>

                        <a href="#gotomenu" target="_blank" class="hidden-menu-off">
                            <button type="button">close</button>
                        </a>

                    </div>

            </header>

            <!--SLOGAN-->

            <section class="intro-section-holder">

                    <div class="intro-holder">
                        <div class="intro-phrase bg-orange-50">Your customers are looking for you</div>
                        <div class="intro-phrase bg-orange-300"><h1>Make Them Find You</h1></div>
                        <div class="intro-phrase bg-orange-500">We help you to achieve it</div>
                    </div>
           

            </section>

            <!--DIRECTIVAS-->

            <section class="directives-section-holder">
                
                <div class="directives-holder">
                
                    <div class="directive-anime-right">
                        <div class="directives-phrase">Human-centric</div>
                    </div>

                    <div class="directive-anime-left">
                        <div class="directives-phrase">digital-first design</div>
                    </div>
                    <!--<div class="directives-holder directive-anime-right flex flex-row">
                        <div class="directives-phrase ">H</div>
                        <div class="directives-phrase ">u</div>
                        <div class="directives-phrase ">m</div>
                        <div class="directives-phrase ">a</div>
                        <div class="directives-phrase ">n</div>
                        <div class="directives-phrase ">&nbsp;</div>
                        <div class="directives-phrase ">c</div>
                        <div class="directives-phrase ">e</div>
                        <div class="directives-phrase ">n</div>
                        <div class="directives-phrase ">t</div>
                        <div class="directives-phrase ">r</div>
                        <div class="directives-phrase ">i</div>
                        <div class="directives-phrase ">c</div>
                        
                    </div>-->
                </div>

            </section>

            <!--SERVICES-->

            <section class="services-section-holder">

                <div class="section-title-holder">

                    <h2 class="section-title">Services</h2>

                </div>

                <div class="services-holder">

                    <div class="tuft">

                        <h3 class="tuft-subtitle">strategy</h3>

                        <div class="tuft-description">Develop an actionable long-term strategy that allows you to create and seize business opportunities.</div>

                    </div>

                    <div class="tuft">

                        <h3 class="tuft-subtitle">business model</h3>

                        <div class="tuft-description">Articulate a clear business model that simplifies your decision-making process, focusing your efforts and resources on the items critical to your business success.</div>

                    </div>
                
                    <div class="tuft">

                        <h3 class="tuft-subtitle">organization design</h3>

                        <div class="tuft-description">Build an organization designed to brilliantly serve your customers that allows you to reach your business objectives, making the best of your resources.</div>
                        
                    </div>
                    
                    <div class="tuft">

                        <h3 class="tuft-subtitle">branding</h3>

                        <div class="tuft-description">Build a coherent brand that appeals to your customers, uncovering, articulating, and sharing the underlying reason your brand exists.</div>
                        
                    </div>
                    
                    <div class="tuft">

                        <h3 class="tuft-subtitle">Design</h3>

                        <div class="tuft-description">Craft the organization, brand, messages, and components that allow you to deliver consistently to your customers.</div>
                    </div>

                    <div class="tuft">

                        <h3 class="tuft-subtitle">Web & apps</h3>

                        <div class="tuft-description">Attract your customers to your website and make them love your brand.</div>
                        
                    </div>

                    <div class="tuft">

                        <h3 class="tuft-subtitle">Copywriting</h3>

                        <div class="tuft-description">CopywritingFind your voice to tell an unambiguous message that weaves a deeper connection with your customers and stakeholders.</div>
                        
                    </div>

                    <div class="tuft">

                        <h3 class="tuft-subtitle">SEO</h3>

                        <div class="tuft-description">Make sweet the spot where your customers search for you and make them find you.CopywritingFind your voice to tell an unambiguous message that weaves a deeper connection with your customers and stakeholders.</div>
                        
                    </div>

                </div>

            </section>

            <!--PROYECTOS-->

            <section class="projects-section-holder">

                <div class="section-title-holder">

                    <h2 class="section-title">Projects</h2>

                </div>
                
                <div class="tuft">
                    <div></div>

                    <div class="projects-list">
                        <ul class="projects-menu-nav-link">
                            <li class="flex-auto bg-red-400">nunuku</li>
                            <li class="flex-auto bg-orange-500">ferlos</li>
                            <li class="flex-auto bg-red-400">osic</li>
                            <li class="flex-auto bg-orange-500">fontesequelos</li>             
                        </ul>
                    </div>
                </div>

            </section>

            <!-- HIDDEN MENU -->

            <section class="hidden-menu">
                                
                <div class="hidden-menu-holder">
                    
                    <!-- HIDDEN MENU NAV -->

                    <div class="hidden-menu-nav">
                        <ul id="gotomenu" class="hidden-menu-nav-link">
                            <li class="flex-auto bg-red-400">home</li>
                            <li class="flex-auto bg-orange-500">services</li>
                            <li class="flex-auto bg-amber-500">projects-work</li>
                            <li class="flex-auto bg-lime-600">about</li>
                            <li class="flex-auto bg-emerald-600">contact</li>                 
                        </ul>
                    </div>

                    <!-- HIDDEN MENU SOCIAL - CHECK EP ANIMATION/STYLE -->

                    <div class="hidden-menu-contact">

                            <!--CAMBIAR CLASES-->
                            <div class="subtext" style="display: flex; opacity: 1;">Send me an email</div>

                                <a href="mailto:fjmgpp@gmail.com" class="emailme w-inline-block"></a>

                                    <div class="subtitle-no-hover other">fjmgpp@gmail.com</div> 

                        <div class="other-item">
                                
                            <div class="subtext">Follow me (social logos)</div>
                                    
                            <!--SOCIAL ICONS-->
                            <div class="overflow"> <!-- QUE ES ESTO + CAMBIAR/descargar ICONOS Y LINKS -->

                              <div class="icon-holder" style="transform: translate3d(0px, 0em, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; display: flex;">
                                        
                                    <a href="https://www.linkedin.com/in/franciscomontesgomez/" target="_blank" class="social-icon w-inline-block">
                                        <img src="https://assets.website-files.com/5f69856bad1199253301ca0a/62832c779c00898c5d7f4699_LinkedIN_white.svg" loading="lazy" alt="LinkedIn Logo" class="icon">
                                    </a>
                                        
                                    <a href="https://www.instagram.com/" target="_blank" class="social-icon w-inline-block">
                                        <img src="https://assets.website-files.com/5f69856bad1199253301ca0a/62832c8856a51906523acbab_Instagram_white.svg" loading="lazy" alt="Instagram Logo" class="icon">
                                    </a>
                                        
                                </div>

                            </div>

                        </div>

                    </div>
                    
                </div>

            </section>

            <!--FOOTER-->

            <footer class="foot-holder">
                
                <div class="foot-top-tuft">

                    <div class="col-span-2 row-span-1 bg-blue-400 container flex flex-col flex-grow flex-nowrap items-center ">
                        <div class="flex-none pb-6 text-7xl bg-yellow-400">Do you have an idea or project?</div>
                    </div>

                    <div class="col-span-1 row-span-2 bg-green-400 container flex flex-col flex-grow-0 flex-nowrap place-content-center items-end text-2xl ">
                        <ul>
                            <li class="flex-auto bg-red-400 text-center">home</li>
                            <li class="flex-auto bg-orange-500 text-center">services</li>
                            <li class="flex-auto bg-amber-500 text-center">projects - work</li>
                            <li class="flex-auto bg-lime-600 text-center">about</li>
                            <li class="flex-auto bg-emerald-600 text-center">contact</li>                 
                        </ul>
                    </div>

                    <div class="col-span-2 row-span-1 bg-blue-400 container flex flex-col flex-grow flex-nowrap items-center ">
                        <div class="flex-none text-5xl bg-amber-500">Let's create wonders together</div> 
                    </div>

                </div>

                <div class="foot-center-tuft">
                    <svg height="1rem" width="100%">
                        <line x1="0" y1="0" x2="100vw" y2="0" style="stroke:rgb(255,0,0);stroke-width:2" />Sorry, your browser does not support inline SVG.
                    </svg>



                </div>

                <div class="foot-botton-tuft">

                    <ul class="foot-small-line-menu-nav">
                        <li>Privacy Policy</li>
                        <li>Cookies policy</li>
                        <li>Privacy and Cookie Policy</li>
                        <li>Terms and Conditions / Legal Notice</li>
                        <li>Edit Personal Data</li>                 
                    </ul>

                    <div class="copyright-tuft">©2022 Francisco Montes &#124; All Rights Reserved</div>

                </div> 
                    
                <div class="grid grid-cols-3 gap-6">

                    <div class="col-span-2 bg-blue-400">2</div>
                    <div class="col-span-1  bg-green-400">1</div>
        
                </div>

                        <!-- Lo que sigue es para tel tema de lenguas diferentes -->
        
                        <div class="container flex">
        
                            {{__("mycontent.profession")}}
                                <div>en</div>
                                <div>es</div>
                                <div class="btn">ddd</div>
                        </div>
               
            </footer>

        </div>
        <!--WRAPPER FINISH HERE-->



            <!--    <div class="foot-top">

                        <div class="foot-top-right">

                            <div class="flex-none pb-6 text-7xl bg-yellow-400">Do you have an idea or project?</div>
                        
                            <div class="flex-none text-5xl bg-amber-500">Let's create wonders together</div> 
                        
                        </div>
                                
                        <div class="foot-top-left">
                             <ul>
                                <li class="flex-auto bg-red-400 text-center">home</li>
                                <li class="flex-auto bg-orange-500 text-center">services</li>
                                <li class="flex-auto bg-amber-500 text-center">projects - work</li>
                                <li class="flex-auto bg-lime-600 text-center">about</li>
                                <li class="flex-auto bg-emerald-600 text-center">contact</li>                 
                            </ul>
                        </div>

                    </div>-->


<!-- https://tailwind-elements.com/docs/standard/components/collapse/
       
    <div>
        
    <p class="md:space-x-1 space-y-1 md:space-y-0 mb-4">
            <a class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Link with href
            </a>
            <button class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Button with data-bs-target
            </button>
          </p>
          <div class="collapse" id="collapseExample">
            <div class="block p-6 rounded-lg shadow-lg bg-white">
              Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
            </div>
        </div>
        
-->

<!--

        <div id="accordion-collapse" data-accordion="collapse">
            <h2 id="accordion-collapse-heading-1">

                <button type="button" class="thebutton" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                    <span>What is Flowbite?</span>
                        <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                </button>

            </h2>

            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">

            <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS.</p>
                
            </div>
        
-->





<!-- flowbite HACER ACORDEON

 <script>
            /* Open when someone clicks on the span element */
            function openNav() {
              document.getElementById("concealed").style.width = "100%";
            }
            
            /* Close when someone clicks on the "x" symbol inside the overlay */
            function closeNav() {
              document.getElementById("concealed").style.width = "0%";
            }

            //Tailwind CSS Accordion - Flowbite
            // create an array of objects with the id, trigger element (eg. button), and the content element
            const accordionItems = [
              {
                id: 'accordion-example-heading-1',
                triggerEl: document.querySelector('#accordion-example-heading-1'),
                targetEl: document.querySelector('#accordion-example-body-1'),
                active: true
            }
            ];

            // options with default values
            const options = {
                alwaysOpen: true,
                activeClasses: 'bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white',
                inactiveClasses: 'text-gray-500 dark:text-gray-400',
                onOpen: (item) => {
                    console.log('accordion item has been shown');
                    console.log(item);
                },
                onClose: (item) => {
                    console.log('accordion item has been hidden');
                    console.log(item);
                },
                onToggle: (item) => {
                    console.log('accordion item has been toggled');
                    console.log(item);
                },
            };

                // open accordion item based on id
                accordion.open('accordion-example-heading-1');

                // close accordion item based on id
                accordion.close('accordion-example-heading-1');

                // toggle visibility of item based on id
                accordion.toggle('accordion-example-heading-3');

                //https://flowbite.com/docs/components/accordion/
            
            </script>


FIN flowbite-->

<!-- ELVINA PRASAD /// EP /// https://www.elvinaprasad.com/
                                       
                                            <div class="other-items-float">
                                                
                                                <div class="other-item">
                                                    
                                                    <div class="subtext" style="display: flex; opacity: 1;">Send me an email</div>
                                                    
                                                    <a href="mailto:elvina.prasad19@gmail.com" class="emailme w-inline-block">
                                                        <div class="subtitle-no-hover other" style="transform: translate3d(0px, 0em, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; display: flex;">elvina.prasad19@gmail.com</div>
                                                    </a>
                                                </div>
                                                <div class="other-item">
                                                    
                                                    <div class="subtext" style="display: flex; opacity: 1;">Follow me (and my dog)</div>

                                                    
                                                    <div class="overflow">
                                                        <div class="icon-holder" style="transform: translate3d(0px, 0em, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; display: flex;">
                                                            
                                                            <a href="https://www.linkedin.com/in/elvina-prasad/" target="_blank" class="social-icon w-inline-block">
                                                                <img src="https://assets.website-files.com/5f69856bad1199253301ca0a/62832c779c00898c5d7f4699_LinkedIN_white.svg" loading="lazy" alt="" class="icon">
                                                            </a>
                                                            
                                                            <a href="https://www.instagram.com/e.lvina/?hl=en" target="_blank" class="social-icon w-inline-block">
                                                                <img src="https://assets.website-files.com/5f69856bad1199253301ca0a/62832c8856a51906523acbab_Instagram_white.svg" loading="lazy" alt="" class="icon"></a>
                                                            
                                                            <a href="https://www.figma.com/@elvina" target="_blank" class="social-icon w-inline-block">
                                                            <img src="https://assets.website-files.com/5f69856bad1199253301ca0a/62832f783a049be974d1cb19_Figma_white.svg" loading="lazy" alt="" class="icon">
                                                            </a>
                                                        </div>
                                                            
                                                    </div>


                                                </div>
            FIN ELVINA PRASAD  -->


<!-- DEFAULT DE LARAVEL WELCOME 


ESTO ES EL REGISTRO - AHORA NO SE DONDE VA

            <body class="antialiased">
                <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
            </body>



            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>

FIN DEFAULT LARAVEL WELCOME -->

<!-- MY ORIGINAL HEADER UNTIL 24NOV2022 -->

            <!-- HEADER -->

            <header class="container flex flex-row justify-between items-center bg-red-400 inset-0 px-4 py-2 sticky" id="wellcome-header"><!-- class="header-holder--->
                
                <!--LOGO-HOLDER    -->
                <div class=" relative w-auto h-auto p-4 flex basis-auto object-cover object-center"><!-- class="logo-holder--->               
                    
                    <img src="{{asset('img/fjmg-logo.png')}}" alt="fjmg logotype" loading="lazy" class="w-10 h-auto"/><!-- class="logo"--->   

                </div>

                <!--BOTON MENU/CLOSE HIDDEN MENU-HOLDER-->
                <div class="px-6 py-2 text-2xl md:text-4xl" id="gotomenu"><!-- class="menu-button"--->

                    <!-- BOTTON MENU HIDDEN MENU -->
                    <a href="#concealed" target="_blank" class="justify-self-start bg-purple-500 transition ease-in-out hover:scale-125 hover:bg-sky-700 duration-300" ><!-- class="hidden-menu-on"--->
                        <button type="button" >menu</button><!-- class="menu-button"--->
                    </a>

                </div>


                <!-- BOTTON X ANIMATED -->
                    
                    <!--<div class="group flex h-14 w-14 cursor-pointer items-center justify-center rounded-xl bg-neutral-50 p-2 hover:bg-neutral-200">
                    
                        <div class="space-y-2">
                      
                            <span class="block h-1 w-10 origin-center rounded-full bg-slate-500 transition-transform ease-in-out group-hover:translate-y-1.5 group-hover:rotate-45"></span>

                            <span class="block h-1 w-8 origin-center rounded-full bg-orange-500 transition-transform ease-in-out group-hover:w-10 group-hover:-translate-y-1.5 group-hover:-rotate-45"></span>

                            <span class="block h-1 w-8 origin-center rounded-full bg-orange-500 transition-transform ease-in-out group-hover:w-10 group-hover:-translate-y-1.5 group-hover:-rotate-45"></span>
                    
                        </div>
                    </div>-->

        </header>
<!-- ENDS  MY ORIGINAL HEADER UNTIL 24NOV2022 -->




<header class="relative grid grid-cols-5 grid-rows-1 w-full mb-8 bg-blue-400">

    <div class="w-4">col1</div>

    <div class=" relative w-auto h-auto p-4 flex basis-auto object-cover object-center">col2
            
        <!-- <img src="{{asset('img/fjmg-logo.png')}}" alt="fjmg logotype" loading="lazy" class="w-10 h-auto object-cover object-center   my-8 ml-8 basis-1/5"/><img src="{{asset('img/fjmg-logo.png')}}" alt="fjmg logotype" loading="lazy" class="w-10 h-auto object-cover object-center fixed  my-8 ml-8 basis-1/5"/> -->

    <div class="grow shrink">col3</div>

    <div class="grow shrink">col4</div>

        <!--<a href="#concealed" target="_blank" class=" bg-red-500 transition ease-in-out hover:scale-110 hover:bg-sky-700 duration-300 text-xl justify-self-end  m-8" >--><!-- class="hidden-menu-on"--->
       <!-- <button type="button" >menu</button>--><!-- class="menu-button"--->
        </a>

    <div class="w-4">col5</div>

</header> <!--head lab end-->

                    <!--TEST 1 -->
                    <div class="flex flex-row py-8 justify-start items-baseline bg-amber-200"><!--class="section-title-tuft"-->

                        <div class="flex flex-row  gap-4 p-4 bg-red-500"><!-- class="craft-yarn" -->

                            <h3 class="p-4 text-2xl lg:basis-2/5 lg:p-8 lg:text-4xl text-slate-50 bg-red-200">strategy</h3><!-- class="craft-subtitle-tress" -->

                            <div class="p-4 text-xl lg:basis-3/5 lg:p-8 5 lg:text-2xl rounded-lg  bg-neutral-200">Develop an actionable long-term strategy that allows you to create and seize business opportunities.</div><!-- class="craft-description-tress" -->

                        </div>  

                    </div>


                    <!--ORIGINAL DRAFT-->

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 bg-green-400"><!-- class="crafts-tuft" -->

                        <div class="flex flex-col lg:flex-row gap-2"><!-- class="craft-yarn" -->

                            <h3 class="px-4 text-xl sm:basis-2/5 lg:p-4 lg:text-2xl text-slate-50">strategy</h3><!-- class="craft-subtitle-tress" -->

                            <div class="px-4 text-xl lg:basis-3/5 lg:text-2xl rounded-lg  bg-neutral-200">Develop an actionable long-term strategy that allows you to create and seize business opportunities.</div><!-- class="craft-description-tress" -->

                        </div>

                        <div class="flex flex-col lg:flex-row gap-2"><!-- class="craft-yarn" -->

                            <h3 class="px-4 text-xl sm:basis-2/5 lg:p-4 lg:text-2xl text-slate-50">business model</h3><!-- class="craft-yarn" -->

                            <div class="craft-description-tress">Articulate a clear business model that simplifies your decision-making process, focusing your efforts and resources on the items critical to your business success.</div><!-- class="craft-description-tress" -->

                        </div>
                    
                        <div class="flex flex-col lg:flex-row gap-2"><!-- class="craft-yarn" -->

                            <h3 class="px-4 text-xl sm:basis-2/5 lg:p-4 lg:text-2xl text-slate-50">organization design</h3><!-- class="craft-subtitle-tress" -->

                            <div class="craft-description-tress">Build an organization designed to brilliantly serve your customers that allows you to reach your business objectives, making the best of your resources.</div><!-- class="craft-description-tress" -->
                            
                        </div>
                    
                    </div>
                        
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 bg-indigo-500"><!-- class="crafts-tuft" -->

                        <div class="flex flex-col lg:flex-row gap-2"><!-- class="craft-yarn" -->

                            <h3 class="px-4 text-xl sm:basis-2/5 lg:p-4 lg:text-2xl text-slate-50">branding</h3><!--  -->

                            <div class="craft-description-tress">Build a coherent brand that appeals to your customers, uncovering, articulating, and sharing the underlying reason your brand exists.</div><!-- class="craft-description-tress" -->
                            
                        </div>
                        
                        <div class="flex flex-col lg:flex-row gap-2"><!-- class="craft-yarn" -->

                            <h3 class="px-4 text-xl sm:basis-2/5 lg:p-4 lg:text-2xl text-slate-50">design</h3><!-- class="craft-subtitle-tress" -->

                            <div class="craft-description-tress">Craft the organization, brand, messages, and components that allow you to deliver consistently to your customers.</div><!-- class="craft-description-tress" -->
                        </div>

                        <div class="flex flex-col lg:flex-row gap-2"><!-- class="craft-yarn" -->

                            <h3 class="px-4 text-xl sm:basis-2/5 lg:p-4 lg:text-2xl text-slate-50">web & apps</h3><!-- class="craft-tress" -->

                            <div class="craft-description-tress">Attract your customers to your website and make them love your brand.</div><!-- class="craft-description-tress" -->
                            
                        </div>

                        <div class="flex flex-col lg:flex-row gap-2"><!-- class="craft-yarn" -->

                            <h3 class="px-4 text-xl sm:basis-2/5 lg:p-4 lg:text-2xl text-slate-50">copywriting</h3><!-- craft-subtitle-tress -->

                            <div class="craft-description-tress">
                                Find your voice to tell an unambiguous message that weaves a deeper connection with your customers and stakeholders.</div><!-- class="craft-description-tress" -->
                            
                        </div>

                        <div class="flex flex-col lg:flex-row gap-2"><!-- class="craft-description-tress" -->

                            <h3 class="px-4 text-xl sm:basis-2/5 lg:p-4 lg:text-2xl text-slate-50">SEO</h3><!-- class="craft-yarn" -->

                            <div class="craft-description-tress">Make sweet the spot where your customers search for you and make them find you.</div><!-- class="craft-description-tress" -->
                        
                        </div>

                    </div>



            <!---------------------------------------
            | ETHOS copiado aqui en 01DEC2022 como bkup pq voy a reducir codigo y sustituir
            ---------------------------------------->

            <section class="container flex flex-col h-full py-10 gap-y-12 bg-neutral-900 text-neutral-50 place-content-center">
                
                <!-- animate_ticker_reverse -->
               
                <div class="relative flex w-full items-center overflow-hidden pb-2 lg:py-3"><!--tabindex="0"z-10items-center-->

                    <div class="flex w-full">

                        <div class="flex animate_ticker_reverse w-[2154px;]" >

                            <!--<span class="flex w-full bg-lime-300">-->

                                <span class="text-2xl inline-flex whitespace-nowrap pt-4 ">                                        
                                    <p class="mb-7 last:mb-0 text-6xl lg:text-9xl">&nbsp;human-centric&nbsp;</p>
                                </span>
                                    
                                <span class="text-2xl  inline-flex whitespace-nowrap pt-4">
                                    <p class="mb-7 last:mb-0 text-6xl lg:text-9xl">&nbsp;human-centric&nbsp;</p>
                                </span>
                    
                                <span class=" text-2xl  inline-flex whitespace-nowrap pt-4">
                                    <p class="mb-7 last:mb-0 text-6xl lg:text-9xl">&nbsp;human-centric&nbsp;</p>
                                </span>
                                
                                <span class="text-2xl  inline-flex whitespace-nowrap pt-4">
                                    <p class="mb-7 last:mb-0 text-6xl lg:text-9xl">&nbsp;human-centric&nbsp;</p>
                                </span>
                                        
                                <span class="text-2xl  inline-flex whitespace-nowrap pt-4">
                                    <p class="mb-7 last:mb-0 text-6xl lg:text-9xl">&nbsp;human-centric&nbsp;</p>
                                </span>
                                    
                                <span class="text-2xl inline-flex whitespace-nowrap pt-4">
                                    <p class="mb-7 last:mb-0 text-6xl lg:text-9xl">&nbsp;human-centric&nbsp;</p>
                                </span>

                            </span>

                        </div>

                    </div>

                </div>


                <!-- animate_ticker_normal -->

                <div class="relative flex w-full items-center overflow-hidden pb-2 lg:py-3"><!--tabindex="0"z-10-->

                    <div class=" flex w-full">

                        <div class="flex animate_ticker_normal w-[2154px;]" >


                                <span class="text-2xl inline-flex whitespace-nowrap pt-4 ">                                        
                                    <p class="mb-7 last:mb-0 text-6xl lg:text-9xl">&nbsp;digital-first design&nbsp;</p>
                                </span>
                                    
                                <span class="text-2xl  inline-flex whitespace-nowrap pt-4">
                                    <p class="mb-7 last:mb-0 text-6xl lg:text-9xl">&nbsp;digital-first design&nbsp;</p>
                                </span>
                    
                                <span class=" text-2xl  inline-flex whitespace-nowrap pt-4">
                                    <p class="mb-7 last:mb-0 text-6xl lg:text-9xl">&nbsp;digital-first design&nbsp;</p>
                                </span>
                                
                                <span class="text-2xl  inline-flex whitespace-nowrap pt-4">
                                    <p class="mb-7 last:mb-0 text-6xl lg:text-9xl">&nbsp;digital-first design&nbsp;;</p>
                                </span>
                                        
                                <span class="text-2xl  inline-flex whitespace-nowrap pt-4">
                                    <p class="mb-7 last:mb-0 text-6xl lg:text-9xl">&nbsp;digital-first design&nbsp;</p>
                                </span>
                                    
                                <span class="text-2xl inline-flex whitespace-nowrap pt-4">
                                    <p class="mb-7 last:mb-0 text-6xl lg:text-9xl">&nbsp;digital-first design&nbsp;</p>
                                </span>

                            </span>

                        </div>

                    </div>
                </div>

                 

                <!-- THIS IS THE ALTERNATIVE 
                    <div class="relative flex w-full overflow-hidden pb-2 lg:py-3 bg-blue-400">///tabindex="0"/z-10///

                    <div class=" flex w-full">///ticker-mask///

                        <div class="flex animate_ticker_reverse w-[2154px;] " >///style="--ticker-width:-2154px;"///

                            <span class="flex w-full p-8 bg-red-500">

                                <span class="text-2xl inline-flex whitespace-nowrap pt-4 ">                                        
                                    <p class="mb-7 last:mb-0 text-9xl">&nbsp;human-centric&nbsp;</p>
                                </span>
                                
                                <span class="text-2xl  inline-flex whitespace-nowrap pt-4">
                                    <p class="mb-7 last:mb-0 text-9xl">&nbsp;human-centric&nbsp;</p>
                                </span>
                    
                                <span class=" text-2xl  inline-flex whitespace-nowrap pt-4">
                                    <p class="mb-7 last:mb-0 text-9xl">&nbsp;human-centric&nbsp;</p>
                                </span>

                                <span class="text-2xl  inline-flex whitespace-nowrap pt-4">
                                    <p class="mb-7 last:mb-0 text-9xl">&nbsp;human-centric&nbsp;</p>
                                </span>
                                        
                                <span class="text-2xl  inline-flex whitespace-nowrap pt-4">
                                    <p class="mb-7 last:mb-0 text-9xl">&nbsp;human-centric&nbsp;</p>
                                </span>
                                    
                                <span class="text-2xl inline-flex whitespace-nowrap pt-4 text-">
                                    <p class="mb-7 last:mb-0 text-9xl">&nbsp;human-centric&nbsp;</p>
                                </span>

                            </span>
                        
                        </div>

                    </div>
                </div>-->
                
            </section>

            <!--3w OVERLAY MENU -->
            
            <section>
                
                <div>
                    <div id="myNav" class="overlay">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="overlay-content">
                        <a href="#">About</a>
                        <a href="#">Services</a>
                        <a href="#">Clients</a>
                        <a href="#">Contact</a>
                        </div>

                  </div>

                    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
        
                    <div class="h-0 w-full fixed z[1] ></div>.overlay top-0 left-0 bg-neutral-700 overflow-hidden duration-300 ease-in-out">
                    <!--.overlay {height: 0%;width: 100%;position: fixed;z-index: 1;top: 0;left: 0;background-color: rgb(0,0,0);background-color: rgba(0,0,0, 0.9);overflow-y: hidden;transition: 0.5s;-->
            
                    <div class="relative top-0 left-0 w-full text-center mt-8"></div>    
                    <!--.overlay-content { position: relative; top: 25%; width: 100%; text-align: center; margin-top: 30px; -->
            
                    <div class="p-2 no-underline text-base text-neutral-50 block duration-150 ease-in-out"></div>  
                    <!-- .overlay a {padding: 8px; text-decoration: none; font-size: 36px; color: #818181; display: block; transition: 0.3s;-->  
        
                        <a href="" class="hover:text-yellow-400 focus:bg-yellow-400"></a>
                        <!--.overlay a:hover, .overlay a:focus {color: #f1f1f1;}-->            
                    
                        <div class="absolute top-5 right-11 text-lg text-sky-200"></div> 
                    <!--.overlay .closebtn {position: absolute; top: 20px; right: 45px; font-size: 60px;} --> 
                    </div>

                </div>



            </section>


            <!---------------------------------------
            | HEADER BUTTONS TO CONTROL HIDDEN MENU  --   07DEC2022
            ---------------------------------------->

            <!--BOTON MENU/CLOSE HIDDEN MENU-PACK ///

            <div class="flex flex-col gap-2 pr-0 py-2 text-2xl lg:text-3xl" >///class="menu-button"id="gotomenu"///

            /// BOTTON MENU HIDDEN MENU ///
                <a href="#concealed" target="_self" class="p-2 h-12 w-12 justify-center align-middle text-center flex hover:bg-neutral-500 hover:rounded-full transition ease-in-out hover:scale-125 hover:text-neutral-50 hover:font-bold duration-200" >
                    <button type="button" >&#9776;</button>
                </a>

                <a href="#wellcome-intro" target="_self" class="p-2 h-12 w-12 justify-center align-middle text-center flex hover:rounded-full hover:bg-neutral-500 hover:text-neutral-50  justify-self-start transition ease-in-out hover:scale-125 hover:font-bold duration-200" >
                    <button type="button" >&times;</button>
                </a>

            </div>
            ---------------------------------------->   

            <!---------------------------------------
            | HIDDEN MENU  --  07DEC2022
            ---------------------------------------->

                       <!-- <section> 
                ///component ///
                <style>
                    #sortbox:checked ~ #sortboxmenu {
                        opacity: 1;
                    }
                </style>

                <div class="relative">

                    <input type="checkbox" id="sortbox" class="hidden absolute">
                    
                    <label for="sortbox" class="flex items-center space-x-1 cursor-pointer">
                        <span class="text-lg">Sort By</span>
                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                    </label>

                    <div id="sortboxmenu" class="absolute mt-1 right-1 top-full min-w-max shadow rounded opacity-0 bg-gray-300 border border-gray-400 transition delay-75 ease-in-out z-10">
                        <ul class="block text-right text-gray-900">
                            <li><a href="#" class="block px-3 py-2 hover:bg-gray-200">Featured</a></li>
                            <li><a href="#" class="block px-3 py-2 hover:bg-gray-200">Newest</a></li>
                            <li><a href="#" class="block px-3 py-2 hover:bg-gray-200">Price: Low to High</a></li>
                            <li><a href="#" class="block px-3 py-2 hover:bg-gray-200">Price: High to Low</a></li>
                        </ul>
                    </div>
                </div>


            </section>--> 

            <section id="concealed" class="container w-screen h-full flex-col content-around md:justify-between bg-neutral-700 p-12 text-neutral-200" ><!-- class="hidden-nav-holder" <div id="myNav" class="overlay"> hidden -->

                <!-- Button to close the overlay navigation -->

                <div class="fixed flex-row justify-between border-x-0 border-y-2 border-solid border-neutral-900 bg-blue-800"> <!-- class="hidden-nav-header-pack"-->
                
                    <!--LOGO-HOLDER-->
                    <div class="logo-holder"><!--  -->
                    
                        <div class="logo"><!--  -->
                            <img src="resources\images\fjmg-logo-white.png" alt="fjmg logotype" width="20px" height="20px"loading="lazy" alt="logo" class="logo-image"><!--  -->
                        </div>

                    </div>

                    <!--BOTON MENU/CLOSE HIDDEN MENU-HOLDER-->
                    <div class="menu-button-holder">

                        <!-- BOTON MENU/CLOSE HIDDEN MENU -->

                        <a href="#gotomenu" target="_blank" class="hidden-menu-off"><!--  -->
                            <button type="button">close</button><!--  -->
                        </a>
                        <!--<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->

                    </div>
                            <!-- The overlay -->
                            <!--<div id="myNav" class="overlay">

                            ///Button to close the overlay navigation ///
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            
                                /// Overlay content 
                                <div class="overlay-content">
                                <a href="#">About</a>
                                <a href="#">Services</a>
                                <a href="#">Clients</a>
                                <a href="#">Contact</a>
                                </div>
                            </div>
            
                            /// Use any element to open/show the overlay navigation menu ///
                            <span onclick="openNav()">open</span>-->
                </div>
                                
                <div class="flex flex-col lg:flex-row gap-y-2 pt-20 pb-8"><!-- class="hidden-nav-pack" -->
                    
                    <!-- HIDDEN MENU NAV -->

                    <nav class="flex flex-col basis-3/5 grow py-8"><!-- class="hidden-nav-menu-tuft -->

                        <ul id="gotomenu" class="text-left text-6xl lg:text-7xl"><!-- class="hidden-nav-menu-link" -->

                            <li><!--  -->
                                <a href="https://www.w3schools.com" target="_blank" class="hover:text-neutral-400 hover:font-bold ease-in-out duration-300">home</a><!-- class="foot-top-pack-tuft-menu-link" -->
                            </li>

                            <li><!--  -->
                                <a href="https://www.w3schools.com" target="_blank" class="foot-top-pack-tuft-menu-link">craft</a><!-- foot-top-pack-tuft-menu-link -->
                            </li>

                            <li><!--  -->
                                <a href="https://www.w3schools.com" target="_blank" class="foot-top-pack-tuft-menu-link">works</a><!--  -->
                            </li>

                            <li><!--  -->
                                <a href="https://www.w3schools.com" target="_blank" class="foot-top-pack-tuft-menu-link">about</a><!--  -->
                            </li>

                            <li><!--  -->
                                <a href="https://www.w3schools.com" target="_blank" class="foot-top-pack-tuft-menu-link">contact</a><!--  -->
                            </li>                 
                        </ul>
                        
                    </nav>

                    <!-- HIDDEN MENU SOCIAL - CHECK EP ANIMATION/STYLE -->

                    <div class="flex flex-col basis-2/5 grow py-8 gap-4 justify-end"><!-- class="hidden-menu-contact-tuft" -->


                        <div class="text-xl lg:text-2xl">Send me an email</div><!-- class="act-call" -->

                            <a href="mailto:fjmgpp@gmail.com" class="inline-block text-2xl sm:text-4xl hover:text-neutral-100 hover:font-bold ease-in-out duration-300">fjmgpp@gmail.com</a><!-- class="emailme" -->
                                
                        <div class="text-xl lg:text-2xl">Follow me</div><!-- class="act-call" -->
                                    
                        <!--SOCIAL ICONS--><!-- QUE ES ESTO + CAMBIAR/descargar ICONOS Y LINKS -->

                        <div class="flex flex-row"><!-- class="icon-pod" -->
                                        
                            <a href="https://www.linkedin.com/in/franciscomontesgomez/" target="_blank" class="inline-block px-4"><!-- class="social-icon" -->
                                
                                <img src="https://assets.website-files.com/5f69856bad1199253301ca0a/62832c779c00898c5d7f4699_LinkedIN_white.svg" loading="lazy" alt="LinkedIn Logo" class="icon"><!--  -->
                            
                            </a>
                                        
                            <a href="https://www.instagram.com/" target="_blank" class="social-icon"><!-- class="social-icon" -->
                                
                                <img src="https://assets.website-files.com/5f69856bad1199253301ca0a/62832c8856a51906523acbab_Instagram_white.svg" loading="lazy" alt="Instagram Logo" class="icon"><!-- class="icon" -->
                            
                            </a>
                                        
                        </div>

                    </div>
                    
                </div>

            </section>


             <!---------------------------------------
            | EXPERIMENTO PAGINAS
            --------------------------------------  
            
            <section class="bg-sky-200 text-black flex h-full w-full origin-top-left -rotate-90 -translate-y-[100vh] overflow-y-scroll overflow-x-hidden absolute"> //// transform  class="outer-wrapper"////

                    <div class="flex flex-row w-[400vw] origin-top-left rotate-90 -translate-y-[100vh] "> ////class="wrapper"////
            
                        <div class="bg-blue-300 flex">slide one</div>
                        <div class="bg-green-300 flex">slide two</div>
                        <div class="bg-red-300 flex">slide three</div>
                        <div class="bg-blue-300 flex">slide four</div>
                        <div class="bg-green-300 flex">slide five</div>
                        <div class="bg-red-300 flex">slide six</div>
            
                        
                    </div>



            </section>-->

             <!---------------------------------------
            | EXPERIMENTO PAGINAS HORIZONTAL SCROLL
            -----------------------------------------
            
                <div class="outer-wrapper">

                    <div class="wrapper">

                        <div class="slide one">slide one</div>
                        <div class="slide two">slide two</div>
                        <div class="slide three">slide three</div>
                        <div class="slide four">slide four</div>
                        <div class="slide five">slide five</div>
                        <div class="slide six">slide six</div>
            
                    </div>

                </div>

            ------------------------------------------>


            <!---------------------------------------
            | FOOTER - back up 09DEC2022
            ---------------------------------------->

            <footer class="container h-auto w-screen flex flex-col justify-between bg-teal-900 text-neutral-50" id="wellcome-foot"><!-- class="foot-holder" -->

                <!-- FOOTER PACK -->
                
                <div class="flex flex-col p-16 lg:p-20 gap-y-16"><!-- class="foot-top-pack" -->

                    <!-- FOOTER TUFT 1 TOP -->

                    <div class="flex flex-col md:flex-row gap-x-16 col-span-2"><!-- class="foot-top-pack-tuft-quest" before class="flex flex-row basis-1/2 grow pb-8"-->

                        <!-- FOOTER TUFT 1 TOP YARN  1.1-->
                        
                        <div class="basis-1/2 font-semibold text-4xl  sm:text-5xl md:text-7xl text-teal-200 font-serif">Do you have a project or idea?</div><!-- class="foot-top-pack-tuft-yarn-1" -->

                        <!-- FOOTER TUFT 1 TOP YARN 1.2-->

                        <div class="basis-1/2 pt-4 text-3xl sm:text-4xl md:text-6xl text-yellow-500">Let's create wonders together</div><!-- class="foot-top-pack-tuft-yarn-2 --> 

                    </div><!-- FOOTER TUFT 1 TOP  ENDS -->

                    <!-- FOOTER TUFT 2 MIDDLE -->

                    <div class="flex flex-col col-2 md:flex-row basis-1/2 grow gap-16 pb-8"><!-- class="foot-top-pack-tuft-quest" -->

                        <!-- FOOTER TUFT 2 MIDDLE YARN 2.1 -->

                        <nav class="basis-1/2 h-full w-full flex flex-col text-2xl sm:text-5xl"><!-- class="foot-top-pack-tuft-menu" -->
                            
                            <!-- FOOTER TUFT 2 MIDDLE YARN 2.1 TRESS NAV -->

                            <ul class="flex flex-col gap-y-2 items-start text-2xl sm:text-4xl md:text-5xl"><!-- class="foot-top-pack-tuft-menu-yarn" -->
    
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


                        <!-- FOOTER TUFT 2 MIDDLE YARN 2.2 CALL+SOCIAL-->

                        <div class="flex flex-col grow gap-y-4 justify-end basis-1/2 "><!-- class="hidden-menu-contact-tuft" -->

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
                                        
                                    <a href="https://www.linkedin.com/in/franciscomontesgomez/" target="_blank" class="inline-block px-4"><!-- class="social-icon" -->
                                                        
                                        <img src="https://assets.website-files.com/5f69856bad1199253301ca0a/62832c779c00898c5d7f4699_LinkedIN_white.svg" loading="lazy" alt="LinkedIn Logo" class="icon"><!--  -->
                                                    
                                    </a>
                                                                
                                    <a href="https://www.instagram.com/" target="_blank" class="social-icon"><!-- class="social-icon" -->
                                                        
                                        <img src="https://assets.website-files.com/5f69856bad1199253301ca0a/62832c8856a51906523acbab_Instagram_white.svg" loading="lazy" alt="Instagram Logo" class="icon"><!-- class="icon" -->
                                                    
                                    </a>

                                </div>

                            </div><!-- FOOTER TUFT 2 MIDDLE TRESS 2.2.2 SOCIAL ENDS -->

                        </div><!-- FOOTER TUFT 2 MIDDLE YARN 2.2 CALL+SOCIAL ENDS-->

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



            <!-- NUNUKU PAGE -->

            <section class="container flex flex-col h-auto w-screen text-nunuku-100"><!--class="slide two"nunuku-->
            
                <!--PAGE 1-->
        
                <!--PAGE 1 HOLDER -->
        
                <div class="p-16 lg:p-20 flex flex-col h-full w-screen ">
        
                    <div class="flex flex-col place-content-strech py-16 h-full w-full">
        
                        <h1 class="flex text-center text-9xl lg:text-[16rem] text-nunuku-100">nunuku</h1>
        
                    </div>
        
                </div><!--PAGE 1 HOLDER -->
        
                <!--PAGE 1 ENDS -->
        
                <!--PAGE 2-->
        
                <!--PAGE 2 HOLDER -->
        
                <div class="p-16 gap-y-12 text-nunuku-100 flex flex-col">
        
                    <h2 class="text-nunuku-100 flex text-2xl lg:text-4xl justify-start justify-items-stretch font-serif font-semibold">Description</h2>
        
                    <div class="flex flex-col lg:flex-row gap-16">
                        
                        <!-- BLOQUE 2.1 --> 
        
                        <div class="flex flex-col gap-y-12 grow shrink basis-1/2">
        
                            <!-- BLOQUE 2.1.1 --> 
        
                            <div class="flex flex-col gap-y-8 justify-start">
        
                                <h3 class="text-2xl font-serif text-nunuku-100">About</h3>
        
                                <div class="flex flex-col text-base lg:text-2xl gap-y-4">
        
                                    <p class="flex">Nunuku is an online beauty and sleep specialist start-up company. Nest is its flagship product, a pillow designed to prevent wrinkles and sleep marks on the face, neck, and décolletage while relieving neck and back pain.</p>
        
                                    <p class="flex">Their team asked us to design and set up their website and online store.</p>
        
                                    <p class="flex">Also, to team up with them to prepare to launch the crowdfunding campaign of their first product, Nest, a beauty pillow.</p>
                                
                                </div>
        
                            </div>                    
        
                        
        
                            <!-- BLOQUE 2.1.2 -->
                        
                            <div class="flex flex-col gap-y-8 justify-start basis-1/2">
        
                                <h3 class="text-2xl font-serif text-nunuku-100">Challenge</h3>
        
                                <div class="flex flex-col text-base lg:text-2xl gap-y-4">
        
                                    <p class="flex">As frequently happens with most start-up companies, the owners had limited financial resources to support all the required activities.</p>
        
                                    <p class="flex">The crowdfunding was paramount to them.</p>
        
                                    <p class="flex">However, launching the website and online store was also needed to secure successful crowdfunding.</p>
                                
                                </div>
        
                            </div>
        
                        </div>
        
                        <!-- BLOQUE 2.1.3 -->
                    
                        <div class="p-12 basis-1/2">
        
                            <picture ><!--imagencita-->
                                <source srcset="{{asset('img/nunuku-home-nav-hero.webp')}}">
                                <img src="{{asset('img/nunuku-home-nav-hero.png')}}" alt="Nunuku website opening" loading="lazy" class=" w-auto h-auto object-cover object-center rounded-lg " />
                            </picture>
                    
                        </div>
        
                    </div>
        
                </div><!--PAGE 2 HOLDER END -->
                
                <!--PAGE 2 ENDS------------------------------------------------------->
        
                <!--PAGE 3------------------------------------------------------------>
        
                <!--PAGE 3 HOLDER -->
                <div class="p-16 text-nunuku-100 flex flex-col">
        
                    <!-- BLOQUE 3.1. -->
        
                    <div class="flex flex-col lg:flex-row gap-16">
        
                        <div class="p-12 basis-1/2">
        
                            <picture ><!--imagencita-->
                                <source srcset="{{asset('img/nunuku-home-nav-hero.webp')}}">
                                <img src="{{asset('img/nunuku-home-nav-hero.png')}}" alt="Nunuku website opening" loading="lazy" class=" w-auto h-auto object-cover object-center rounded-lg " />
                            </picture>
                    
                        </div>
        
                        <div class="flex flex-col gap-y-12 grow shrink basis-1/2">
                                                
                            <div class="flex flex-col gap-y-8 justify-start">
        
                                <h3 class="text-2xl font-serif text-nunuku-100">Approach</h3>
                        
                                <div class="flex flex-col text-base lg:text-2xl gap-y-4">
        
                                    <div class="flex flex-col text-base lg:text-xl gap-y-4">
        
                                        <h4 class="text-xl font-serif text-nunuku-100">Strategic planning</h4>
        
                                        <p class="flex">To face the challenge, several alternative approaches were discussed.</p>
        
                                        <p class="flex">Instead of designing and building the website and online store from scratch —as initially thought— the team decided to use a proven content management platform with online store capabilities, regardless of its design, flexibility, and search engine optimization (SEO) limitations.</p>
        
                                        <p class="flex">The website content and layout would be redesigned and structured according to its purpose after the crowdfunding campaigns end.</p>
                                    </div>
                                
                                    <div class="flex flex-col text-base lg:text-2xl gap-y-4">
        
                                        <h4 class="text-xl font-serif text-nunuku-100">Digital Brand Identity</h4>
        
                                        <p class="flex">The company aimed to convey a serenity, beauty, and softness overall image.</p>
        
                                        <p class="flex">Rounded shapes, sensual curves, and soft transitions were used to convey a maternal sensation.</p>
        
                                        <p class="flex">A rounded font was developed for the logotype, conveying a rocking sensation.</p>
                            
                                        <p class="flex">A simple three-color palette was selected, choosing fashionable soft colors used by the beauty industry.</p>
                            
                                        <p class="flex">As for the typeface, a humanistic sans-serif typeface was chosen allowing the user's browser to decide which font to display. With this, the transferability of the content is guaranteed while maintaining the same appearance.</p>
        
                                    </div>
                                
                                </div>
        
                            </div>
                        
                        </div>  
        
                    </div> <!-- BLOQUE 3 ENDS -->
        
                </div><!-- Page 3 ENDS -->
        
                <!-- PAGE 4 -->
        
                <div class="p-16 gap-y-12 text-nunuku-100 flex flex-col">
        
                    <!-- BLOQUE 4.1 --> 
        
                    <div class="flex flex-col lg:flex-row gap-16 ">
        
                        <div class="flex flex-col gap-y-8 grow shrink basis-1/2 ">
                            
                            <div class="flex flex-col gap-y-8 justify-start">
        
                                <h3 class="text-2xl font-serif text-nunuku-100">Outcome</h3>
        
                                <div class="flex flex-col text-base lg:text-2xl gap-y-4 ">
        
                                    <p class="flex">A logotype and a corporate image manual were created in harmony with the message and image that the company wanted to show toward the market.</p>
        
                                    <p class="flex">A consistent company website was rapidly deployed to initiate selling the company's products.</p>
        
                                    <p class="flex">A coherent image and message was deployed across the various websites.</p>
        
                                    <p class="flex">Two crowdfunding campaigns were successfully launched on different platforms.</p>
                                
                                    <p class="flex">Both required constant testing and adjustments as time ran to influence the audience. These involved continually redesigning and deploying the texts, visuals, design, and structure of both the campaigns and store websites.</p>
                                
                                </div>
        
                            </div>
        
                        </div>
                        
                        <div class="flex flex-col gap-y-8 grow shrink basis-1/2">
        
                            <div class="pt-12 pl-12 pr-12 basis-1/2">
        
                                <picture ><!--imagencita-->
                                    <source srcset="{{asset('img/nunuku-home-nav-hero.webp')}}">
                                    <img src="{{asset('img/nunuku-home-nav-hero.png')}}" alt="Nunuku website opening" loading="lazy" class=" w-auto h-auto object-cover object-center rounded-lg " />
                                </picture>
                    
                            </div>
        
                            <div class="px-12 flex flex-col gap-y-4">
                
                                <ul class="flex flex-col  text-base lg:text-xl justify-start justify-items-stretch">
        
                                    <li>FJMG:</li>
                                        <ul>
                                            <li>Project and project management</li>
                                            <li>Strategic plnning</li>
                                            <li>Webs design</li>
                                            <li>copywriting</li>
                                        </ul>
                                    <li><span class="semibold">Logo and final product design:&nbsp;</span>Amaya Montes Villalba</li>
                                </ul>
                                
                                <ul class="flex flex-col text-base lg:text-xl justify-start justify-items-stretch">
                                    <li><span class="bold">Audiovisual Production:&nbsp;</span>Closet Comunicación</li>
                                    <li><span class="semibold">Photographers:&nbsp;</span>Xaime Cortizo</li>
                                    <li><span class="semibold">Models:&nbsp;</span>XXX</li>
                                    <li><span class="semibold">Social Media:&nbsp;</span>Gabriela López Bencid & XXX</li>                           
                                </ul>
        
                            </div>
        
                        </div>
        
                    </div>
                        
                </div>
        
            </section>

<!---------------------------->


        @livewireScripts

    </body>
</html>

