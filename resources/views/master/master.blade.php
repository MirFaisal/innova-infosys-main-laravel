<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

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
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- local style -->
        <link rel="stylesheet" href="{{ asset('/css/contact_page.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/careers_page.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/mian.css') }} " />

        <!--paid font-awesome link  -->
        <link
            rel="stylesheet"
            href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css"
        />

        <!-- favicon -->
        <link
            rel="shortcut icon"
            href="{{ asset('favicon.jpg') }}"
            type="image/x-icon"
        />

        <!-- website title -->
        <title>Innova Infosys</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
            rel="stylesheet"
        />
    </head>
    <body class="relative">
        <!-- navigation start-->
        <!-- <header id="nav" class="border-b fixed top-0 w-screen z-50 hidden">
            <div
                class="mx-auto flex justify-between h-14 max-w-screen-xl items-center gap-8 px-2 md:px-0"
            >
                <a class="text-blue-400 transition" href="/">
                    <img
                        class="w-32"
                        src="{{ asset('logo/logo.png') }}"
                        alt="logo"
                /></a>

                <div class="items-center h-full md:justify-between">
                    <nav
                        aria-label="Global"
                        class="hidden mobile-menu w-full absolute top-[56px] left-0 bg-white md:bg-transparent md:block md:relative md:m-[-40px] md:me-[-20px]"
                    >
                        <ul
                            class="flex flex-col md:flex-row items-center gap-6 text-md md:text-sm"
                        >
                            <li>
                                <a
                                    class="nav-link transition py-1"
                                    href="{{ url('') }}#hero-section"
                                >
                                    Home
                                </a>
                            </li>

                            <li>
                                <a
                                    class="nav-link transition py-1"
                                    href="{{ url('') }}#solution"
                                >
                                    Solution
                                </a>
                            </li>

                            <li>
                                <a
                                    class="nav-link transition py-1"
                                    href="{{ url('') }}#industries"
                                >
                                    Industries
                                </a>
                            </li>
                            <li class="me-4">
                                <a
                                    href="{{ route('CONTACT') }}"
                                    class="nav-link transition py-1"
                                >
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <button
                        id="nav-button"
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
        </header> -->
        <!--  -->
        <!--  -->
        <nav class="border-gray-200 fixed top-0 w-screen z-50 dark:bg-gray-900">
            <div
                class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
            >
                <a href="/" class="flex items-center">
                    <img
                        src="{{ asset('logo/logo.png') }}"
                        class="w-32 mr-3"
                        alt="Innova infosys"
                    />
                </a>
                <button
                    data-collapse-toggle="navbar-default"
                    type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default"
                    aria-expanded="false"
                >
                    <span class="sr-only">Open main menu</span>
                    <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 17 14"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15"
                        />
                    </svg>
                </button>
                <div
                    class="hidden w-full md:block md:w-auto"
                    id="navbar-default"
                >
                    <ul
                        class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
                    >
                        <li>
                            <a
                                href="{{ url('') }}#hero-section"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                                aria-current="page"
                                >Home</a
                            >
                        </li>
                        <li>
                            <a
                                href="{{ url('') }}#solution"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                                >Solution</a
                            >
                        </li>
                        <li>
                            <a
                                href="{{ url('') }}#industries"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                                >Industries</a
                            >
                        </li>
                        <li>
                            <a
                                href="{{ route('CONTACT') }}"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                                >Contact</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <!-- modal -->
        <!-- You can open the modal using ID.showModal() method -->
        <dialog id="Finance_and_Banking" class="modal w-3/4 modal-middle">
            <form method="dialog" class="w-full md:p-6">
                <h3 class="font-bold text-3xl mb-4">Finance and Banking</h3>
                <p class="py-4 break-all mx-auto">
                    In the fast-paced world of finance and banking, staying
                    ahead of the curve is crucial to maintain a competitive
                    edge. Technological advancements have revolutionized the
                    industry, offering unprecedented opportunities for
                    efficiency, security, and innovation. At Innova Infosys, we
                    specialize in providing comprehensive IT solutions tailored
                    specifically for the finance and banking sector.
                    <br />
                    <br />
                    One of the key demands of the finance and banking industry
                    is the need for robust security measures. With the
                    increasing prevalence of cyber threats and the potential
                    risks associated with data breaches, financial institutions
                    require state-of-the-art security solutions. Our company
                    understands the importance of protecting sensitive
                    information and implements cutting-edge encryption
                    techniques, multi-factor authentication, and advanced
                    firewall systems to safeguard valuable data against
                    unauthorized access.
                    <br />
                    <br />
                    Furthermore, the finance and banking industry relies heavily
                    on seamless and efficient operations. Our IT solutions aim
                    to optimize internal processes and enhance productivity. We
                    offer tailor-made software applications and platforms
                    designed to automate routine tasks, streamline workflows,
                    and improve collaboration among different departments. By
                    leveraging the power of artificial intelligence and machine
                    learning, our solutions can analyze large volumes of
                    financial data, identify patterns, and generate valuable
                    insights for informed decision-making.
                    <br />
                    <br />
                    In an era of digital transformation, customer experience is
                    paramount. Financial institutions strive to provide their
                    clients with convenient, user-friendly, and secure digital
                    banking services. Our IT company specializes in developing
                    intuitive mobile banking applications and online platforms
                    that enable customers to manage their accounts, make
                    transactions, and access financial services with ease.
                    Through personalized experiences, seamless integration with
                    multiple banking systems, and real-time notifications, we
                    empower financial institutions to deliver exceptional
                    customer service and foster long-term customer loyalty.
                    <br />
                    <br />
                    Regulatory compliance is another critical aspect of the
                    finance and banking industry. Adhering to stringent
                    regulations and maintaining compliance with evolving laws is
                    of utmost importance. Our IT solutions address these
                    challenges by integrating compliance modules into banking
                    systems, ensuring adherence to regulatory frameworks, and
                    facilitating seamless reporting and audit processes. This
                    allows financial institutions to mitigate risk, avoid
                    penalties, and maintain a strong reputation in the industry.
                    <br />
                    <br />
                    As technology continues to evolve, so do the demands of the
                    finance and banking industry. Our IT company stays at the
                    forefront of innovation, constantly monitoring emerging
                    trends and adapting our solutions to meet evolving needs. We
                    provide ongoing support, maintenance, and regular updates to
                    ensure that our clients remain at the cutting edge of
                    technological advancements.
                    <br />
                    <br />
                    In summary, our IT company is dedicated to empowering the
                    finance and banking industry with a comprehensive range of
                    technology solutions. From robust security measures to
                    streamlined operations, enhanced customer experiences to
                    regulatory compliance, we are committed to helping financial
                    institutions thrive in the digital era. Partner with us and
                    experience the transformative power of technology in
                    revolutionizing your finance and banking operations.
                </p>
                <div class="modal-action">
                    <!-- if there is a button, it will close the modal -->
                    <div class="w-full flex justify-end">
                        <button class="btn-main px-4 py-2">Close</button>
                    </div>
                </div>
            </form>
        </dialog>
        <!--  -->
        <dialog id="Hospital_Management" class="modal w-3/4 modal-middle">
            <form method="dialog" class="w-full md:p-6">
                <h3 class="font-bold text-3xl mb-4">Hospital Management</h3>
                <p class="py-4 break-all mx-auto">
                    The hospital management industry plays a pivotal role in
                    providing quality healthcare services while ensuring
                    efficient operations and optimal patient care. In an era of
                    rapid technological advancements, hospitals are increasingly
                    looking for innovative solutions to streamline their
                    processes, enhance security, improve patient engagement, and
                    optimize overall performance. XYZ IT Company recognizes
                    these evolving demands and is committed to revolutionizing
                    the hospital management industry by offering comprehensive
                    IT solutions tailored to meet the specific needs of
                    healthcare institutions.
                    <br />
                    <br />
                    Electronic Health Records (EHR) and Health Information
                    Exchange: Efficient management of patient records and
                    seamless information exchange are critical for effective
                    healthcare delivery. XYZ IT Company provides
                    state-of-the-art EHR systems that streamline record-keeping,
                    enable secure storage and sharing of patient data, and
                    facilitate interoperability across healthcare systems. These
                    solutions not only ensure easy access to medical records but
                    also enhance collaboration among healthcare providers,
                    leading to improved decision-making and coordinated patient
                    care.
                    <br />
                    <br />
                    Streamlined Hospital Operations: Optimizing hospital
                    operations is essential for enhancing efficiency and
                    reducing administrative burdens. XYZ IT Company offers
                    advanced software solutions for various aspects of hospital
                    management, including appointment scheduling, patient
                    registration, billing, inventory management, and resource
                    allocation. By automating these processes, hospitals can
                    minimize errors, improve staff productivity, and optimize
                    resource utilization, ultimately leading to streamlined
                    operations and improved patient outcomes.
                    <br />
                    <br />
                    Patient Engagement and Communication: Engaging patients
                    actively in their healthcare journey is crucial for
                    promoting better health outcomes. XYZ IT Company provides
                    patient engagement solutions that empower individuals to
                    access their medical records, schedule appointments, receive
                    personalized health information, and securely communicate
                    with healthcare providers. These tools enhance patient
                    satisfaction, promote adherence to treatment plans, and
                    facilitate remote monitoring and telehealth services,
                    ensuring a more patient-centered approach to healthcare.
                    <br />
                    <br />
                    Analytics and Business Intelligence: Data-driven insights
                    are instrumental in making informed decisions and driving
                    continuous improvement in hospital management. XYZ IT
                    Company offers powerful analytics and business intelligence
                    tools that allow hospitals to collect, analyze, and
                    visualize vast amounts of data from various sources. By
                    identifying trends, patterns, and potential areas for
                    improvement, hospitals can optimize their operations,
                    enhance resource allocation, and make data-backed decisions
                    to deliver efficient, cost-effective, and high-quality care.
                    <br />
                    <br />
                    Cybersecurity and Data Privacy: With the increasing
                    digitization of healthcare systems, robust cybersecurity
                    measures and data privacy safeguards are paramount. XYZ IT
                    Company prioritizes data security by implementing advanced
                    encryption, access controls, and real-time threat monitoring
                    solutions. By providing secure infrastructure and adhering
                    to regulatory standards, hospitals can protect sensitive
                    patient information, mitigate cyber threats, and maintain
                    the trust of patients and stakeholders.
                    <br />
                    <br />
                    Integration of Emerging Technologies: Embracing emerging
                    technologies can significantly enhance hospital management
                    practices. XYZ IT Company stays at the forefront of
                    technological advancements, offering integration solutions
                    for emerging technologies such as Internet of Things (IoT),
                    artificial intelligence (AI), and machine learning (ML).
                    These technologies enable real-time monitoring of patients,
                    predictive analytics for disease management, intelligent
                    automation for administrative tasks, and personalized
                    healthcare experiences.
                    <br />
                    <br />
                    Conclusion: The hospital management industry is on the cusp
                    of a technological revolution, and XYZ IT Company stands
                    ready to drive this transformation. With their comprehensive
                    range of IT solutions, including electronic health records,
                    streamlined operations management, patient engagement tools,
                    advanced analytics, robust cybersecurity measures, and
                    integration of emerging technologies, XYZ IT Company
                    empowers healthcare institutions to deliver exceptional
                    patient care, achieve operational excellence, and embrace
                    innovation. By partnering with XYZ IT Company, hospitals can
                    navigate the evolving healthcare landscape with confidence
                    and take significant strides towards a future of enhanced
                    efficiency and improved patient outcomes.
                </p>
                <div class="modal-action">
                    <!-- if there is a button, it will close the modal -->
                    <div class="w-full flex justify-end">
                        <button class="btn-main px-4 py-2">Close</button>
                    </div>
                </div>
            </form>
        </dialog>
        <!--  -->
        <dialog id="E_commerce_and_Retail" class="modal w-3/4 modal-middle">
            <form method="dialog" class="w-full md:p-6">
                <h3 class="font-bold text-3xl mb-4">
                    E-commerce and Retail industry
                </h3>
                <p class="py-4 break-all mx-auto">
                    At our esteemed IT company, we understand the ever-evolving
                    landscape of the E-commerce and Retail industry and the
                    pressing need for innovative technological solutions to stay
                    competitive in the digital marketplace. With our deep
                    expertise and relentless commitment to excellence, we offer
                    a wide range of comprehensive services that address the
                    unique challenges faced by businesses in this dynamic
                    sector.
                    <br />
                    <br />
                    One of the key aspects we focus on is creating and
                    optimizing E-commerce platforms that provide seamless user
                    experiences and drive conversions. We understand that an
                    intuitive and visually appealing website is crucial for
                    attracting and retaining customers. Our team of skilled
                    designers and developers work tirelessly to craft
                    aesthetically pleasing and responsive E-commerce websites
                    that are tailored to meet the specific needs of each client.
                    From user-friendly navigation to secure payment gateways, we
                    ensure that every aspect of the E-commerce platform is
                    optimized for maximum performance.
                    <br />
                    <br />
                    Furthermore, we recognize the importance of robust inventory
                    management systems for Retail businesses. Our comprehensive
                    Retail management solutions offer advanced inventory
                    tracking and optimization capabilities, allowing businesses
                    to streamline their operations, reduce costs, and enhance
                    overall efficiency. With real-time visibility into inventory
                    levels, automated replenishment, and predictive analytics,
                    our solutions empower businesses to make data-driven
                    decisions, prevent stockouts, and improve customer
                    satisfaction.
                    <br />
                    <br />
                    Another critical aspect we address is the integration of
                    multichannel sales channels. We understand that today's
                    consumers expect a seamless shopping experience across
                    various platforms, including websites, mobile apps, social
                    media, and marketplaces. Our expertise in integrating
                    diverse sales channels ensures that businesses can
                    efficiently manage inventory, orders, and customer data
                    across multiple platforms, enabling them to expand their
                    reach, increase sales, and enhance customer loyalty.
                    <br />
                    <br />
                    Moreover, in an increasingly digital world, data plays a
                    pivotal role in understanding customer behavior, making
                    informed business decisions, and optimizing marketing
                    strategies. Our data analytics and business intelligence
                    solutions provide businesses with actionable insights
                    derived from vast amounts of data. By harnessing advanced
                    analytics techniques, such as predictive modeling and
                    customer segmentation, we help businesses identify trends,
                    personalize marketing campaigns, and unlock new revenue
                    streams.
                    <br />
                    <br />
                    Security is a paramount concern in the E-commerce and Retail
                    industry, as cyber threats continue to evolve. We prioritize
                    data security and privacy, implementing robust measures to
                    safeguard customer information and prevent unauthorized
                    access. From secure payment gateways to encrypted data
                    transmission and regular security audits, we ensure that
                    businesses can operate with confidence, knowing that their
                    customers' sensitive information is protected.
                    <br />
                    <br />
                    Furthermore, we recognize the increasing importance of
                    leveraging emerging technologies to gain a competitive edge.
                    Our IT company stays at the forefront of technological
                    advancements, including Artificial Intelligence (AI),
                    Machine Learning (ML), and Internet of Things (IoT). Whether
                    it's using AI-powered chatbots to enhance customer support,
                    leveraging ML algorithms for personalized product
                    recommendations, or implementing IoT sensors for inventory
                    tracking, we help businesses harness the power of these
                    transformative technologies to drive growth and innovation.
                    <br />
                    <br />
                    In conclusion, our IT company is dedicated to providing
                    comprehensive solutions for the E-commerce and Retail
                    industry. From creating captivating E-commerce platforms to
                    optimizing inventory management, integrating multichannel
                    sales channels, leveraging data analytics, ensuring
                    security, and embracing emerging technologies, we are
                    committed to helping businesses navigate the digital
                    landscape with confidence, achieve operational excellence,
                    and exceed customer expectations. Partner with us today and
                    unlock your full potential in the dynamic world of
                    E-commerce and Retail.
                </p>
                <div class="modal-action">
                    <!-- if there is a button, it will close the modal -->
                    <div class="w-full flex justify-end">
                        <button class="btn-main px-4 py-2">Close</button>
                    </div>
                </div>
            </form>
        </dialog>
        <!--  -->
        <dialog id="Transportation" class="modal w-3/4 modal-middle">
            <form method="dialog" class="w-full md:p-6">
                <h3 class="font-bold text-3xl mb-4">Logistics</h3>
                <p class="py-4 break-all mx-auto">
                    In today's fast-paced and interconnected world, the
                    logistics industry plays a critical role in ensuring the
                    smooth flow of goods and services across the globe. As the
                    demand for efficient and reliable logistics management
                    continues to soar, the industry is turning to
                    technology-driven solutions to address its evolving needs.
                    At [Company Name], we understand the challenges faced by the
                    logistics industry, and we are committed to providing
                    comprehensive IT services and solutions to meet these
                    demands head-on.
                    <br />
                    <br />
                    One of the key technological aspects that the logistics
                    industry seeks is real-time visibility and tracking. With
                    the ever-increasing complexity of supply chains, businesses
                    require accurate and up-to-date information about the
                    location, condition, and status of their goods. Our advanced
                    tracking and monitoring systems utilize cutting-edge
                    technologies such as GPS, RFID, and IoT to provide real-time
                    visibility, enabling businesses to optimize their
                    operations, improve inventory management, and enhance
                    customer satisfaction.
                    <br />
                    <br />
                    Another crucial requirement for the logistics industry is
                    efficient route optimization and planning. In an era where
                    time is of the essence, businesses need to optimize their
                    transportation networks to reduce costs, minimize delivery
                    times, and maximize resource utilization. Our sophisticated
                    route planning algorithms, powered by artificial
                    intelligence and machine learning, analyze complex data sets
                    to identify the most optimal routes, considering factors
                    such as distance, traffic conditions, delivery windows, and
                    load capacity. By leveraging our IT solutions, logistics
                    companies can streamline their operations, reduce fuel
                    consumption, and enhance overall fleet efficiency.
                    <br />
                    <br />
                    Furthermore, warehouse management is a critical aspect of
                    logistics that demands robust IT systems. In an era of
                    e-commerce dominance, warehouses are becoming increasingly
                    digitized and automated. The logistics industry requires
                    smart warehouse solutions that integrate inventory
                    management, order fulfillment, and warehouse optimization
                    into a unified platform. Our comprehensive warehouse
                    management systems leverage automation, barcode scanning,
                    and data analytics to enhance inventory accuracy, accelerate
                    order processing, and optimize storage space. With our
                    solutions, businesses can achieve faster turnaround times,
                    minimize errors, and improve overall warehouse productivity.
                    <br />
                    <br />
                    In addition to real-time tracking, route optimization, and
                    warehouse management, the logistics industry also seeks
                    solutions for supply chain visibility, demand forecasting,
                    freight management, and last-mile delivery optimization. At
                    [Company Name], we have a dedicated team of skilled
                    professionals who possess extensive expertise in the
                    logistics domain. With our deep understanding of industry
                    requirements, we collaborate closely with our clients to
                    develop customized IT solutions that address their unique
                    challenges and objectives.
                    <br />
                    <br />
                    Whether it's implementing an integrated logistics management
                    system, developing a custom mobile application for real-time
                    tracking, or leveraging data analytics to gain valuable
                    insights into supply chain performance, we have the
                    knowledge and experience to deliver results. Our IT
                    solutions empower businesses in the logistics industry to
                    adapt to changing market dynamics, enhance operational
                    efficiency, reduce costs, and ultimately stay ahead of the
                    competition.
                    <br />
                    <br />
                    In conclusion, the logistics industry is undergoing a
                    digital transformation, and technology-driven solutions are
                    at the forefront of this revolution. At [Company Name], we
                    are dedicated to supporting the logistics industry by
                    providing a wide range of IT services and solutions tailored
                    to meet the industry's evolving demands. With our expertise
                    and commitment to innovation, we enable businesses to
                    navigate the complexities of logistics management, drive
                    growth, and achieve success in the digital age. Partner with
                    us today and experience the power of technology to
                    revolutionize your logistics operations.
                </p>
                <div class="modal-action">
                    <!-- if there is a button, it will close the modal -->
                    <div class="w-full flex justify-end">
                        <button class="btn-main px-4 py-2">Close</button>
                    </div>
                </div>
            </form>
        </dialog>
        <!--  -->
        <dialog id="Logistics" class="modal w-3/4 modal-middle">
            <form method="dialog" class="w-full md:p-6">
                <h3 class="font-bold text-3xl mb-4">Manufacturing</h3>
                <p class="py-4 break-all mx-auto">
                    In the fast-paced and ever-evolving landscape of the
                    manufacturing industry, efficient management is the key to
                    success. As technology continues to reshape the
                    manufacturing sector, companies must leverage advanced IT
                    solutions to streamline processes, optimize workflows, and
                    achieve operational excellence. At [IT Company Name], we
                    understand the unique challenges faced by manufacturing
                    management professionals, and we are dedicated to providing
                    cutting-edge technological solutions that meet and exceed
                    their demands.
                    <br />
                    <br />
                    Integrated Enterprise Resource Planning (ERP) Systems: Our
                    company specializes in implementing comprehensive ERP
                    systems specifically tailored for the manufacturing
                    industry. By seamlessly integrating various business
                    functions such as production planning, inventory management,
                    supply chain logistics, and financial management, our ERP
                    solutions empower manufacturing management teams to make
                    informed decisions, enhance collaboration, and maximize
                    overall operational efficiency.
                    <br />
                    <br />
                    Real-time Data Analytics and Business Intelligence:
                    Harnessing the power of real-time data analytics is crucial
                    for modern manufacturing management. Our advanced analytics
                    and business intelligence solutions enable manufacturers to
                    collect, analyze, and visualize critical data across the
                    production lifecycle. By providing valuable insights and
                    predictive analytics, our solutions facilitate proactive
                    decision-making, optimize resource allocation, identify
                    bottlenecks, and drive continuous improvement throughout the
                    manufacturing process.
                    <br />
                    <br />
                    Internet of Things (IoT) Connectivity and Automation: We
                    recognize the immense potential of IoT in revolutionizing
                    the manufacturing industry. Our IoT solutions enable
                    seamless connectivity between machines, devices, and
                    systems, fostering the development of smart factories.
                    Through real-time monitoring, remote management, and
                    predictive maintenance, our IoT-enabled platforms empower
                    manufacturing management professionals to improve
                    operational efficiency, reduce downtime, and enhance overall
                    productivity.
                    <br />
                    <br />
                    Supply Chain Management and Logistics Optimization:
                    Efficient supply chain management is essential for
                    manufacturing companies to stay competitive in today's
                    global market. Our supply chain management solutions
                    integrate seamlessly with existing systems, providing
                    end-to-end visibility and control over the entire supply
                    chain. From demand forecasting and inventory optimization to
                    logistics planning and supplier collaboration, our solutions
                    streamline processes, minimize costs, and improve customer
                    satisfaction.
                    <br />
                    <br />
                    Robotics and Automation: Automation plays a vital role in
                    transforming manufacturing operations. Our company offers
                    state-of-the-art robotic systems and automation solutions
                    designed to enhance production speed, precision, and
                    flexibility. By deploying robotics for repetitive and
                    hazardous tasks, manufacturing management teams can free up
                    human resources to focus on higher-value activities, leading
                    to increased productivity and improved quality control.
                    <br />
                    <br />
                    Cybersecurity and Data Protection: As technology becomes
                    more integrated into manufacturing processes, data security
                    becomes paramount. Our IT company prioritizes cybersecurity,
                    providing robust solutions to protect critical data, prevent
                    unauthorized access, and ensure compliance with industry
                    regulations. From implementing secure networks to conducting
                    vulnerability assessments and offering employee training, we
                    are committed to safeguarding manufacturing management
                    systems and data.
                    <br />
                    <br />
                    Conclusion: In an era of rapid technological advancements,
                    manufacturing management professionals require innovative IT
                    solutions to stay ahead of the competition. At [IT Company
                    Name], we are dedicated to empowering the manufacturing
                    industry with cutting-edge technologies that optimize
                    processes, enhance productivity, and drive operational
                    excellence. With our comprehensive suite of solutions, we
                    enable manufacturing management teams to overcome
                    challenges, seize opportunities, and embark on a
                    transformative journey toward a more efficient and
                    successful future.
                </p>
                <div class="modal-action">
                    <!-- if there is a button, it will close the modal -->
                    <div class="w-full flex justify-end">
                        <button class="btn-main px-4 py-2">Close</button>
                    </div>
                </div>
            </form>
        </dialog>
        <!--  -->
        <dialog id="Manufacturing" class="modal w-3/4 modal-middle">
            <form method="dialog" class="w-full md:p-6">
                <h3 class="font-bold text-3xl mb-4">Manufacturing</h3>
                <p class="py-4 break-all mx-auto">
                    In the fast-paced and ever-evolving landscape of the
                    manufacturing industry, efficient management is the key to
                    success. As technology continues to reshape the
                    manufacturing sector, companies must leverage advanced IT
                    solutions to streamline processes, optimize workflows, and
                    achieve operational excellence. At Innova Infosys, we
                    understand the unique challenges faced by manufacturing
                    management professionals, and we are dedicated to providing
                    cutting-edge technological solutions that meet and exceed
                    their demands.
                    <br />
                    <br />
                    Integrated Enterprise Resource Planning (ERP) Systems: Our
                    company specializes in implementing comprehensive ERP
                    systems specifically tailored for the manufacturing
                    industry. By seamlessly integrating various business
                    functions such as production planning, inventory management,
                    supply chain logistics, and financial management, our ERP
                    solutions empower manufacturing management teams to make
                    informed decisions, enhance collaboration, and maximize
                    overall operational efficiency.
                    <br />
                    <br />
                    Real-time Data Analytics and Business Intelligence:
                    Harnessing the power of real-time data analytics is crucial
                    for modern manufacturing management. Our advanced analytics
                    and business intelligence solutions enable manufacturers to
                    collect, analyze, and visualize critical data across the
                    production lifecycle. By providing valuable insights and
                    predictive analytics, our solutions facilitate proactive
                    decision-making, optimize resource allocation, identify
                    bottlenecks, and drive continuous improvement throughout the
                    manufacturing process.
                    <br />
                    <br />
                    Internet of Things (IoT) Connectivity and Automation: We
                    recognize the immense potential of IoT in revolutionizing
                    the manufacturing industry. Our IoT solutions enable
                    seamless connectivity between machines, devices, and
                    systems, fostering the development of smart factories.
                    Through real-time monitoring, remote management, and
                    predictive maintenance, our IoT-enabled platforms empower
                    manufacturing management professionals to improve
                    operational efficiency, reduce downtime, and enhance overall
                    productivity.
                    <br />
                    <br />
                    Supply Chain Management and Logistics Optimization:
                    Efficient supply chain management is essential for
                    manufacturing companies to stay competitive in today's
                    global market. Our supply chain management solutions
                    integrate seamlessly with existing systems, providing
                    end-to-end visibility and control over the entire supply
                    chain. From demand forecasting and inventory optimization to
                    logistics planning and supplier collaboration, our solutions
                    streamline processes, minimize costs, and improve customer
                    satisfaction.
                    <br />
                    <br />
                    Robotics and Automation: Automation plays a vital role in
                    transforming manufacturing operations. Our company offers
                    state-of-the-art robotic systems and automation solutions
                    designed to enhance production speed, precision, and
                    flexibility. By deploying robotics for repetitive and
                    hazardous tasks, manufacturing management teams can free up
                    human resources to focus on higher-value activities, leading
                    to increased productivity and improved quality control.
                    <br />
                    <br />
                    Cybersecurity and Data Protection: As technology becomes
                    more integrated into manufacturing processes, data security
                    becomes paramount. Our IT company prioritizes cybersecurity,
                    providing robust solutions to protect critical data, prevent
                    unauthorized access, and ensure compliance with industry
                    regulations. From implementing secure networks to conducting
                    vulnerability assessments and offering employee training, we
                    are committed to safeguarding manufacturing management
                    systems and data.
                    <br />
                    <br />
                    Conclusion: In an era of rapid technological advancements,
                    manufacturing management professionals require innovative IT
                    solutions to stay ahead of the competition. At Innova
                    Infosys, we are dedicated to empowering the manufacturing
                    industry with cutting-edge technologies that optimize
                    processes, enhance productivity, and drive operational
                    excellence. With our comprehensive suite of solutions, we
                    enable manufacturing management teams to overcome
                    challenges, seize opportunities, and embark on a
                    transformative journey toward a more efficient and
                    successful future.
                </p>
                <div class="modal-action">
                    <!-- if there is a button, it will close the modal -->
                    <div class="w-full flex justify-end">
                        <button class="btn-main px-4 py-2">Close</button>
                    </div>
                </div>
            </form>
        </dialog>
        <!--  -->

        <footer class="bg-[#f4f4f4] mt-20">
            <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
                <div class="lg:grid lg:grid-cols-2">
                    <div
                        class="border-b border-gray-100 py-8 lg:order-last lg:border-b-0 lg:border-s lg:py-16 lg:ps-16"
                    >
                        <div class="mt-8 space-y-4 lg:mt-0">
                            <span
                                class="hidden h-1 w-10 rounded bg-red-600 lg:block"
                            ></span>

                            <div>
                                <h2 class="text-2xl font-medium text-gray-900">
                                    Request a Demo
                                </h2>

                                <p class="mt-4 max-w-lg text-gray-500">
                                    Experience the power of our software
                                    firsthand! Request a personalized demo and
                                    let our team guide you through the features
                                    and capabilities that make our software
                                    solutions stand out. Discover how our
                                    technology can transform your business
                                    processes and drive your success.
                                </p>
                            </div>
                            <form class="mt-6 w-full">
                                <label for="UserEmail" class="sr-only">
                                    Email
                                </label>

                                <div
                                    class="rounded-md border border-gray-100 p-2 focus-within:ring sm:flex sm:items-center sm:gap-4"
                                >
                                    <input
                                        type="email"
                                        id="UserEmail"
                                        placeholder="Enter your email"
                                        class="w-full border-none focus:border-transparent focus:ring-transparent sm:text-sm"
                                    />

                                    <button
                                        class="mt-1 w-full btn-main px-6 py-3 text-sm font-bold uppercase tracking-wide text-white transition-none sm:mt-0 sm:w-auto sm:shrink-0"
                                    >
                                        Send
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="py-8 lg:py-16 lg:pe-16">
                        <img
                            class="w-40"
                            src="{{ asset('logo/logo.png') }}"
                            alt="logo"
                        />
                        <div
                            class="mt-8 flex justify-between gap-8 sm:grid-cols-3"
                        >
                            <div>
                                <p class="font-medium text-gray-900">
                                    Services
                                </p>

                                <ul class="mt-6 space-y-4 text-sm">
                                    <li>
                                        <a
                                            href="#"
                                            class="text-gray-700 transition hover:opacity-75"
                                        >
                                            Finance and Banking
                                        </a>
                                    </li>

                                    <li>
                                        <a
                                            href="#"
                                            class="text-gray-700 transition hover:opacity-75"
                                        >
                                            Hospital Management
                                        </a>
                                    </li>

                                    <li>
                                        <a
                                            href="#"
                                            class="text-gray-700 transition hover:opacity-75"
                                        >
                                            E-commerce and Retail
                                        </a>
                                    </li>

                                    <li>
                                        <a
                                            href="#"
                                            class="text-gray-700 transition hover:opacity-75"
                                        >
                                            Logistics
                                        </a>
                                    </li>

                                    <li>
                                        <a
                                            href="#"
                                            class="text-gray-700 transition hover:opacity-75"
                                        >
                                            Manufacturing
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <p class="font-medium text-gray-900">
                                    Follow us
                                </p>

                                <ul class="mt-6 space-y-4 text-sm">
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100094676550997"
                                            class="text-gray-700 transition hover:opacity-75"
                                        >
                                            Facebook
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://twitter.com/innovainfosys"
                                            class="text-gray-700 transition hover:opacity-75"
                                        >
                                            Twitter
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.instagram.com/innovainfosys/"
                                            class="text-gray-700 transition hover:opacity-75"
                                        >
                                            Instagram
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.quora.com/profile/II-256"
                                            class="text-gray-700 transition hover:opacity-75"
                                        >
                                            Quora
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <p class="font-medium text-gray-900">
                                    Helpful Links
                                </p>

                                <ul class="mt-6 space-y-4 text-sm">
                                    <li>
                                        <a
                                            href="{{ route('ABOUT') }}"
                                            class="text-gray-700 transition hover:opacity-75"
                                        >
                                            About
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="#"
                                            class="text-gray-700 transition hover:opacity-75"
                                        >
                                            Contact
                                        </a>
                                    </li>

                                    <!-- <li>
                                        <a
                                            href="#"
                                            class="text-gray-700 transition hover:opacity-75"
                                        >
                                            FAQs
                                        </a>
                                    </li> -->

                                    <li>
                                        <a
                                            href="{{ ROUTE('CAREERS') }}"
                                            class="text-gray-700 transition hover:opacity-75"
                                        >
                                            career
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-8 border-t border-gray-100 pt-8">
                            <ul class="flex flex-wrap gap-4 text-xs">
                                <!-- <li>
                                    <a
                                        href="#"
                                        class="text-gray-500 transition hover:opacity-75"
                                    >
                                        Terms & Conditions
                                    </a>
                                </li> -->

                                <li>
                                    <a
                                        href="{{ route('PRIVACY') }}"
                                        class="text-gray-500 transition hover:opacity-75"
                                    >
                                        Privacy Policy
                                    </a>
                                </li>

                                <li>
                                    <a
                                        href="#"
                                        class="text-gray-500 transition hover:opacity-75"
                                    >
                                        Cookies
                                    </a>
                                </li>
                            </ul>

                            <p class="mt-8 text-xs text-gray-500">
                                &copy; 2023. Innova Infosys. All rights
                                reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer -->

        <!-- all scripts -->

        <!-- jQuary cdn -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <!-- sliks slider default cdn -->
        <script
            type="text/javascript"
            src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
        ></script>

        <!-- sliks config -->
        <script src="{{ asset('js/slider.js') }}"></script>
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
        <!-- <script>
            // Grab HTML Elements
            const btn = document.querySelector("#nav-button");
            const menu = document.querySelector(".mobile-menu");

            // Add Event Listeners
            btn.addEventListener("click", () => {
                console.log("click");
                menu.classList.toggle("hidden");
            });
        </script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    </body>
</html>
