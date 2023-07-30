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
    <body class="">
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
                                class="w-40 mx-auto"
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
                            @if($employee->status == 'In Servics')
                            <div
                                class="h-3 w-3 rounded-full bg-green-500"
                            ></div>
                            <div
                                class="flex w-full items-center justify-center"
                            >
                                <p class="leading-5">
                                    The bearer of the id number
                                    <strong> {{$employee->public_id}}</strong>
                                    is a legitimate
                                    <span class="text-red-600"> current </span>
                                    employee of
                                    <strong>Innova Infosys Limited.</strong>
                                </p>
                            </div>
                            @else

                            <div
                                class="flex w-full items-center justify-center"
                            >
                                <p class="text-red-600 leading-5">
                                    The bearer of the id number
                                    <strong>{{$employee->public_id}}</strong>
                                    was a legitimate employee of
                                    <strong>Innova Infosys Limited</strong>
                                    with status {{$employee->status}}.
                                </p>
                            </div>
                            @endif
                        </div>
                    </div>
                    <img
                        class="h-40 md:h-80"
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
                        <div class="">
                            <p
                                class="font-normal text-gray-700 dark:text-gray-400"
                            >
                                <span class="font-bold">Legal Name: </span>
                                {{$employee->legal_name}}
                            </p>
                            <p
                                class="font-normal text-gray-700 dark:text-gray-400"
                            >
                                <span class="font-bold">Empoyee ID: </span>
                                {{$employee->public_id}}
                            </p>
                            <p
                                class="font-normal text-gray-700 dark:text-gray-400"
                            >
                                <span class="font-bold">ERBN: </span>
                                {{$employee->erbn}}
                            </p>
                            <p
                                class="font-normal text-gray-700 dark:text-gray-400"
                            >
                                <span class="font-bold">Department: </span>
                                {{$employee->department}}
                            </p>
                            <p
                                class="font-normal text-gray-700 dark:text-gray-400"
                            >
                                <span class="font-bold">Designation: </span>
                                {{$employee->current_position}}
                            </p>

                            <p
                                class="font-normal text-gray-700 dark:text-gray-400"
                            >
                                <span class="font-bold"
                                    >Emergency Contact:
                                </span>

                                <a
                                    href="tel:{{$employee->emergency_contact}}"
                                ></a
                                >{{$employee->emergency_contact}}
                            </p>
                            <p
                                class="font-normal text-gray-700 dark:text-gray-400"
                            >
                                <span class="font-bold">Email: </span>

                                <a
                                    href="mailto:{{$employee->email}}"
                                    >{{$employee->email}}</a
                                >
                            </p>

                            <p
                                class="font-normal text-gray-700 dark:text-gray-400"
                            >
                                <span class="font-bold">Issue Date: </span>

                                <a
                                    href="mailto:{{$employee->email}}"
                                    >{{$employee->id_card_issue_date}}</a
                                >
                            </p>
                            <p
                                class="font-normal text-gray-700 dark:text-gray-400"
                            >
                                <span class="font-bold">Expiry Date: </span>

                                <a
                                    href="mailto:{{$employee->email}}"
                                    >{{$employee->id_card_expiry_date}}</a
                                >
                            </p>
                        </div>
                        <div class="flex text-center justify-center space-x-1">
                            <span class="font-bold">Blood Group: </span>
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
