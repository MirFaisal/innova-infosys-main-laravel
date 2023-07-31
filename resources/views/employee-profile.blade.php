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
                            @if($employee->status == 'In Service')
                            <div
                                class="px-2 py-1 flex w-full items-center justify-center border bg-green-200"
                            >
                                <p class="leading-5">
                                    <span class="text-green-600 font-bold">
                                        Current Employee
                                    </span>
                                </p>
                            </div>
                            @else
                            <div class="flex flex-col">
                                <div
                                    class="px-2 py-1 mb-2 flex items-center justify-center border bg-red-200"
                                >
                                    <p class="leading-5">
                                        <span class="text-red-600 font-bold">
                                            Former Employee
                                        </span>
                                    </p>
                                </div>

                                <div
                                    class="flex w-full items-center justify-center"
                                >
                                    <p class="text-red-600 leading-5">
                                        The bearer of the id number
                                        <strong
                                            >{{$employee->public_id}}</strong
                                        >
                                        was a legitimate employee of
                                        <strong>Innova Infosys Limited</strong>
                                        with status
                                        <strong> {{$employee->status}}</strong
                                        >.
                                    </p>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                    <div
                        class=" border-2 p-1 {{$employee->status == 'In Service' ? ' border-green-600':'border-red-600' }}"
                    >
                        <img
                            class="h-40 md:h-80"
                            src="{{ asset('employee/images/'.$employee->photo)}}"
                            alt=""
                        />
                    </div>
                    <div
                        class="w-3/4 flex flex-col justify-between leading-normal px-2 md:px-3 lg:px-4 py-4"
                    >
                        <!-- Display Name -->
                        @if($employee->display_name)
                        <h2
                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900"
                        >
                            {{$employee->display_name}}
                        </h2>
                        @endif
                        <div class="w-full">
                            <!-- legal name -->
                            @if($employee->legal_name)
                            <p
                                class="grid grid-cols-2 gap-x-4 font-normal text-gray-700"
                            >
                                <span class="font-bold text-end"
                                    >Legal Name:
                                </span>
                                <span
                                    class="text-start"
                                    >{{$employee->legal_name}}</span
                                >
                                <!-- Employee id -->
                            </p>
                            @endif
                            <!-- employee id -->
                            @if($employee->public_id)
                            <p
                                class="grid grid-cols-2 gap-x-4 font-normal text-gray-700"
                            >
                                <span class="font-bold text-end"
                                    >Employee ID:
                                </span>
                                <span class="text-start">
                                    {{$employee->public_id}}
                                </span>
                            </p>
                            @endif @if($employee->erbn)
                            <!-- ERBN -->
                            <p
                                class="grid grid-cols-2 gap-x-4 font-normal text-gray-700"
                            >
                                <span class="font-bold text-end">ERBN: </span>
                                <span
                                    class="text-start"
                                    >{{$employee->erbn}}</span
                                >
                            </p>
                            @endif @if($employee->department)
                            <!-- Department -->
                            <p
                                class="grid grid-cols-2 gap-x-4 font-normal text-gray-700"
                            >
                                <span class="font-bold text-end"
                                    >Department:
                                </span>
                                <span
                                    class="text-start"
                                    >{{$employee->department}}</span
                                >
                            </p>
                            @endif @if($employee->current_position)
                            <!-- Degignation -->
                            <p
                                class="grid grid-cols-2 gap-x-4 font-normal text-gray-700"
                            >
                                <span class="font-bold text-end"
                                    >Designation:
                                </span>
                                <span class="text-start">
                                    {{$employee->current_position}}
                                </span>
                            </p>
                            @endif @if($employee->emergency_contact)
                            <!-- Emergency contact -->
                            <p
                                class="grid grid-cols-2 gap-x-4 font-normal text-gray-700"
                            >
                                <span class="font-bold text-end"
                                    >Emergency Contact:
                                </span>

                                <a
                                    class="text-start"
                                    href="tel:{{$employee->emergency_contact}}"
                                >
                                    {{$employee->emergency_contact}}
                                </a>
                            </p>
                            @endif @if($employee->email)
                            <!-- email -->
                            <p
                                class="grid grid-cols-2 gap-x-4 font-normal text-gray-700"
                            >
                                <span class="font-bold text-end">Email: </span>

                                <a
                                    class="text-start"
                                    href="mailto:{{$employee->email}}"
                                    >{{$employee->email}}</a
                                >
                            </p>
                            @endif @if($employee->id_card_issue_date)
                            <!-- Issue date -->
                            <p
                                class="grid grid-cols-2 gap-x-4 font-normal text-gray-700"
                            >
                                <span class="font-bold text-end"
                                    >Issue Date:
                                </span>

                                <span
                                    class="text-start"
                                    >{{$employee->id_card_issue_date}}</span
                                >
                            </p>
                            @endif @if($employee->id_card_expiry_date)
                            <!-- expiry date -->
                            <p
                                class="grid grid-cols-2 gap-x-4 font-normal text-gray-700"
                            >
                                <span class="font-bold text-end"
                                    >Expiry Date:
                                </span>

                                <span
                                    class="text-start"
                                    >{{$employee->id_card_expiry_date}}</span
                                >
                            </p>
                            @endif
                        </div>
                        <!-- blood Group -->
                        @if($employee->blood_group)
                        <div
                            class="grid grid-cols-2 gap-x-4 text-center space-x-1"
                        >
                            <span class="font-bold text-end"
                                >Blood Group:
                            </span>
                            <span class="text-start text-red-700 font-bold">
                                {{$employee->blood_group}}
                            </span>
                        </div>
                        @endif
                    </div>

                    <!-- Innova infosys authentication -->
                    <div>
                        @if($host == 'innovainfosys.com')
                        <div class="leading-1.5">
                            Information is verified by the Authority of Innova
                            Infosys Limited since the domain you are visiting is
                            <a
                                class="text-blue-600 font-bold"
                                href="https://innovainfosys.com"
                                >innova Infosys</a
                            >
                            <p class="px-20">
                                We, hereby assure you that no forgery or cross
                                scripting has been occured while loading this
                                webpage. Therefore, you can accept the provided
                                information as valid. <br />
                                <span
                                    class="inline-block mt-3 border-b border-black"
                                    >[Amar Sign]</span
                                >
                                <br />CEO <br />Innova Infosys Limited
                            </p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
