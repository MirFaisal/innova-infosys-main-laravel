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
    <link rel="stylesheet" href="{{asset('/css/contact_page.css')}}">
    <link rel="stylesheet" href="{{asset('/css/careers_page.css')}}">
    <link rel="stylesheet" href= "{{asset('css/mian.css')}} " />

    <!--paid font-awesome link  -->
    <link
      rel="stylesheet"
      href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css"
    />

    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('/favicon.jpg')}}" type="image/x-icon" />

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
        class="mx-auto flex justify-between h-14 max-w-screen-xl items-center gap-8"
      >
        <a class="text-blue-400 transition" href="/">
          <img class="w-40" src="{{asset('logo/logo.png')}}" alt="logo">
          </a>

        <div class="items-center md:justify-between">
          <nav aria-label="Global" class="hidden md:block">
            <ul class="flex items-center gap-6 text-sm">
              <li>
                <a class="nav-link transition py-1" href="{{route('HOME')}}">
                  Home
                </a>
              </li>

              <li>
                <a class="nav-link transition py-1" href="{{route('HOME')}}">
                  Solution
                </a>
              </li>

              <li>
                <a class="nav-link transition py-1" href="{{route('HOME')}}">
                  industries
                </a>
              </li>

              
              <li>
                <a class="nav-link transition py-1" href="{{route('ORGANIZATION')}}"> organization </a>
              </li>
              
              <!-- <li>
                <a class="nav-link transition py-1" href="{{route('CAREERS')}}">
                  Careers
                </a>
              </li> -->
              <li>
                <a class="nav-link transition py-1" href="{{route('CONTACT')}}"> Contact </a>
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

    @yield('secondContent')

    <!-- modal -->
    <!-- You can open the modal using ID.showModal() method -->
<!-- <dialog id="my_modal_4" class="modal w-2/3 modal-middle">
    <form method="dialog" class=" w-full p-6">
        <h3 class="font-bold text-3xl mb-4"> Finance and Banking</h3>
        <p class="py-4 break-all mx-auto">
        In the fast-paced world of finance and banking, staying ahead of the curve is crucial to maintain a competitive edge. Technological advancements have revolutionized the industry, offering unprecedented opportunities for efficiency, security, and innovation. At [IT Company Name], we specialize in providing comprehensive IT solutions tailored specifically for the finance and banking sector.
        <br>
        <br>
        One of the key demands of the finance and banking industry is the need for robust security measures. With the increasing prevalence of cyber threats and the potential risks associated with data breaches, financial institutions require state-of-the-art security solutions. Our company understands the importance of protecting sensitive information and implements cutting-edge encryption techniques, multi-factor authentication, and advanced firewall systems to safeguard valuable data against unauthorized access.
        <br>
        <br>
        Furthermore, the finance and banking industry relies heavily on seamless and efficient operations. Our IT solutions aim to optimize internal processes and enhance productivity. We offer tailor-made software applications and platforms designed to automate routine tasks, streamline workflows, and improve collaboration among different departments. By leveraging the power of artificial intelligence and machine learning, our solutions can analyze large volumes of financial data, identify patterns, and generate valuable insights for informed decision-making.
        <br>
        <br>
        In an era of digital transformation, customer experience is paramount. Financial institutions strive to provide their clients with convenient, user-friendly, and secure digital banking services. Our IT company specializes in developing intuitive mobile banking applications and online platforms that enable customers to manage their accounts, make transactions, and access financial services with ease. Through personalized experiences, seamless integration with multiple banking systems, and real-time notifications, we empower financial institutions to deliver exceptional customer service and foster long-term customer loyalty.
        <br>
        <br>
        Regulatory compliance is another critical aspect of the finance and banking industry. Adhering to stringent regulations and maintaining compliance with evolving laws is of utmost importance. Our IT solutions address these challenges by integrating compliance modules into banking systems, ensuring adherence to regulatory frameworks, and facilitating seamless reporting and audit processes. This allows financial institutions to mitigate risk, avoid penalties, and maintain a strong reputation in the industry.
        <br>
        <br>
        As technology continues to evolve, so do the demands of the finance and banking industry. Our IT company stays at the forefront of innovation, constantly monitoring emerging trends and adapting our solutions to meet evolving needs. We provide ongoing support, maintenance, and regular updates to ensure that our clients remain at the cutting edge of technological advancements.
        <br>
        <br>
        In summary, our IT company is dedicated to empowering the finance and banking industry with a comprehensive range of technology solutions. From robust security measures to streamlined operations, enhanced customer experiences to regulatory compliance, we are committed to helping financial institutions thrive in the digital era. Partner with us and experience the transformative power of technology in revolutionizing your finance and banking operations.</p>
        <div class="modal-action">
         if there is a button, it will close the modal -->
        <!-- <div class="w-full flex justify-end">
            <button class="btn-main px-4 py-2">Close</button>
        </div>
        </div>
    </form>
</dialog> --> 


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
        <script src="../js/mixitup.js"></script>
    <script>
      var mixer = mixitup(".job-post", {
        animation: {
          enable: true,
          effects: "fade translateY(-10px)",
          duration: 300,
        },
      });
    </script>
  </body>
    
</html>

