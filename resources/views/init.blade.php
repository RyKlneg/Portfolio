<!doctype html>
<html>
        <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
  <body>
    <!-- Navbar -->
    <nav class="bg-dark border-dark py-2.5 dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
            <a href="#" class="flex items-center">
                <img src="{{ asset('images/LOGO.png') }}" alt="carpeta" class="h-9 mr-3 sm:h-12 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-4xl"/>
            </a>
            <!-- Icono de  hamburguesa -->
            <div class="flex items-center lg:order-3">
                <div class="hidden mt-2 mr-4 sm:inline-block">
                    <span></span>
                </div>
                <button data-collapse-toggle="mobile-menu-2" type="button"
                class="inline-flex item-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2
                focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="true">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
                </svg>
                </button>
            </div>
            <!-- Elmentos del navbar -->
            <div id="mobile-menu-2" class="hidden items-center justify-between w-full lg:flex lg:w-auto lg:order-1">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0 lg:justify-center lg:items-center lg:mx-auto">
                    <li>
                        <a href="#"
                        class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded lg:bg-transparent lg:text-blue-700 lg:p-0 dark:text-white cursor-pointer"
                        aria-current="page">About me</a>
                    </li>
                    <li>
                        <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-blue-700 lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent cursor-pointer">Skills</a>
                    </li>
                    <li>
                        <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-blue-700 lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent cursor-pointer">Experience</a>
                    </li>
                    <li>
                        <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-blue-700 lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent cursor-pointer">Proyects</a>
                    </li>
                    <li>
                        <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-blue-700 lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent cursor-pointer">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="w-full flex items-center min-h-screen overflow-hidden bg-gradient-to-b from-gray-900 to-black">
        <div class="grid max-w-screen-xl px-4 py-4 mx-auto lg:gap-0 xl:gap-0 lg:py-16 lg:grid-cols-12 border-t border-b rounded border-white">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-bold leading-none tracking-tight md:text-5xl xl:text-6xl text-white">Edgar Zapata Becerra</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-400 lg:mb-8 md:text-lg lg:text-xl text-justify">Hello! 👋 I am passionate about software development and creating digital experiences.
                    I like to build applications that not only work well, but are also intuitive and enjoyable to use. I work primarily with Laravel, Python, Vue.js, and Flutter, combining design and logic to bring complete solutions to life.
                    I firmly believe that code can change the way people interact with technology, which is why I strive to continue learning and contributing to each project.
                    <br />
                <!-- Social icons -->
                <div class="flex items-center mt-4 space-x-4">
                    <!-- GitHub -->
                    <a href="https://github.com/" target="_blank" rel="noopener noreferrer" class="text-gray-300 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 .5C5.65.5.5 5.65.5 12c0 5.09 3.29 9.4 7.86 10.93.57.1.78-.25.78-.55 0-.27-.01-1-.02-1.96-3.2.7-3.88-1.54-3.88-1.54-.52-1.33-1.27-1.69-1.27-1.69-1.04-.71.08-.7.08-.7 1.15.08 1.76 1.18 1.76 1.18 1.02 1.74 2.67 1.24 3.32.95.1-.74.4-1.24.72-1.53-2.56-.29-5.26-1.28-5.26-5.69 0-1.26.45-2.28 1.18-3.09-.12-.29-.51-1.46.11-3.05 0 0 .97-.31 3.18 1.18a11.08 11.08 0 012.9-.39c.98 0 1.98.13 2.91.39 2.2-1.5 3.16-1.18 3.16-1.18.62 1.59.23 2.76.11 3.05.74.81 1.18 1.83 1.18 3.09 0 4.42-2.71 5.4-5.29 5.68.41.35.78 1.05.78 2.12 0 1.53-.01 2.76-.01 3.14 0 .3.2.66.79.55A11.53 11.53 0 0023.5 12C23.5 5.65 18.35.5 12 .5z"/></svg>
                    </a>
                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer" class="text-gray-300 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M4.98 3.5C4.98 4.88 3.8 6 2.4 6S-.2 4.88-.2 3.5C-.2 2.12.98 1 2.4 1s2.58 1.12 2.58 2.5zM.24 8.51h4.32V24H.24V8.51zM8.99 8.51h4.14v2.08h.06c.58-1.1 2-2.26 4.12-2.26 4.41 0 5.22 2.9 5.22 6.67V24h-4.32v-7.4c0-1.76-.03-4.02-2.45-4.02-2.46 0-2.84 1.92-2.84 3.9V24H8.99V8.51z"/></svg>
                    </a>
                </div>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex items-center justify-center">
                <div class="transform transition-transform duration-300 hover:scale-105 hover:rotate-3 hover:shadow-2xl rounded-lg">
                    <img src="{{ asset('images/LOGO_1.png') }}" alt="developer illustration" class="block max-w-full h-auto"/>
                </div>
            </div>
        </div>
    </section>
    <!-- Skills -->
    <section class="w-full flex items-center min-h-screen overflow-hidden bg-gradient-to-b from-black to-gray-900">
        <div class="grid max-w-screen-xl px-4 py-4 mx-auto lg:gap-0 xl:gap-0 lg:py-16 lg:grid-cols-12"></div>
    </section>
    <section class="w-full flex items-center min-h-screen overflow-hidden bg-gradient-to-b from-gray-900 to-black">
    </section>
    <section class="w-full flex items-center min-h-screen overflow-hidden bg-gradient-to-b from-black to-gray-900">
    </section>
    <section class="w-full flex items-center min-h-screen overflow-hidden bg-gradient-to-b from-gray-900 to-black">
    </section>
  </body>
</html>
