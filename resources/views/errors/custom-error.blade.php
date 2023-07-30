<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config("app.name", "Laravel") }}</title>

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
    </head>
    <body>
        <!-- component -->
        <div
            class="w-full h-screen flex justify-center items-center overflow-hidden"
        >
            <div class="max-w-screen-md">
                <div
                    class="text-center flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 overflow-hidden"
                >
                    <div>
                        <div class="w-3/4 mx-auto py-3">
                            <img
                                class="w-40 mx-auto pt-10"
                                src="{{ asset('logo\logo.png') }}"
                                alt=""
                            />
                        </div>

                        <div>
                            <h2
                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                            >
                                Innova Infosys Limited
                            </h2>
                        </div>
                        <!-- address -->
                        <div class="mb-3">
                            <p class="mb-1 text-xs leading-3">
                                House # 10, Block #C Main Road, <br />
                                Banasree Rampura, Dhaka-1219 <br />
                                info@innovainfosys.com | +8801830360494
                            </p>
                        </div>
                        <!-- disclaimer -->
                        <div
                            class="flex justify-center items-baseline mx-1 mb-4 px-20"
                        >
                            <div
                                class="flex w-full items-center justify-center"
                            >
                                <p class="text-red-600 leading-5">
                                    <strong>The employee id is not valid</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
