@extends('master.master') @section('content')

<main>
    <!-- carrer banner start -->
    <section id="carrer_banner-section">
        <div class="max-w-screen-xl mx-auto">
            <div class="main-banner grid grid-cols-2 border">
                <div class="text ps-10">
                    <h2 class="font-extrabold text-7xl pt-28">
                        Join us to transform Entire Business
                    </h2>
                    <p class="w-4/5 pt-10 mb-5 text-lg">
                        Come and be a part of an inspiring team that is
                        revolutionizing Business software
                    </p>
                    <a
                        href="#carrer_jon_opening"
                        class="btn-main transition-all duration-400 py-2 px-4 mb-28"
                    >
                        See all job Opening
                    </a>
                </div>
                <div class="banner-showcase">
                    <div class="top flex justify-end h-1/3">
                        <div class="office-img w-1/3">
                            <img
                                src="{{ asset('/office/office1.jpg') }}"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="center flex justify-end h-1/3">
                        <div class="office-img w-1/3">
                            <img
                                src="{{ asset('/office/office2.jpg') }}"
                                alt=""
                            />
                        </div>
                        <div class="office-img w-1/3">
                            <img
                                src="{{ asset('/office/office3.jpg') }}"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="buttom flex h-1/3">
                        <div class="office-img w-1/3">
                            <img
                                src="{{ asset('/office/office4.jpg') }}"
                                alt=""
                            />
                        </div>
                        <div class="office-img w-1/3">
                            <img
                                src="{{ asset('/office/office5.jpg') }}"
                                alt=""
                            />
                        </div>
                        <div class="office-img w-1/3">
                            <img
                                src="{{ asset('/office/office6.jpg') }}"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- carrer banner end -->
    <!-- why Innova Infosys section start -->
    <section id="why-innova" class="my-20">
        <div class="max-w-screen-xl mx-auto">
            <div class="wrapper">
                <div class="text py-10">
                    <!-- <h2 class="font-extrabold text-5xl mb-5">Why Innova Infosys?</h2> -->
                    <h3
                        class="font-semibold border-l-4 border-black ps-2 py-1 mb-8"
                    >
                        Why Innova Infosys?
                    </h3>
                </div>
                <div
                    class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8 p-2 lg:p-0"
                >
                    <div class="card">
                        <div class="group relative block h-64 sm:h-80 lg:h-96">
                            <span
                                class="absolute inset-0 border-2 border-dashed border-black"
                            ></span>

                            <div
                                class="relative flex h-full transform items-end border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2"
                            >
                                <div
                                    class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-1 sm:p-6 lg:p-8"
                                >
                                    <img
                                        class="mb-4"
                                        width="80"
                                        height="80"
                                        src="https://img.icons8.com/carbon-copy/100/learning.png"
                                        alt="learning"
                                    />
                                    <h2
                                        class="mb-3 text-xl font-medium sm:text-2xl"
                                    >
                                        Embracing New Technologies
                                    </h2>
                                    <p>
                                        Join Innova Infosys, where we lead in
                                        technological advancements, foster
                                        innovation, and provide opportunities to
                                        work on cutting-edge projects.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="group relative block h-64 sm:h-80 lg:h-96">
                            <span
                                class="absolute inset-0 border-2 border-dashed border-black"
                            ></span>

                            <div
                                class="relative flex h-full transform items-end border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2"
                            >
                                <div
                                    class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-1 sm:p-6 lg:p-8"
                                >
                                    <img
                                        class="mb-4"
                                        width="80"
                                        height="80"
                                        src="https://img.icons8.com/dotty/80/create-new.png"
                                        alt="create-new"
                                    />
                                    <h2
                                        class="mb-3 text-xl font-medium sm:text-2xl"
                                    >
                                        Setting New Standards in the Tech
                                        Industry
                                    </h2>
                                    <p>
                                        Join Innova Infosys to be part of a
                                        pioneering tech firm in Bangladesh that
                                        sets new industry standards, excels in
                                        quality solutions and customer service.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="group relative block h-64 sm:h-80 lg:h-96">
                            <span
                                class="absolute inset-0 border-2 border-dashed border-black"
                            ></span>

                            <div
                                class="relative flex h-full transform items-end border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2"
                            >
                                <div
                                    class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-1 sm:p-6 lg:p-8"
                                >
                                    <img
                                        class="mb-4"
                                        width="80"
                                        height="80"
                                        src="https://img.icons8.com/dotty/80/purposeful-man.png"
                                        alt="purposeful-man"
                                    />
                                    <h2
                                        class="mb-3 text-xl font-medium sm:text-2xl"
                                    >
                                        Focus on Employee Growth and Learning
                                    </h2>
                                    <p>
                                        At Innova Infosys, we prioritize our
                                        employees' growth and success by
                                        fostering a culture of continuous
                                        learning and providing ample
                                        opportunities for skill enhancement.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why Innova Infosys section end -->

    <!-- Current Job Openings start-->
    <div id="carrer_jon_opening" class="mb-40">
        <div class="max-w-screen-xl mx-auto">
            <h3
                class="font-semibold text-center md:text-start md:border-l-4 md:border-black md:ps-2 py-1 mb-8"
            >
                Current Job Openings
            </h3>
            <div class="wrapper flex justify-end relative">
                <div
                    class="job-category-button border-r w-1/3 sticky top-0 left-0"
                >
                    <div class="space-y-1">
                        <button
                            data-filter="all"
                            class="btn-second group w-full flex items-center justify-between md:px-4 py-2 text-gray-500"
                        >
                            <span class="text-sm font-medium">
                                All Departments
                            </span>
                        </button>

                        <button
                            data-filter=".sales"
                            class="btn-second group w-full flex items-center justify-between md:px-4 py-2 text-gray-500"
                        >
                            <span class="text-sm font-medium"> Sales </span>

                            <span
                                class="shrink-0 rounded-full bg-gray-100 px-3 py-0.5 text-xs text-gray-600 group-hover:bg-gray-200 group-hover:text-gray-700"
                            >
                                5
                            </span>
                        </button>

                        <button
                            data-filter=".Graphic-and-Animation"
                            href=""
                            class="btn-second group w-full flex items-center justify-between md:px-4 py-2 text-gray-500"
                        >
                            <span class="text-sm font-medium"
                                >Graphic and Animation
                            </span>
                        </button>
                        <button
                            href=""
                            class="btn-second group w-full flex items-center justify-between md:px-4 py-2 text-gray-500"
                        >
                            <span class="text-sm font-medium"> Media </span>

                            <span
                                class="shrink-0 rounded-full bg-gray-100 px-3 py-0.5 text-xs text-gray-600 group-hover:bg-gray-200 group-hover:text-gray-700"
                            >
                                3
                            </span>
                        </button>

                        <button
                            href=""
                            class="btn-second group w-full flex items-center justify-between md:px-4 py-2 text-gray-500"
                        >
                            <span class="text-sm font-medium">
                                Mobile & Web
                            </span>
                        </button>
                        <button
                            href=""
                            class="btn-second group w-full flex items-center justify-between md:px-4 py-2 text-gray-500"
                        >
                            <span class="text-sm font-medium">Embed </span>
                        </button>
                    </div>
                </div>
                <div class="job-post w-2/3">
                    <!--All dept  -->
                    <div class="mix all-dept">
                        <a
                            href=""
                            class="group w-full flex items-center justify-between px-4 py-4 text-gray-500"
                        >
                            <span class="text-sm font-medium"> Job Title </span>
                        </a>
                        <a
                            href=""
                            class="group w-full flex items-center justify-between px-4 py-4 text-gray-500"
                        >
                            <span class="text-sm font-medium"> Job Title </span>
                        </a>
                        <a
                            href=""
                            class="group w-full flex items-center justify-between px-4 py-4 text-gray-500"
                        >
                            <span class="text-sm font-medium"> Job Title </span>
                        </a>
                        <a
                            href=""
                            class="group w-full flex items-center justify-between px-4 py-4 text-gray-500"
                        >
                            <span class="text-sm font-medium"> Job Title </span>
                        </a>
                        <a
                            href=""
                            class="group w-full flex items-center justify-between px-4 py-4 text-gray-500"
                        >
                            <span class="text-sm font-medium"> Job Title </span>
                        </a>
                        <a
                            href=""
                            class="group w-full flex items-center justify-between px-4 py-4 text-gray-500"
                        >
                            <span class="text-sm font-medium"> Job Title </span>
                        </a>
                    </div>
                    <!-- sales dept -->
                    <div class="mix sales">
                        <a
                            href=""
                            class="group w-full flex items-center justify-between px-4 py-4 text-gray-500"
                        >
                            <span class="text-sm font-medium"> Job Title </span>
                        </a>
                        <a
                            href=""
                            class="group w-full flex items-center justify-between px-4 py-4 text-gray-500"
                        >
                            <span class="text-sm font-medium"> Job Title </span>
                        </a>
                        <a
                            href=""
                            class="group w-full flex items-center justify-between px-4 py-4 text-gray-500"
                        >
                            <span class="text-sm font-medium"> Job Title </span>
                        </a>
                        <a
                            href=""
                            class="group w-full flex items-center justify-between px-4 py-4 text-gray-500"
                        >
                            <span class="text-sm font-medium"> Job Title </span>
                        </a>
                    </div>
                    <!-- Graphic and Animation -->
                    <div class="mix Graphic-and-Animation">
                        <a
                            href=""
                            class="group w-full flex items-center justify-between px-4 py-4 text-gray-500"
                        >
                            <span class="text-sm font-medium"> Job Title </span>
                        </a>
                        <a
                            href=""
                            class="group w-full flex items-center justify-between px-4 py-4 text-gray-500"
                        >
                            <span class="text-sm font-medium"> Job Title </span>
                        </a>
                        <a
                            href=""
                            class="group w-full flex items-center justify-between px-4 py-4 text-gray-500"
                        >
                            <span class="text-sm font-medium"> Job Title </span>
                        </a>
                        <a
                            href=""
                            class="group w-full flex items-center justify-between px-4 py-4 text-gray-500"
                        >
                            <span class="text-sm font-medium"> Job Title </span>
                        </a>
                        <a
                            href=""
                            class="group w-full flex items-center justify-between px-4 py-4 text-gray-500"
                        >
                            <span class="text-sm font-medium"> Job Title </span>
                        </a>
                        <a
                            href=""
                            class="group w-full flex items-center justify-between px-4 py-4 text-gray-500"
                        >
                            <span class="text-sm font-medium"> Job Title </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Current Job Openings end-->
</main>
@endsection
<!-- all script -->

<!-- jquary cdn -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- 
        mixti up cdn
     -->
