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

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="w-screen h-screen flex justify-center items-center p-1">
            <div class="max-w-screen-md">
                <div
                    class="text-center flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 overflow-hidden"
                >
                    <img
                        class="object-cover w-full rounded-t-lg h-96 md:h-auto"
                        src="{{ asset('employee/images/'.$employee->photo)}}"
                        alt=""
                    />
                    <div
                        class="flex flex-col justify-between leading-normal w-full px-2 md:px-3 lg:px-4 py-4"
                    >
                        <h2
                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                        >
                            {{$employee->display_name}}
                        </h2>
                        <div class="mb-3">
                            <p
                                class="font-normal text-gray-700 dark:text-gray-400"
                            >
                                Name: {{$employee->legal_name}}
                            </p>
                            <p
                                class="font-normal text-gray-700 dark:text-gray-400"
                            >
                                Department: {{$employee->department}}
                            </p>
                            <p
                                class="font-normal text-gray-700 dark:text-gray-400"
                            >
                                Designation: {{$employee->current_position}} at
                                <strong>Innova Infosys LTD</strong>
                            </p>
                            <p
                                class="font-normal text-gray-700 dark:text-gray-400"
                            >
                                Emergency Contact:
                                <a
                                    href="tel:{{$employee->emergency_contact}}"
                                ></a
                                >{{$employee->emergency_contact}}
                            </p>
                            <p
                                class="font-normal text-gray-700 dark:text-gray-400"
                            >
                                Email:
                                <a
                                    href="mailto:{{$employee->email}}"
                                    >{{$employee->email}}</a
                                >
                            </p>
                        </div>
                        <div class="flex text-center justify-center space-x-1">
                            <span>Blood Group: </span>
                            <p class="text-red-700 dark:text-red-400 font-bold">
                                {{$employee->blood_group}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
