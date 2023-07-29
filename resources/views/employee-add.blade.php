<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Employee add.
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form
                        method="post"
                        action="{{ route('employee.store') }}"
                        enctype="multipart/form-data"
                    >
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label
                                    for="public_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Public Id</label
                                >
                                <input
                                    name="public_id"
                                    type="text"
                                    id="public_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required
                                />
                            </div>
                            <div>
                                <label
                                    for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Display Name</label
                                >
                                <input
                                    name="display_name"
                                    type="text"
                                    id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required
                                />
                            </div>
                            <div>
                                <label
                                    for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Legal Name</label
                                >
                                <input
                                    name="legal_name"
                                    type="text"
                                    id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required
                                />
                            </div>
                            <div>
                                <label
                                    for="dob"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Date of Birth</label
                                >
                                <input
                                    name="dob"
                                    type="date"
                                    id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required
                                />
                            </div>
                            <div>
                                <label
                                    for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >NID Card Number</label
                                >
                                <input
                                    name="nid_card_number"
                                    type="text"
                                    id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required
                                />
                            </div>
                            <div>
                                <label
                                    for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Email</label
                                >
                                <input
                                    name="email"
                                    type="email"
                                    id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required
                                />
                            </div>
                            <div>
                                <label
                                    for="phone"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Phone Number</label
                                >
                                <input
                                    name="phone"
                                    type="text"
                                    id="phone"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required
                                />
                            </div>
                            <div>
                                <label
                                    for="file_input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="file_input"
                                    >Image</label
                                >
                                <input
                                    name="photo"
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="file_input"
                                    type="file"
                                />
                            </div>
                            <div>
                                <label
                                    for="blood_group"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Blood Group</label
                                >
                                <select
                                    name="blood_group"
                                    id="blood_group"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                >
                                    <option selected>Select blood group</option>
                                    <option value="A Positive">
                                        A RhD positive (A+)
                                    </option>
                                    <option
                                        value="A Negative
"
                                    >
                                        A negative (A-)
                                    </option>
                                    <option value="B positive">
                                        B positive (B+)
                                    </option>
                                    <option value="B Negative">
                                        B negative (B-)
                                    </option>
                                    <option value="O positive">
                                        O positive (O+)
                                    </option>
                                    <option value="O Negative">
                                        O negative (O-)
                                    </option>
                                    <option value="AB positive">
                                        AB positive (AB+)
                                    </option>
                                    <option value="AB Negative">
                                        AB negative (AB-)
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label
                                    for="emergency_contact"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Emergency Contact</label
                                >
                                <input
                                    name="emergency_contact"
                                    type="text"
                                    id="phone"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required
                                />
                            </div>
                            <div>
                                <label
                                    for="erbn"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Employee Register Book Number</label
                                >
                                <input
                                    name="erbn"
                                    type="text"
                                    id="erbn"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                />
                            </div>
                            <div>
                                <label
                                    for="department"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Department</label
                                >
                                <select
                                    name="department"
                                    id="department"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                >
                                    <option selected>
                                        Select a department
                                    </option>
                                    <option value="Administration">
                                        Administration
                                    </option>
                                    <option value="Operations">
                                        Operations
                                    </option>
                                    <option value="Engineering">
                                        Engineering
                                    </option>
                                    <option value="Business">Business</option>
                                    <option value="Creative">Creative</option>
                                </select>
                            </div>
                            <div>
                                <label
                                    for="current_position"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Current Position</label
                                >
                                <input
                                    name="current_position"
                                    id="current_position"
                                    type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                />
                            </div>
                            <div>
                                <label
                                    for="joining_date"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Joining Date</label
                                >
                                <input
                                    name="joining_date"
                                    type="date"
                                    id="date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required
                                />
                            </div>
                            <div>
                                <label
                                    for="id_card_issue_date"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Id Card Issue Date</label
                                >
                                <input
                                    name="id_card_issue_date"
                                    type="date"
                                    id="date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required
                                />
                            </div>
                            <div>
                                <label
                                    for="id_card_expiry_date"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Id Card Expiry Date</label
                                >
                                <input
                                    name="id_card_expiry_date"
                                    type="date"
                                    id="date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                />
                            </div>
                            <div>
                                <label
                                    for="status"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Status</label
                                >
                                <select
                                    id="status"
                                    name="status"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                >
                                    <option selected>Select Status</option>
                                    <option value="In Service">
                                        In Service
                                    </option>
                                    <option value="Out of Service">
                                        Out of Service
                                    </option>
                                </select>
                            </div>
                        </div>
                        <button
                            type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        >
                            Add Employee
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
