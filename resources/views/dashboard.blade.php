<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Dashboard") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

                    <div
                        class="overflow-x-auto rounded-lg border border-gray-200"
                    >
                        <table
                            class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm"
                        >
                            <thead
                                class="ltr:text-left rtl:text-right text-center"
                            >
                                <tr>
                                    <th
                                        class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                                    >
                                        SN
                                    </th>
                                    <th
                                        class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                                    >
                                        Name
                                    </th>
                                    <th
                                        class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                                    >
                                        Send at
                                    </th>
                                    <th
                                        class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                                    >
                                        Email
                                    </th>
                                    <th
                                        class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                                    >
                                        Message
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 text-center">
                                @foreach($allMessages as $key=>$message)
                                <tr class="cursor-pointer">
                                    <td
                                        class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                                    >
                                        {{ $key + 1 }}
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                                    >
                                        {{$message->name}}
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-4 py-2 text-gray-700"
                                    >
                                        {{$message->getFormatDate()}} at
                                        {{$message->getFormatTime()}}
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-4 py-2 text-gray-700"
                                    >
                                        {{$message->contact_email}}
                                    </td>
                                    <td
                                        data-bs-toggle="modal"
                                        data-bs-target="#{{$message->id}}"
                                        class="whitespace-nowrap px-4 py-2 text-gray-700"
                                    >
                                        {!!
                                        substr(html_entity_decode($message->message),
                                        0 ,10).".."!!}
                                    </td>
                                    <!-- Modal -->
                                    <!-- <div
                                        class="modal fade"
                                        id="{{$message->id}}"
                                        tabindex="-1"
                                        aria-labelledby="exampleModalLabel"
                                        aria-hidden="true"
                                    >
                                        <div
                                            class="modal-dialog modal-dialog-scrollable modal-dialog-centered"
                                        >
                                            <div
                                                class="modal-content"
                                            >
                                                <div class="modal-header">
                                                    <button
                                                        type="button"
                                                        class="btn-close"
                                                        data-bs-dismiss="modal"
                                                        aria-label="Close"
                                                    >
                                                        X
                                                    </button>
                                                </div>
                                                <div
                                                    class="modal-body text-start"
                                                >
                                                    {!!
                                                    html_entity_decode($message->message)
                                                    !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div
                                        class="modal fade"
                                        id="{{$message->id}}"
                                        data-bs-backdrop="static"
                                        data-bs-keyboard="false"
                                        tabindex="-1"
                                        aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true"
                                    >
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1
                                                        class="modal-title fs-5"
                                                        id="staticBackdropLabel"
                                                    >
                                                        {{$message->contact_email}}
                                                    </h1>
                                                    <button
                                                        type="button"
                                                        class="btn-close"
                                                        data-bs-dismiss="modal"
                                                        aria-label="Close"
                                                    >
                                                        X
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div>
                                                        {!! $message->message!!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
