<!-- contact page -->
@extends('master.secondNav')

@section('secondContent')

@endsection
<main>
    <section id="contact">
        <div class="max-w-screen-xl mx-auto">
            <div class="wrapper">
                <div class="lg:grid lg:grid-cols-12">
                    <div
                    class="contact-info flex flex-col justify-center items-start w-full px-8 py-8 lg:order-last lg:col-span-5 lg:h-full xl:col-span-6"
                    >
                    <!-- about -->
                    <h2 class="text-4xl mb-4 font-semibold">Meet us</h2>
                        <p class="mb-8">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa qui doloremque accusamus vel rem voluptates voluptas neque quod perferendis deleniti!</p>
                    <div class="flex flex-col space-y-8">
                        <div class="flex space-x-2">
                            <div class="icon">
                                <img width="24" height="24" src="https://img.icons8.com/fluency/48/phone.png" alt="phone"/>
                            </div> 
                            <div class="phone-number flex flex-col">
                                <a href="tet:+8801729321092">+8801729-32 10 92</a>
                                <a href="tet:+8801729321092">+8801729-32 10 92</a>
                                <a href="tet:+8801729321092">+8801729-32 10 92</a>
                            </div>
                        </div>
                        <div class="flex space-x-3">
                            <div class="icon">
                                <img width="24" height="24" src="https://img.icons8.com/fluency/48/mail.png" alt="mail"/>
                            </div> 
                        <div class="Email flex flex-col">
                            <a href = "mailto: abc@example.com">innovaInfosys@gmail.com</a>
                            </div>
                        </div>
                        <div class="flex space-x-3"> 
                            <div class="icon">
                                <img width="24" height="24" src="https://img.icons8.com/fluency/48/gps-device.png" alt="gps-device"/>
                            </div> 
                        <div class="address flex flex-col">
                            <a href = "mailto: abc@example.com">House # 10, Block #C Main Road, <br> Banasree Rampura, Dhaka-1219</a>
                            </div>
                        </div>
                    </div>
                    </div>

                    <main
                    class="flex items-center justify-center px-8 py-8 border-r sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6"
                    >
                    <div class="max-w-xl lg:max-w-3xl">


                        <h1
                        class="mt-6 text-3xl font-bold text-gray-900 sm:text-3xl md:text-4xl"
                        >
                        Get in touch.
                        </h1>

                        <p class="mt-4 leading-relaxed text-gray-500">
                        At Innova Infosys, we value your feedback and are committed to providing exceptional customer service. Feel free to get in touch with us regarding any questions, suggestions, or collaboration opportunities – we're here to help!
                        </p>

                        <form action="#" class="mt-8 grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label
                            for="FirstName"
                            class="block text-sm font-medium text-gray-700"
                            >
                            First Name
                            </label>

                            <input
                            type="text"
                            id="FirstName"
                            name="first_name"
                            class="mt-1 w-full  border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                            />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label
                            for="LastName"
                            class="block text-sm font-medium text-gray-700"
                            >
                            Last Name
                            </label>

                            <input
                            type="text"
                            id="LastName"
                            name="last_name"
                            class="mt-1 w-full  border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                            />
                        </div>

                        <div class="col-span-6">
                            <label for="Email" class="block text-sm font-medium text-gray-700">
                            Email
                            </label>

                            <input
                            type="email"
                            id="Email"
                            name="email"
                            class="mt-1 w-full  border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                            />
                        </div>
                        <div class="col-span-6">
                            <label for="Message" class="block text-sm font-medium text-gray-700">
                            Message
                            </label>

                            <textarea name="message" id="" rows="5" class="mt-1 w-full  border-gray-200 bg-white text-sm text-gray-700 shadow-sm"></textarea>
                            
                        </div>
                        

                        

                        <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                            <button
                            class="btn-main inline-block shrink-0  border px-12 py-3 text-sm font-medium text-white transition"
                            >
                            Send a message
                            </button>
                        </div>
                    </form>
                    </div>
                    </main>
                </div>
                </div>
            </div>
        </div>
</main>