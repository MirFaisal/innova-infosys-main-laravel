<!-- contact page -->
@extends('master.master') @section('content')
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
                        <p class="mb-8">
                            Ready to bring your software project to life? We're
                            here to help! Contact our experienced team of
                            software developers to discuss your ideas, get a
                            quote, or simply learn more about our services. We
                            look forward to collaborating with you.
                        </p>
                        <div class="flex">
                            <div class="flex flex-col space-y-8 pr-2 border-r">
                                <div class="flex gap-3">
                                    <img
                                        width="28"
                                        height="28"
                                        src="https://img.icons8.com/color/48/bangladesh.png"
                                        alt="bangladesh"
                                    />
                                    <h2>Bangladesh HQ</h2>
                                </div>
                                <div class="flex space-x-2">
                                    <div class="icon">
                                        <img
                                            width="24"
                                            height="24"
                                            src="https://img.icons8.com/fluency/48/phone.png"
                                            alt="phone"
                                        />
                                    </div>
                                    <div class="phone-number flex flex-col">
                                        <a href="tet:+8801571-005859"
                                            >+8801571-005859</a
                                        >
                                        <a href="tet:+8801830-360494"
                                            >+8801830-360494</a
                                        >
                                        <a href="tet:+8801964-353056"
                                            >+8801964-353056</a
                                        >
                                    </div>
                                </div>
                                <div class="flex space-x-3">
                                    <div class="icon">
                                        <img
                                            width="24"
                                            height="24"
                                            src="https://img.icons8.com/fluency/48/mail.png"
                                            alt="mail"
                                        />
                                    </div>
                                    <div class="Email flex flex-col">
                                        <a href="mailto: info@innovainfosys.com"
                                            >info@innovainfosys.com</a
                                        >
                                    </div>
                                </div>
                                <div class="flex space-x-3">
                                    <div class="icon">
                                        <img
                                            width="24"
                                            height="24"
                                            src="https://img.icons8.com/fluency/48/gps-device.png"
                                            alt="gps-device"
                                        />
                                    </div>
                                    <div class="address flex flex-col">
                                        <a href="mailto: abc@example.com"
                                            >House # 10, Block #C Main Road,
                                            <br />
                                            Banasree Rampura, Dhaka-1219</a
                                        >
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col space-y-8 pl-2">
                                <div class="flex gap-3">
                                    <img
                                        width="28"
                                        height="28"
                                        src="https://img.icons8.com/color/48/canada.png"
                                        alt="bangladesh"
                                    />
                                    <h2>Canada HQ</h2>
                                </div>
                                <div class="flex space-x-2">
                                    <div class="icon">
                                        <img
                                            width="24"
                                            height="24"
                                            src="https://img.icons8.com/fluency/48/phone.png"
                                            alt="phone"
                                        />
                                    </div>
                                    <div class="phone-number flex flex-col">
                                        <a href="tet:+1613 401 6661"
                                            >+1613 401 6661</a
                                        >
                                    </div>
                                </div>
                                <div class="flex space-x-3">
                                    <div class="icon">
                                        <img
                                            width="24"
                                            height="24"
                                            src="https://img.icons8.com/fluency/48/mail.png"
                                            alt="mail"
                                        />
                                    </div>
                                    <div class="Email flex flex-col">
                                        <a
                                            href="mailto: hq.innovainfosys@gmail.com"
                                            >hq.innovainfosys@gmail.com</a
                                        >
                                    </div>
                                </div>
                                <div class="flex space-x-3">
                                    <div class="icon">
                                        <img
                                            width="24"
                                            height="24"
                                            src="https://img.icons8.com/fluency/48/gps-device.png"
                                            alt="gps-device"
                                        />
                                    </div>
                                    <div class="address flex flex-col">
                                        <a href="mailto: abc@example.com"
                                            >463 Cope Drive, Stittsville,
                                            <br />
                                            Ontario Canada K2V 0P1</a
                                        >
                                    </div>
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
                                At Innova Infosys, we value your feedback and
                                are committed to providing exceptional customer
                                service. Feel free to get in touch with us
                                regarding any questions, suggestions, or
                                collaboration opportunities – we're here to
                                help!
                            </p>
                            @if(session('status'))
                            <x-alert-success> </x-alert-success>
                            @endif
                            <form
                                action="{{ route('SEND-MESSAGE') }}"
                                method="post"
                                class="mt-8 grid grid-cols-6 gap-6"
                                id="send-message"
                            >
                                @csrf
                                <div class="col-span-6 sm:col-span-6">
                                    @error('name')
                                    <div
                                        role="alert"
                                        class="rounded border-s-4 border-red-500 bg-red-50 p-4"
                                    >
                                        <strong
                                            class="block font-medium text-red-800"
                                        >
                                            Something went wrong
                                        </strong>

                                        <p class="mt-2 text-sm text-red-700">
                                            {{ $message }}
                                        </p>
                                    </div>
                                    @enderror
                                    <label
                                        for="Name"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Name
                                    </label>

                                    <input
                                        type="text"
                                        id="Name"
                                        name="name"
                                        class="mt-1 w-full border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                    />
                                </div>

                                <div class="col-span-6">
                                    <label
                                        for="Email"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Email
                                    </label>

                                    <input
                                        type="email"
                                        id="Email"
                                        name="contact_email"
                                        required
                                        class="mt-1 w-full border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                    />
                                </div>
                                <div class="col-span-6">
                                    <label
                                        for="Message"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Message
                                    </label>

                                    <textarea
                                        name="message"
                                        id="Message"
                                        class="mt-1 py-1 w-full border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                    ></textarea>
                                </div>

                                <div
                                    class="col-span-6 sm:flex sm:items-center sm:gap-4"
                                >
                                    <button
                                        type="submit"
                                        id="send"
                                        class="btn-main inline-block shrink-0 border px-12 py-3 text-sm font-medium text-white transition"
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
    </section>
</main>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script>
    if ($("#send-message").length > 0) {
        $("#send-message").validate({
            rules: {
                name: {
                    required: true,
                },
                contact_email: {
                    required: true,
                },
                message: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: "Please enter name",
                },
                contact_email: {
                    required: "Please enter valid email",
                },
                message: {
                    required: "Please enter message",
                },
            },
        });
    }
</script>
<script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create(document.querySelector("#Message"));
</script>
@endsection
