<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config("app.name", "Laravel") }}</title>
        <!-- remote css -->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />

        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
            crossorigin="anonymous"
        />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Page not found</title>
    </head>
    <body>
        <div
            class="bg-gray-200 w-full px-16 md:px-0 h-screen flex items-center justify-center"
        >
            <div
                class="bg-white border border-gray-200 flex flex-col items-center justify-center px-4 md:px-8 lg:px-24 py-8 rounded-lg shadow-2xl"
            >
                <div>
                    <img
                        class="w-40 mb-20"
                        src="{{ asset('logo/logo.png') }}"
                        alt=""
                    />
                </div>
                <p
                    class="text-6xl md:text-7xl lg:text-9xl font-bold tracking-wider text-gray-300"
                >
                    404
                </p>
                <p
                    class="text-2xl md:text-3xl lg:text-5xl font-bold tracking-wider text-gray-500 mt-4"
                >
                    Page Not Found
                </p>
                <p class="text-gray-500 mt-4 pb-4 border-b-2 text-center">
                    Sorry, the page you are looking for could not be found.
                </p>
                <a
                    href="{{ url('/') }}"
                    class="flex items-center space-x-2 bg-blue-600 hover:bg-blue-700 text-gray-100 px-4 py-2 mt-6 rounded transition duration-150"
                    title="Return Home"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                    <span>Return Home</span>
                </a>
            </div>
        </div>
    </body>
</html>
