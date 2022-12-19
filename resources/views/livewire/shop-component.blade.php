
        <div class="page-content bg-white">

            <!-- Banner  -->
            <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg') }});">
                <div class="container">
                    <div class="dz-bnr-inr-entry">
                        <h1>Services</h1>
                        <!-- Breadcrumb Row -->
                        <nav aria-label="breadcrumb" class="breadcrumb-row">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Services</li>
                                {{-- <li class="breadcrumb-item active" aria-current="page">Shop grid Sidebar</li> --}}
                            </ul>
                        </nav>
                        <!-- Breadcrumb Row End -->
                    </div>
                </div>
            </div>
            <!-- Banner End -->
            <section class="content-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 m-b30">
                            <aside class="sticky-top">
                                <div class="widget">
                                    <div class="widget-title">
                                        <h5 class="title">Filter By Sector</h5>
                                    </div>
                                    <ul class="isotope-menu">
                                        <li class="active" data-filter="*">All</li>
                                        @foreach ($sectors as $category)
                                            <li data-filter=".{{ $category->slug }}">{{ $category->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                            </aside>
                        </div>
                        <div class="col-xl-9 col-lg-8 ">
                            <div class="row project-items">
                                @foreach ($services  as $service)
                                    <div class="col-xl-4 col-sm-6 m-b30 {{ $service->category->slug }}" >
                                        <div class=" item-box m-b30" style="height: 400px;">
                                            <div class="item-img">
                                                <img src="{{ asset('assets/images/services') }}/{{ $service->image }}" style="height: 200px;" alt="{{ $service->name }}">
                                                <span class="badge bg-danger">{{ str_limit(strip_tags($service->category->name ),20,'...') }}</span>
                                            </div>
                                            <div class="position-relative item-info text-center" style="height: 200px;">
                                                <h4 class="item-title"><a href="{{ route('services.details', ['slug' => $service->slug]) }}">{{ str_limit(strip_tags($service->name ),25,'...') }}</a></h4>
                                                <p>{{ str_limit(strip_tags($service->description),100,'...') }} </p>
                                                <div class="position-absolute top-100 start-50 translate-middle dz-bottom">
                                                    <a href="{{ route('services.details', ['slug' => $service->slug]) }}" class="btn-link">READ MORE<i class="fas fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="d-flex aligns-items-center justify-content-center">
                                    <nav aria-label="Blog Pagination">
                                        {{ $services->links('pagination::bootstrap-4') }}
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container m-t30">
                    <div class="section-head style-1 text-center aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <h6 class="sub-title text-primary m-b20">Sectors That We Specialise In</h6>
                    </div>
                    @php
                        $i = 01;
                        $d = 200;
                    @endphp
                    <div class="team-swiper-1 btn-center-lr">
                        <div class="swiper-container team-slider">
                            <div class="swiper-wrapper">
                                @foreach ($sectors as $sector)
                                    <div class="swiper-slide">
                                        <div class="dz-team style-1 text-center m-b10 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ 200 + $d++ }}">
                                            <div class="dz-media">
                                                <img src="{{ asset('assets/images/sectors') }}/{{ $sector->image }}" style="height: 200px;" alt="{{ $sector->name }}">

                                                {{-- <ul class="team-social">
                                                    <li><a href="https://twitter.com/" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="https://in.pinterest.com/" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                                </ul> --}}
                                            </div>
                                            <div class="dz-content">
                                                <a href="{{ route('sectors.details', ['slug' => $sector->slug]) }}">
                                                    <h3 class="dz-name">{{ str_limit(strip_tags($sector->name),15,'...') }}</h3>
                                                </a>
                                                <h6 class="dz-position text-primary">{{ str_limit(strip_tags($sector->description),100,'...') }} </h6>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-button">
                            <div class="btn-prev swiper-button-prev-team"><i class="las la-angle-left"></i></div>
                            <div class="btn-next swiper-button-next-team"><i class="las la-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </section>



        </div>
