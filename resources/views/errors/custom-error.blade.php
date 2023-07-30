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

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="">
        <div class="w-full my-4 flex justify-center items-center">
            <div class="max-w-screen-md">
                <div
                    class="py-10 text-center flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:max-w-xl hover:bg-gray-100 overflow-hidden"
                >
                    <div>
                        <div class="w-3/4 mx-auto py-3 mb-2">
                            <img
                                class="w-40 mx-auto"
                                src="{{ asset('logo\logo.png') }}"
                                alt=""
                            />
                        </div>

                        <div>
                            <h2
                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900"
                            >
                                Innova Infosys Limited
                            </h2>
                        </div>
                        <!-- address -->
                        <div class="mb-3">
                            <p class="mb-1 text-xs leading-3">
                                House: 10, Block: C, Main Road, <br />
                                Banasree, Rampura, Dhaka-1219 <br />
                                hq@innovainfosys.com | +8801886384240
                            </p>
                        </div>
                        <!-- disclaimer -->
                        <div
                            class="flex justify-center items-baseline mx-1 mb-4 px-20 lg:px-48"
                        >
                            <div class="flex flex-col">
                                <div
                                    class="px-2 py-1 mb-2 flex items-center justify-center border bg-red-200"
                                >
                                    <div class="leading-5">
                                        <p class="text-red-600 font-bold">
                                            Invalid Employee ID.
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    We don't have any employee with id
                                    <strong>{{ $erbn }}</strong
                                    >, This is may be an error made by you or
                                    someone is trying to cheat you using the
                                    name of Innova Infosys Limited.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
