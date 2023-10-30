<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--lick-theme.css if you want default styling -->
        <link
            rel="stylesheet"
            type="text/css"
            href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
        />
        <!-- slick-theme.css if you want default styling -->
        <link
            rel="stylesheet"
            type="text/css"
            href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"
        />

        <!-- Remote css cdn -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
            crossorigin="anonymous"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

        <!-- local style -->
        <link rel="stylesheet" href="{{ asset('/css/contact_page.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/careers_page.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/mian.css') }} " />

        <!--paid font-awesome link  -->
        <link
            rel="stylesheet"
            href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css"
        />

        <!-- favicon -->
        <link
            rel="shortcut icon"
            href="{{ asset('favicon.png') }}"
            type="image/x-icon"
        />
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-2YBWYLJWHQ"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-2YBWYLJWHQ');
        </script>

        <!-- website title -->
        <title>Innova Infosys</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
            rel="stylesheet"
        />
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body class="relative">
        <!-- navigation start-->
        <header id="nav" class="border-b fixed top-0 w-screen z-50">
            <div
                class="mx-auto flex justify-between h-14 max-w-screen-xl items-center gap-8"
            >
                <a class="text-blue-400 transition" href="/">
                    <img
                        class="w-40"
                        src="{{ asset('logo/logo.png') }}"
                        alt="logo"
                    />
                </a>

                <div class="items-center h-full md:justify-between">
                    <nav
                        aria-label="Global"
                        id="navbar"
                        class="hidden mobile-menu absolute top-[56px] left-0 w-full bg-white md:block md:relative"
                    >
                        <ul
                            class="flex flex-col items-center gap-6 text-md md:text-sm"
                        >
                            <li>
                                <a
                                    href="{{ url('/') }}"
                                    class="nav-link transition py-1"
                                >
                                    Home
                                </a>
                            </li>
                            <li>
                                <a
                                    href="{{ ROUTE('CAREERS') }}"
                                    class="text-gray-700 transition hover:opacity-75"
                                >
                                    Careers
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <button
                        id="nav-button"
                        class="block rounded p-2.5 text-gray-600 transition md:hidden"
                    >
                        <space-y-5n class="sr-only">Toggle menu</space-y-5n>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </header>
        <body>
            @yield('secondContent')

            <!-- footer -->
            <footer class="bg-[#f4f4f4] mt-20">
                <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
                    <div class="lg:grid lg:grid-cols-2">
                        <div
                            class="border-b border-gray-100 py-8 lg:order-last lg:border-b-0 lg:border-s lg:py-16 lg:ps-16"
                        >
                            <div class="mt-8 space-y-4 lg:mt-0">
                                <span
                                    class="hidden h-1 w-10 rounded bg-[#4fbeea] lg:block"
                                ></span>

                                <div>
                                    <h2
                                        class="text-2xl font-medium text-gray-900"
                                    >
                                        Request a Demo
                                    </h2>

                                    <p class="mt-4 max-w-lg text-gray-500">
                                        Experience the power of our software
                                        firsthand! Request a personalized demo
                                        and let our team guide you through the
                                        features and capabilities that make our
                                        software solutions stand out. Discover
                                        how our technology can transform your
                                        business processes and drive your
                                        success.
                                    </p>
                                </div>
                                <form class="mt-6 w-full">
                                    <label for="UserEmail" class="sr-only">
                                        Email
                                    </label>

                                    <div
                                        class="rounded-md border border-gray-100 p-2 focus-within:ring sm:flex sm:items-center sm:gap-4"
                                    >
                                        <input
                                            type="email"
                                            id="UserEmail"
                                            placeholder="Enter your email"
                                            class="w-full border-none focus:border-transparent focus:ring-transparent sm:text-sm"
                                        />

                                        <button
                                            class="mt-1 w-full bg-[#4fbeea] px-6 py-3 text-sm font-bold uppercase tracking-wide text-white transition-none hover:bg-[#4fbeea] sm:mt-0 sm:w-auto sm:shrink-0"
                                        >
                                            Send
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="py-8 lg:py-16 lg:pe-16">
                            <img
                                class="w-40"
                                src="{{ asset('logo/logo.png') }}"
                                alt="logo"
                            />
                            <div
                                class="mt-8 flex justify-between gap-8 sm:grid-cols-3"
                            >
                                <div>
                                    <p class="font-medium text-gray-900">
                                        Services
                                    </p>

                                    <ul class="mt-6 space-y-4 text-sm">
                                        <li>
                                            <a
                                                href="{{ url('/') }}"
                                                class="text-gray-700 transition hover:opacity-75"
                                            >
                                                Finance and Banking
                                            </a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ url('/') }}"
                                                class="text-gray-700 transition hover:opacity-75"
                                            >
                                                Hospital Management
                                            </a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ url('/') }}"
                                                class="text-gray-700 transition hover:opacity-75"
                                            >
                                                E-commerce and Retail
                                            </a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ url('/') }}"
                                                class="text-gray-700 transition hover:opacity-75"
                                            >
                                                Logistics
                                            </a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ url('/') }}"
                                                class="text-gray-700 transition hover:opacity-75"
                                            >
                                                Manufacturing
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div>
                                    <p class="font-medium text-gray-900">
                                        Company
                                    </p>

                                    <ul class="mt-6 space-y-4 text-sm">
                                        <li>
                                            <a
                                                href="{{ route('ABOUT') }}"
                                                class="text-gray-700 transition hover:opacity-75"
                                            >
                                                About
                                            </a>
                                        </li>

                                        <!-- <li>
                                            <a
                                                href="{{ url('/') }}"
                                                class="text-gray-700 transition hover:opacity-75"
                                            >
                                                Meet the Team
                                            </a>
                                        </li> -->
                                    </ul>
                                </div>

                                <div>
                                    <p class="font-medium text-gray-900">
                                        Helpful Links
                                    </p>

                                    <ul class="mt-6 space-y-4 text-sm">
                                        <li>
                                            <a
                                                href="{{ route('CONTACT') }}"
                                                class="text-gray-700 transition hover:opacity-75"
                                            >
                                                Contact
                                            </a>
                                        </li>

                                        <!-- <li>
                                            <a
                                                href="#"
                                                class="text-gray-700 transition hover:opacity-75"
                                            >
                                                FAQs
                                            </a>
                                        </li> -->

                                        <li>
                                            <a
                                                href="{{ ROUTE('CAREERS') }}"
                                                class="text-gray-700 transition hover:opacity-75"
                                            >
                                                career
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="mt-8 border-t border-gray-100 pt-8">
                                <ul class="flex flex-wrap gap-4 text-xs">
                                    <!-- <li>
                                        <a
                                            href="#"
                                            class="text-gray-500 transition hover:opacity-75"
                                        >
                                            Terms & Conditions
                                        </a>
                                    </li> -->

                                    <li>
                                        <a
                                            href="{{ route('PRIVACY') }}"
                                            class="text-gray-500 transition hover:opacity-75"
                                        >
                                            Privacy Policy
                                        </a>
                                    </li>

                                    <li>
                                        <a
                                            href="#"
                                            class="text-gray-500 transition hover:opacity-75"
                                        >
                                            Cookies
                                        </a>
                                    </li>
                                </ul>

                                <p class="mt-8 text-xs text-gray-500">
                                    &copy; 2023. Innova Infosys. All rights
                                    reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </body>

        <!-- all scripts -->
        <!-- bootstrap -->

        <!-- jQuary cdn -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <!-- sliks slider default cdn -->
        <script
            type="text/javascript"
            src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
        ></script>

        <!-- sliks config -->
        <script src="{{ asset('js/slider.js') }}"></script>
        <script src="../js/mixitup.js"></script>
        <script>
            var mixer = mixitup(".job-post", {
                animation: {
                    enable: true,
                    effects: "fade translateY(-10px)",
                    duration: 300,
                },
            });
        </script>
        <script>
            // Grab HTML Elements
            const btn = document.querySelector("#nav-button");
            const menu = document.querySelector(".mobile-menu");

            // Add Event Listeners
            btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
            });
        </script>
        <!-- ckeditor -->
    </body>
</html>
