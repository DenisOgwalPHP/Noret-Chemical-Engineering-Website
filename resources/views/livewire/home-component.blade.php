<div class="page-content bg-white">
    <div class="main-slider3">
      <div class="swiper-container main-swiper3 banner-inner">
        <div class="swiper-wrapper">
            @foreach ($sliders as $slider)
                <div
                class="swiper-slide overlay-black-middle"
                style="
                background-image: url({{ asset('assets/images/main-slider') }}/{{ $slider->image }});
                background-size: cover;
                "
                >
                <div class="banner-content container">
                <div class="row">
                    <div class="col-lg-9">
                    <h1 class="title" data-swiper-parallax="-500">
                        {{ $slider->title }}
                    </h1>
                    <p data-swiper-parallax="-1000">
                        {{ $slider->subtitle }}
                    </p>
                    <div data-swiper-parallax="-1500">
                        <a
                        href="{{ route('about') }}"
                        class="btn btn-primary btn-border btn-border-white m-r10 m-b10"
                        >ABOUT US</a
                        >
                    </div>
                    </div>
                </div>
                </div>
            </div>
            @endforeach
        </div>
      </div>
      <div class="swiper-container slider-thumbs-wraper main-swiper-thumb3">
        <div class="swiper-wrapper">
            @foreach ($sliders as $slider)
                <div class="swiper-slide">
                    <div class="slider-thumbs">
                    <div class="dz-media">
                        <img src="{{ asset('assets/images/main-slider') }}/{{ $slider->image }}" alt="{{ $slider->title }}" />
                    </div>
                    <div class="dz-info">
                        <h4 class="title">{{ str_limit(strip_tags($slider->title),15,'...') }}</h4>
                        <p>{{ str_limit(strip_tags($slider->subtitle),50,'...') }}</p>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
      </div>
    </div>

    <section
      class="content-inner-1 section"
      style="
        background-image: url('{{ asset('assets/images/background/bg9.jpg') }}');
        background-size: cover;
        background-position: top;
      "
        >
      <div class="container">
        <div class="row">
          <div
            class="col-lg-6 aos-item"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-delay="200"
          >
            <div class="section-head style-1">
              <h3 class="title m-b30">
                We Provide Full Range Of High Services Solution
              </h3>
              <div class="exp-row">
                <h2 class="year counter">2</h2>
                <p>YEARS OF <span>EXPRIENCE</span></p>
              </div>
            </div>
          </div>
          <div
            class="col-lg-6 m-b30 aos-item"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-delay="400"
          >
            <p class="m-b30">
                The world today faces a lot of engineering problems. These bottlenecks  fall under various sectors to mention but a few; energy, manufacturing, processing, water resource management and distribution among many others. ...
            </p>
            <a
              href="{{ route('about') }}"
              class="btn btn-primary btn-border btn-border m-r10 m-b10"
              >ABOUT US</a
            >
          </div>
        </div>

        <div class="swiper-container content-slider">
            <div class="section-head style-1 text-center aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <h6 class="sub-title text-primary">Some Of Our Service Solution</h6>
            </div>
      
          <div class="swiper-wrapper">
            @foreach ($services  as $service)
            <div
              class="swiper-slide aos-item"
              data-aos="fade-up"
              data-aos-duration="800"
              data-aos-delay="600">
              <div class="content-box2 overlay-shine">
                <div class="dz-info">
                  <h3 class="title">{{ $service->name }}</h3>
                  <p>
                    {{ str_limit(strip_tags($service->description),100,'...') }}
                  </p>
                </div>
                <div class="dz-media m-b30">
                  <img src="{{ asset('assets/images/services') }}/{{ $service->image }}" alt="{{ $service->name }}" style="height: 200px;"/>
                </div>
                <div class="dz-bottom">
                  <a href="{{ route('services.details', ['slug' => $service->slug]) }}" class="btn-link"
                    >READ MORE<i class="fas fa-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div
            class="swiper-pagination-content m-t30 swiper-pagination text-center"
          ></div>
        </div>
      </div>
    </section>

    <section class="content-inner-4 about-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-8">
            <div class="swiper-container about-main-slider about-swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide" data-title="NORET Engineering Technologies">
                  <div class="section-head style-1">
                    <h6
                      class="sub-title text-primary"
                      data-swiper-parallax="-500"
                    >
                      About Our Agency
                    </h6>
                    <h2
                      class="title m-b20 text-white"
                      data-swiper-parallax="-1000"
                    >
                        NORET ENGINEERING TECHNOLOGIES LTD
                    </h2>
                    <p class="text-white" data-swiper-parallax="-1500">
                        NORET Engineering Technologies Ltd is a company established in 2021 under the companies act (Reg  No. 80020003298260). We collaborate with a number of stakeholders in the chemical and processing industry, quality assurance and quality control, chemical product design and development, manufacturing, energy sector, agricultural sector, water resources management ,  academic institutions among others.
                    </p>
                  </div>
                  <a
                    href="{{ route('about') }}"
                    data-swiper-parallax="-2000"
                    class="btn btn-primary btn-border-white btn-border m-r10 m-b10"
                    >ABOUT US</a
                  >
                </div>
                <div class="swiper-slide" data-title="Our Vision">
                  <div class="section-head style-1">
                    <h6
                      class="sub-title text-primary"
                      data-swiper-parallax="-500"
                    >
                      Our Vision
                    </h6>
                    <h2
                      class="title m-b20 text-white"
                      data-swiper-parallax="-1000"
                    >
                    Vision Statement
                    </h2>
                    <p class="text-white" data-swiper-parallax="-1500">
                        To become a global  hub for Training, Research, Innovation, Technology and Industrial Development (TRITID).
                    </p>
                  </div>
                  <a
                    href="{{ route('about') }}"
                    data-swiper-parallax="-2000"
                    class="btn btn-primary btn-border-white btn-border m-r10 m-b10"
                    >ABOUT US</a
                  >
                </div>
                <div
                  class="swiper-slide"
                  data-title="Our Mission"
                >
                  <div class="section-head style-1">
                    <h6
                      class="sub-title text-primary"
                      data-swiper-parallax="-500"
                    >
                      Our Mission
                    </h6>
                    <h2
                      class="title m-b20 text-white"
                      data-swiper-parallax="-1000"
                    >
                       Mission statement
                    </h2>
                    <p class="text-white" data-swiper-parallax="-1500">
                        To be a catalyst for Training, Research, Innovation, Technology and Industrial Development  to our customers, contributors, and partners’ communities and businesses.
                    </p>
                  </div>
                  <a
                    href="{{ route('about') }}"
                    data-swiper-parallax="-2000"
                    class="btn btn-primary btn-border-white btn-border m-r10 m-b10"
                    >ABOUT US</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination-about about-pagination"></div>
      <div class="swiper-container about-bg-slider bg-about-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="dz-media">
              <img src="{{ asset('assets/images/background/bg10.jpg') }}" alt="" />
            </div>
          </div>
          <div class="swiper-slide">
            <div class="dz-media">
              <img src="{{ asset('assets/images/background/bg11.jpg') }}" alt="" />
            </div>
          </div>
          <div class="swiper-slide">
            <div class="dz-media">
              <img src="{{ asset('assets/images/background/bg12.jpg') }}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- <section class="content-inner bg-gray bg-particles" id="particles-js">
      <div class="container">
        <div class="row about-style3 align-items-center">
          <div
            class="col-lg-6 m-b30 aos-item"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-delay="200"
          >
            <div class="about-thumb">
              <div class="about-video overlay-white-light">
                <img class="w-100" src="{{ asset('assets/images/about/about4.jpg') }}" alt="" />
              </div>
            </div>
          </div>
          <div
            class="col-lg-6 m-b30 aos-item"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-delay="400"
          >
            <div class="about-content">
              <div class="section-head style-1">
                <h2 class="title m-b10">
                    Our Services
                </h2>
                <p>
                    NORET Engineering Technologies Limited is a multifaceted company.  We offer a range of services in the following areas:
                </p>
              </div>
              <ul class="list-arrow-right-circle white m-b5">
                <li>Chemical Laboratory Services & Consultancy.</li>
                <li>Laboratory Supplies and Instrumentation Training.</li>
                <li>Process  Design and Product Development.</li>
                <li>Technical Support services in Petroleum Exploration and Refining (Consultancy, Petroleum fuels testing & analysis, Exploration, drilling, data processing and Interpretation and  Waste  management).</li>
                <li>Quality Control and Assurance Consultancy.</li>
                <li>Oil and Gas, and Chemical Process Simulation Software Packages Training.</li>
                <li>Research and Research Facility Services.</li>
                <li>Value Addition and Product Diversity.</li>
              </ul>
              <a
                href="{{ route('services') }}"
                class="btn btn-primary btn-border m-r10 m-b10"
                >SERVICES</a
              >
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    {{-- <section
      class="content-inner-1 bg-white aos-item"
      data-aos="fade-in"
      data-aos-duration="800"
      data-aos-delay="200">
      <div class="container">
        <div class="section-head style-1 text-center">
          <h5 class="text-primary sub-title">Testimonials</h5>
          <h2 class="title">What Our Clients Say!</h2>
        </div>
        <div class="swiper-container testimonial-swiper4 slider-btn-1">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-4">
                <div class="testimonial-pic">
                  <img src="{{ asset('assets/images/testimonials/pic1.jpg') }}" alt="" />
                </div>
                <div class="testimonial-info">
                  <div class="testimonial-text">
                    <p>
                      Lorem ipsum dolor sit am adipi we help you ensure
                      everyone is in the right jobs sicing elit, sed do
                      consulting firms Et leggings across the nation tempor
                      Lorem ipsum dolor sit am adipi we help you ensure
                      everyone is in the right jobs sicing elit, sed do
                      consulting firms.
                    </p>
                  </div>
                  <h5 class="testimonial-name">FIG NELSON</h5>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-4">
                <div class="testimonial-pic">
                  <img src="{{ asset('assets/images/testimonials/pic2.jpg') }}" alt="" />
                </div>
                <div class="testimonial-info">
                  <div class="testimonial-text">
                    <p>
                      Lorem ipsum dolor sit am adipi we help you ensure
                      everyone is in the right jobs sicing elit, sed do
                      consulting firms Et leggings across the nation tempor
                      Lorem ipsum dolor sit am adipi we help you ensure
                      everyone is in the right jobs sicing elit, sed do
                      consulting firms.
                    </p>
                  </div>
                  <h5 class="testimonial-name">JOHN DOE</h5>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-4">
                <div class="testimonial-pic">
                  <img src="{{ asset('assets/images/testimonials/pic3.jpg') }}" alt="" />
                </div>
                <div class="testimonial-info">
                  <div class="testimonial-text">
                    <p>
                      Lorem ipsum dolor sit am adipi we help you ensure
                      everyone is in the right jobs sicing elit, sed do
                      consulting firms Et leggings across the nation tempor
                      Lorem ipsum dolor sit am adipi we help you ensure
                      everyone is in the right jobs sicing elit, sed do
                      consulting firms.
                    </p>
                  </div>
                  <h5 class="testimonial-name">DOUGLAS LYPHE</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button">
            <div class="button-prev swiper-button-prev4">
              <i class="las la-arrow-left"></i>
            </div>
            <div class="swiper-pagination swiper-pagination4"></div>
            <div class="button-next swiper-button-next4">
              <i class="las la-arrow-right"></i>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    {{-- <section
      class="content-inner overlay-black-middle dz-section-2"
      style="background-image: url('{{ asset('assets/images/background/bg1.jpg') }}')">
      <div class="container">
        <div class="row align-items-center">
          <div
            class="col-lg-7 m-b30 aos-item"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-delay="200"
          >
            <div class="section-head style-1">
              <h5 class="text-primary sub-title">
                Increase Knowlege With Experience.
              </h5>
              <h2 class="title text-white">
                Different Sectors That We Put our Focus To.
              </h2>
              <p class="text-white">
                We’re continually working to change the way people think
                about and engage in these sectors. A new story is beginning
                with a new vision for the future, an expertise across the
                entire industry cycle and the ambition.
              </p>
              <ul class="list-arrow-right-circle white m-b40">
                @foreach ($sectors as $sector)
                    <li>{{ $sector->name }}</li>
                @endforeach
              </ul>
            </div>
            <a
              href="{{ route('sectors') }}"
              class="btn btn-primary btn-border btn-border-white m-r10 m-b10"
              >SECTORS</a
            >
          </div>
          <div
            class="col-lg-5 m-b30 aos-item"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-delay="400"
          >
            <div class="video-box rounded overflow-hidden overlay-effect">
              <img src="{{ asset('assets/images/about/about29.jpg') }}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    <section class="content-inner-1">
      <div class="container">
        <div
          class="contact-area2 aos-item"
          data-aos="fade-up"
          data-aos-duration="800"
          data-aos-delay="500"
        >
          <div class="row">
            <div
              class="col-lg-6 mb-lg-0 m-b0 m-lg-b40 aos-item"
              data-aos="fade-up"
              data-aos-duration="800"
              data-aos-delay="200"
            >
              <div class="dz-media">
                <img src="{{ asset('assets/images/about/about30.png') }}" alt="" />
                <div class="info">
                  <h2 class="text-white">Contact Us</h2>
                  <p>Use this form to send us a message, We will get back to you</p>
                </div>
              </div>
            </div>
            <div
              class="col-lg-6 aos-item"
              data-aos="fade-up"
              data-aos-duration="800"
              data-aos-delay="400"
            >
              <form
                class="dz-form m-b40"
                wire:submit.prevent="sendMessage"
              >

                <div class="row">
                  <div class="col-sm-12">
                    <div class="input-group">
                      <input
                        required
                        type="text"
                        class="form-control"
                        name="dzOther[first_name]"
                        placeholder="Full Name"
                        wire:model="name"
                      />
                    </div>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="col-sm-6">
                    <div class="input-group">
                      <input
                        required
                        type="email"
                        class="form-control"
                        name="dzEmail"
                        placeholder="Email Adress"
                        wire:model="email"
                      />
                    </div>
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="col-sm-6">
                    <div class="input-group">
                      <input
                        required
                        type="text"
                        class="form-control"
                        name="dzOther[phone_number]"
                        placeholder="Phone No."
                        wire:model="phone"
                      />
                    </div>
                    @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="col-sm-12">
                    <div class="input-group">
                      <textarea
                        required
                        name="dzMessage"
                        rows="5"
                        class="form-control"
                        wire:model="message"
                        placeholder="Message"
                      >
                    </textarea
                      >
                    </div>
                    @error('message')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                  </div>
                </div>

                <div>
                  <button
                    name="submit"
                    type="submit"
                    class="btn btn-primary w-100 justify-content-center btn-border m-r10 m-b10"
                  >
                    SUBMIT
                  </button>
                </div>
              </form>
              @if (Session::has('message'))
              <div class="alert alert-success m-t20" role="alert">{{ Session::get('message') }}</div>
          @endif
              <div class="call-box3">
                <i class="fas fa-phone-alt icon"></i>
                <h4 class="title">{{ $setting->phone }}</h4>
                <span>09:00 Am - 06:00 PM</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section
      class="content-inner overlay-gradient-sec"
      style="
        background-image: url('{{ asset('assets/images/main-slider/slider3.jpg') }}');
        background-size: cover;
        background-position: center;
      ">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 align-self-center m-b30">
            <div
              class="about-wrapper-2 aos-item"
              data-aos="fade-right"
              data-aos-duration="800"
              data-aos-delay="200"
            >
              <div class="swiper-container about-swiper-2">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="{{ asset('assets/images/about/about31.jpg') }}" alt="" />
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('assets/images/about/about32.jpg') }}" alt="" />
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('assets/images/about/about33.jpg') }}" alt="" />
                  </div>
                </div>
                <div class="swiper-button">
                  <div class="btn-prev swiper-button-prev-about2">
                    <i class="las la-angle-left"></i>
                  </div>
                  <div class="btn-next swiper-button-next-about2">
                    <i class="las la-angle-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-lg-5 align-self-center m-b5 aos-item"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-delay="400"
          >
            <div class="section-head style-1">
              <h3 class="title m-b20 text-white">
                Our Objectives
              </h3>
              <p class="text-white">
                We collaborate with a number of stakeholders to archive these objectives.
              </p>
              <ul class="list-arrow-right-circle white m-b5">
                <li>Promote research and innovation in science and technology.</li>
                <li>Promote and improve quality compliance in industrial sector.</li>
                <li>Promote value addition of agricultural produce.</li>
                <li>Provide services in Oil and Gas industry.</li>
                <li>Provide professional training in relevant process design and simulation and oil and gas  softwares.</li>
                <li>Provide laboratory supplies and training.</li>
              </ul>
            </div>
            <a
              href="{{ route('about') }}"
              class="btn btn-primary btn-border-white btn-border m-r10 m-b10"
              >ABOUT US</a
            >
          </div>
        </div>
      </div>
    </section>

    <section class="content-inner overlay-black-middle " style="background-image: url('{{ asset('assets/images/background/bg1.jpg') }}')">
      <div class="container">
        <div class="row">
          <div
            class="col-lg-6 m-b30 aos-item"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-delay="200"
          >
            <div class="section-head style-1">
              <h3 class="title m-b20">
                Checkout Out Some Of The Sectors We Engage To.
              </h3>
              <h6 class="sub-title style-1 text-primary">
                Always Powering Your Business
              </h6>
            </div>
            <p class="m-b40">
                We’re continually working to change the way people think
                about and engage in these sectors. A new story is beginning
                with a new vision for the future, an expertise across the
                entire industry cycle and the ambition.
            </p>

            <a
              href="{{ route('about') }}"
              class="btn btn-primary btn-border m-r10 m-b10"
              >SECTORS</a
            >
          </div>
          <div
            class="col-lg-6 m-b30 aos-item"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-delay="400"
          >
            <div class="accordion dz-accordion2" id="accordionFaq2">
                @foreach ($sectors as $sector)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne{{ $sector->id }}">
                        <a
                            href="{{ route('sectors.details', ['slug' => $sector->slug]) }}"
                            class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseOne{{ $sector->id }}"
                            aria-expanded="false"
                            aria-controls="collapseOne{{ $sector->id }}"
                        >
                            {{ $sector->name }}
                            <span class="toggle-close"></span>
                        </a>
                        </h2>
                        <div
                        id="collapseOne{{ $sector->id }}"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingOne{{ $sector->id }}"
                        data-bs-parent="#accordionFaq2"
                        >
                        <div class="accordion-body">
                            {{-- <h4>Power & Energy</h4> --}}
                            <p class="m-b0">
                            {{$sector->description}}
                            </p>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- <section
      class="content-inner-1 overlay-black-middle"
      style="
        background-image: url('{{ asset('assets/images/background/bg14.jpg') }}');
        background-size: cover;
        background-position: center;
      "
        >
      <div class="container">
        <div
          class="section-head style-1 text-center aos-item"
          data-aos="fade-up"
          data-aos-duration="800"
          data-aos-delay="200"
        >
          <h3 class="title m-b20 text-white">
            Subscribe to Our Newsletter
          </h3>
          <p class="text-white">
            Lorem ipsum dolor sit am adipi we help you ensure everyone is in
            the right jobs sicing elit, sed do consulting firms Et leggings
            across the nation tempor.
          </p>
        </div>
        <form
          class="dzSubscribe style-1 aos-item"
          data-aos="fade-up"
          data-aos-duration="800"
          data-aos-delay="400"
          action="script/mailchamp.php"
          method="post"
        >
          <div class="ft-subscribe">
            <div class="dzSubscribeMsg text-white"></div>
            <div class="ft-row">
              <input
                name="dzEmail"
                required="required"
                type="email"
                placeholder="Enter Email Address"
                class="form-control"
              />
              <button
                name="submit"
                value="Submit"
                type="submit"
                class="btn"
              >
                <i class="fas fa-envelope"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </section> --}}
  </div>
