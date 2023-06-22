<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    

    <!--lick-theme.css if you want default styling -->
    <link
      rel="stylesheet"
      type="text/css"
      href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <!-- slick-theme.css if you want default styling -->
    <link
      rel="stylesheet"
      type="text/css"
      href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"
    />

    <!-- Remote css cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <!-- local style -->
    <link rel="stylesheet" href= "{{asset('css/mian.css')}} " />

    <!--paid font-awesome link  -->
    <link
      rel="stylesheet"
      href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css"
    />

    <!-- favicon -->
    <link rel="shortcut icon" href="./assets/favicon.jpg" type="image/x-icon" />

    <!-- website title -->
    <title>Innova Infosys</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
        <body class="relative">
    <!-- navigation start-->
    <header id="nav" class="border-b fixed top-0 w-screen z-50">
      <div
        class="mx-auto flex justify-between h-12 max-w-screen-xl items-center gap-8"
      >
        <a class="text-blue-400 transition" href="/"> INNOVA INFOSYS </a>

        <div class="items-center md:justify-between">
          <nav aria-label="Global" class="hidden md:block">
            <ul class="flex items-center gap-6 text-sm">
              <li>
                <a class="nav-link transition py-1" href="#hero-section">
                  Home
                </a>
              </li>

              <li>
                <a class="nav-link transition py-1" href="#solution">
                  Solution
                </a>
              </li>

              <li>
                <a class="nav-link transition py-1" href="#industries">
                  industries
                </a>
              </li>

              <li>
                <a class="nav-link transition py-1" href="/"> Services </a>
              </li>

              <li>
                <a class="nav-link transition py-1" href="/"> Projects </a>
              </li>

              <li>
                <a class="nav-link transition py-1" href="./pages/carrers.html">
                  Careers
                </a>
              </li>
            </ul>
          </nav>
          <button
            class="block rounded p-2.5 text-gray-600 transition md:hidden"
          >
            <space-y-5n class="sr-only">Toggle menu</space-y-5n>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M4 6h16M4 12h16M4 18h16"
              />
            </svg>
          </button>
        </div>
      </div>
    </header>
    <!-- navigation end -->

    <main>
      <!-- hero section start -->
      <section id="hero-section">
        <div class="container mx-auto max-w-screen-xl">
          <div class="flex banner">
            <div class="text w-3/5">
              <h2 class="font-extrabold text-7xl w-2/3 pt-28">
                Entire Business in One Ecosystem
              </h2>
              <p class="w-4/5 pt-10 text-lg">
                All in one business management platform which manages your
                firm’s tasks, finances, commerce, accounting and HR processes.
              </p>
              <button
                class="btn-main transition-all duration-400 py-2 px-4 mb-28 mt-5"
              >
                Explore your option
              </button>
            </div>
          </div>
        </div>
      </section>
      <!-- hero section end -->

      <section id="solution">
        <div class="max-w-screen-xl mx-auto">
          <h3 class="font-semibold border-l-4 border-black ps-2 py-1 mb-8">
            Solutions built for you
          </h3>
          <div class="solution-wrapper h-[550px] grid grid-cols-2">
            <div class="solution-nav flex py-10 ps-10">
              <div class="solution-items item-1">
                <h3 class="soluton-title text-3xl pb-8">Solution Title</h3>
                <p class="soluton-info text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Laudantium dicta id, repellendus ullam a nesciunt
                  consequuntur. Nemo, suscipit ab! Iste id quos sit nesciunt
                  cumque quaerat cum quia delectus, ducimus nihil ea! Corrupti
                  exercitationem iste laboriosam eos inventore, animi omnis.
                </p>
              </div>
              <div class="solution-items item-2">
                <h3 class="soluton-title text-3xl pb-8">Solution Title</h3>
                <p class="soluton-info text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Laudantium dicta id, repellendus ullam a nesciunt
                  consequuntur. Nemo, suscipit ab! Iste id quos sit nesciunt
                  cumque quaerat cum quia delectus, ducimus nihil ea! Corrupti
                  exercitationem iste laboriosam eos inventore, animi omnis.
                </p>
                <p class="soluton-info text mt-3">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Laudantium dicta id, repellendus ullam a nesciunt
                  consequuntur. Nemo, suscipit ab! Iste id quos sit nesciunt
                  cumque quaerat cum quia delectus, ducimus nihil ea! Corrupti
                  exercitationem iste laboriosam eos inventore, animi omnis.
                </p>
              </div>
              <div class="solution-items item-3">
                <h3 class="soluton-title text-3xl pb-8">Solution Title</h3>
                <p class="soluton-info text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Laudantium dicta id, repellendus ullam a nesciunt
                  consequuntur. Nemo, suscipit ab! Iste id quos sit nesciunt
                  cumque quaerat cum quia delectus, ducimus nihil ea! Corrupti
                  exercitationem iste laboriosam eos inventore, animi omnis.
                </p>
                <p class="soluton-info text mt-12">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Laudantium dicta id, repellendus ullam a nesciunt
                  consequuntur. Nemo, suscipit ab! Iste id quos sit nesciunt
                  cumque quaerat cum quia delectus, ducimus nihil ea! Corrupti
                  exercitationem iste laboriosam eos inventore, animi omnis.
                </p>
                <p class="soluton-info text mt-12">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Laudantium dicta id, repellendus ullam a nesciunt
                </p>
              </div>
            </div>
            <div class="solution-banner h-[550px]">
              <div class="solution-for flex">
                <div class="solution-showcase">
                  <img src="./assets/solution_showcase/showcase1.jpg" alt="" />
                </div>
                <div class="solution-showcase">
                  <img src="./assets/solution_showcase/showcase2.jpg" alt="" />
                </div>
                <div class="solution-showcase">
                  <img src="./assets/solution_showcase/showcase3.jpg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- solution section end -->
      <!-- industries section start -->
      <section id="industries">
        <div class="max-w-screen-xl mx-auto">
          <h2 class="font-semibold border-l-4 border-black ps-2 py-1 mb-8">
            For several industries
          </h2>
          <div class="industries-wrapper space-y-24">
            <div
              class="industries-item h-[340px] flex justify-end items-center relative"
            >
              <div
                class="text w-[900px] h-[260px] p-8 flex flex-col space-y-5 absolute left-0 z-40"
              >
                <h3 class="text-3xl">Finance and Banking</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi
                  error quos optio quis in atque nesciunt praesentium similique!
                  Sapiente, rerum?
                </p>
                <div class="w-full pt-5 flex justify-end">
                  <button class="btn-main py-2 px-6">Read more</button>
                </div>
              </div>
              <div class="industries-showcase w-[540px] overflow-hidden">
                <img
                  class="transition-all duration-500"
                  src="./assets/industries_showcase/industries_showcase1.jpg"
                  alt=""
                />
              </div>
            </div>
            <!-- item 2 -->
            <div
              class="industries-item h-[340px] flex justify-start items-center relative"
            >
              <div
                class="text w-[900px] h-[260px] p-8 flex flex-col space-y-5 absolute right-0 z-40"
              >
                <h3 class="text-3xl">Finance and Banking</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi
                  error quos optio quis in atque nesciunt praesentium similique!
                  Sapiente, rerum?
                </p>
                <div class="w-full pt-5 flex justify-end">
                  <button class="btn-main py-2 px-6">Read more</button>
                </div>
              </div>
              <div class="industries-showcase w-[540px] overflow-hidden">
                <img
                  class="transition-all duration-500"
                  src="./assets/industries_showcase/industries_showcase2.jpg"
                  alt=""
                />
              </div>
            </div>
            <!-- item 3 -->
            <div
              class="industries-item h-[340px] flex justify-end items-center relative"
            >
              <div
                class="text w-[900px] h-[260px] p-8 flex flex-col space-y-5 absolute left-0 z-40"
              >
                <h3 class="text-3xl">Finance and Banking</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi
                  error quos optio quis in atque nesciunt praesentium similique!
                  Sapiente, rerum?
                </p>
                <div class="w-full pt-5 flex justify-end">
                  <button class="btn-main py-2 px-6">Read more</button>
                </div>
              </div>
              <div class="industries-showcase w-[540px] overflow-hidden">
                <img
                  class="transition-all duration-500"
                  src="{{asset(./assets/industries_showcase/industries_showcase3.jpg)}}"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- industries section end  -->
    </main>
    <!-- all scripts -->

    <!-- jQuary cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- sliks slider default cdn -->
    <script
      type="text/javascript"
      src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>

    <!-- sliks config -->
    <script src="{{asset('js/slider.js')}}"></script>
  </body>
    
</html>
