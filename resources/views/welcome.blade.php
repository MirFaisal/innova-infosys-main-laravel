
@extends('master.master')


    <!-- navigation end -->
@section('content')
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
                <h3 class="soluton-title text-3xl pb-8">Custom Software Development</h3>
                <p class="soluton-info text">
                  Custom software development involves creating personalized software solutions tailored to meet specific business needs and requirements. It includes understanding client objectives, designing the software architecture, writing code, testing for quality assurance, and deploying the software. Custom software development provides scalability, flexibility, and the ability to address unique challenges. It requires expertise in various programming languages, frameworks, and development methodologies. Ongoing maintenance and support ensure the software remains functional and up to date. Intellectual property rights typically belong to the client. Custom software development offers a competitive advantage by providing unique features and functionalities not found in off-the-shelf solutions. Collaboration and communication between the software company and the client are essential throughout the development process.
                </p>
              </div>
              <div class="solution-items">
                <h3 class="soluton-title text-3xl pb-8">Enterprise Software Solutions</h3>
                Enterprise software solutions are large-scale applications designed to address the complex needs of organizations. They include ERP systems, CRM software, project management tools, and more. These solutions integrate various departments and functions, streamlining processes and improving efficiency. Enterprise software often offers modules for different business functions, such as finance, human resources, inventory management, and sales. They provide real-time data, analytics, and reporting capabilities to support informed decision-making. Scalability is a key aspect, allowing the software to accommodate business growth and changing needs. Enterprise software solutions may be customizable to fit specific industry requirements. They often require integration with existing systems and databases. Implementation of enterprise software solutions involves careful planning, configuration, and training for successful adoption. Ongoing support and updates are crucial to ensure optimal performance and security.
              </div>
              <div class="solution-items">
                <h3 class="soluton-title text-3xl pb-8">Web Development and Design</h3>
                <p class="soluton-info text">                
                  Custom software development involves creating unique software solutions tailored to specific business needs and requirements. It offers flexibility and scalability, allowing businesses to adapt and grow. The process includes gathering requirements, designing, coding, testing, and deployment. Ongoing maintenance and support ensure the software remains functional and up to date. Custom software development requires expertise in programming languages, frameworks, and development methodologies. It provides a competitive advantage by offering personalized features and functionalities. Collaboration and communication between the software company and the client are crucial for success. Custom software can integrate with existing systems and databases.
                </p>
              </div>
              <div class="solution-items">
                <h3 class="soluton-title text-3xl pb-8">Mobile App Development</h3>
                <p class="soluton-info text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Laudantium dicta id, repellendus ullam a nesciunt
                  consequuntur. Nemo, suscipit ab! Iste id quos sit nesciunt
                  cumque quaerat cum quia delectus, ducimus nihil ea! Corrupti
                  exercitationem iste laboriosam eos inventore, animi omnis.
                </p>
              </div>
              <div class="solution-items">
                <h3 class="soluton-title text-3xl pb-8">Software Integration</h3>
                <p class="soluton-info text">
                  Software integration refers to the process of connecting and combining different software systems to enable seamless data flow and functionality. It involves linking applications, databases, and APIs. Integration can streamline workflows, improve efficiency, and enhance data accuracy. Common integration methods include point-to-point connections, middleware, and API-based integrations. Software integration requires thorough analysis of existing systems and their integration requirements. It often involves data mapping, transformation, and synchronization. Integration can be achieved on-premises or in the cloud, depending on the architecture and infrastructure. It enables systems to communicate and share data in real time. Robust security measures are crucial to protect data during integration. Effective integration reduces redundancy and promotes data consistency.
                </p>
              </div>
              <div class="solution-items">
                <h3 class="soluton-title text-3xl pb-8">Cloud-based Solutions</h3>
                <p class="soluton-info text">
                  Cloud-based solutions refer to software applications and services that are hosted and accessed over the internet. They leverage cloud computing infrastructure and provide scalability, flexibility, and cost-efficiency. Cloud-based solutions can include software-as-a-service (SaaS), platform-as-a-service (PaaS), and infrastructure-as-a-service (IaaS) offerings. They eliminate the need for on-premises infrastructure and allow businesses to access applications and data from anywhere. Cloud-based solutions offer automatic software updates, data backup, and disaster recovery capabilities. They enable collaboration and real-time data sharing among distributed teams. Security measures such as data encryption and access controls are implemented to protect sensitive information. Cloud-based solutions reduce upfront costs and offer a pay-as-you-go pricing model.
                </p>
              </div>
              <div class="solution-items">
                <h3 class="soluton-title text-3xl pb-8">Data Analytics and Business Intelligence</h3>
                <p class="soluton-info text">
                  Data analytics and business intelligence involve the process of collecting, analyzing, and interpreting data to gain insights and support decision-making. It encompasses techniques such as data mining, statistical analysis, and data visualization. Data analytics helps identify patterns, trends, and correlations within large datasets. Business intelligence focuses on turning raw data into actionable information for strategic planning and operational improvements. Data analytics and business intelligence tools enable organizations to make data-driven decisions, optimize processes, and identify opportunities for growth. They provide interactive dashboards, reports, and visualizations for data exploration and presentation. Advanced analytics techniques such as predictive modeling and machine learning can be applied to uncover future trends and make predictions.
                </p>
              </div>
            </div>
            <div class="solution-banner h-[550px]">
              <div class="solution-for flex">
                <div class="solution-showcase">
                  <img src="{{asset('/solution_showcase/showcase1.jpg')}}" alt="" />
                </div>
                <div class="solution-showcase">
                  <img src="{{asset('/solution_showcase/showcase2.jpg')}}" alt="" />
                </div>
                <div class="solution-showcase">
                  <img src="{{asset('/solution_showcase/showcase3.jpg')}}" alt="" />
                </div>
                <div class="solution-showcase">
                  <img src="{{asset('/solution_showcase/showcase1.jpg')}}" alt="" />
                </div>
                <div class="solution-showcase">
                  <img src="{{asset('/solution_showcase/showcase2.jpg')}}" alt="" />
                </div>
                <div class="solution-showcase">
                  <img src="{{asset('/solution_showcase/showcase3.jpg')}}" alt="" />
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
                  Empowering the Finance and Banking industry with cutting-edge IT solutions for streamlined operations, enhanced security, and optimized performance.
                </p>
                <div class="w-full pt-5 flex justify-end">
                  <a class="btn-main py-2 px-6" onclick="{Finance_and_Banking.showModal()}">Read more</a>
                </div>
              </div>
              <div class="industries-showcase w-[540px] overflow-hidden">
                <img
                  class="transition-all duration-500"
                  src="{{asset('/industries_showcase/industries_showcase1.jpg')}}"
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
                <h3 class="text-3xl">Hospital Management</h3>
                <p>
                  Revolutionizing Hospital Management with cutting-edge IT solutions and services for streamlined operations, improved patient care, and optimized performance.
                </p>
                <div class="w-full pt-5 flex justify-end">
                  <button class="btn-main py-2 px-6" onclick="{Hospital_Management.showModal()}">Read more</button>
                </div>
              </div>
              <div class="industries-showcase w-[540px] overflow-hidden">
                <img
                  class="transition-all duration-500"
                  src="{{asset('/industries_showcase/industries_showcase2.jpg')}}"
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
                <h3 class="text-3xl"> E-commerce and Retail.</h3>
                <p>
                  We seamlessly combine cutting-edge technology with unrivaled expertise to offer comprehensive solutions for E-commerce and Retail management, empowering businesses to thrive in the digital era.
                </p>
                <div class="w-full pt-5 flex justify-end">
                  <button class="btn-main py-2 px-6 "onclick="E_commerce_and_Retail.showModal()">Read more</button>
                  
                </div>
              </div>
              <div class="industries-showcase w-[540px] overflow-hidden">
                <img
                  class="transition-all duration-500"
                  src="{{asset('/industries_showcase/industries_showcase3.jpg')}}"
                  alt=""
                />
              </div>
            </div>
            <!--  -->         
            <!--  -->
            <div
              class="industries-item h-[340px] flex justify-start items-center relative"
            >
              <div
                class="text w-[900px] h-[260px] p-8 flex flex-col space-y-5 absolute right-0 z-40"
              >
                <h3 class="text-3xl">Logistics </h3>
                <p>
                  We deliver seamless IT solutions tailored to revolutionize logistics management and streamline your operations for unparalleled efficiency and success.
                </p>
                <div class="w-full pt-5 flex justify-end">
                  <button class="btn-main py-2 px-6"onclick="{Logistics.showModal()}">Read more</button>
                </div>
              </div>
              <div class="industries-showcase w-[540px] overflow-hidden">
                <img
                  class="transition-all duration-500"
                  src="{{asset('/industries_showcase/industries_showcase2.jpg')}}"
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
                <h3 class="text-3xl"> Manufacturing</h3>
                <p>
                  Transforming manufacturing management with innovative IT solutions that optimize processes, enhance productivity, and drive operational excellence.
                </p>
                <div class="w-full pt-5 flex justify-end">
                  <button class="btn-main py-2 px-6" onclick="{Manufacturing.showModal()}">Read more</button>
                  
                </div>
              </div>
              <div class="industries-showcase w-[540px] overflow-hidden">
                <img
                  class="transition-all duration-500"
                  src="{{asset('/industries_showcase/industries_showcase3.jpg')}}"
                  alt=""
                />
              </div>
            </div>
            <!--  -->
            
          </div>
        </div>
      </section>
      <!-- industries section end  -->
      
    </main>
@endsection
    