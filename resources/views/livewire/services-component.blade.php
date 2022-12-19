<div class="page-content bg-white">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg') }});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Sectors</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sectors</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Services -->
    <section class="content-inner bg-gray">
        <div class="container">
            <div class="row">
                @foreach ($sectors as $sector)
                    <div class="col-lg-4 col-md-6 m-b30" style="height: 500px;">
                        <div class="content-box2 m-b30" style="height: 500px;">
                            <div class="dz-info">
                                <a href="{{ route('sectors.details', ['slug' => $sector->slug]) }}">
                                <h4 class="title">{{ $sector->name }}</h4>
                            </a>
                                <p>{{ str_limit(strip_tags($sector->description),100,'...') }} </p>
                            </div>
                            <div class="dz-media m-b30">
                                <img src="{{ asset('assets/images/sectors') }}/{{ $sector->image }}" style="height: 200px;" alt="{{ $sector->name }}">
                            </div>
                            <div class="dz-bottom">
                                <a href="{{ route('sectors.details', ['slug' => $sector->slug]) }}" class="btn-link">READ MORE<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex aligns-items-center justify-content-center">
                    <nav aria-label="Blog Pagination">
                        {{ $sectors->links('pagination::bootstrap-4') }}
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="content-inner-2 service-wrapper-2 overlay-black-dark" style="background-image:url('{{ asset('assets/images/background/bg7.jpg') }}');background-size: cover;">
        <div class="container">
            <div class="section-head style-1 text-center aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <h6 class="sub-title text-primary">Our Services</h6>
            </div>
            @php
                $i = 01;
                $d = 200;
            @endphp
            <div class="btn-center-lr">
                <div class="swiper-container service-slider">
                    <div class="swiper-wrapper">
                        @foreach ($services as $service)
                            <div class="swiper-slide">
                                <div class="content-box overlay-shine aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ 200 + $d++ }}">
                                    <div class="dz-media">
                                        <img src="{{ asset('assets/images/services') }}/{{ $service->image }}" style="height: 200px;" alt="{{ $service->name }}">
                                    </div>
                                    <div class="dz-info" data-num="@if($i < 10)0{{ $i++ }} @else {{ $i++ }} @endif">

                                        <div class="icon-lg m-b20 text-primary">
                                            <i class="flaticon-cogwheel"></i>
                                        </div>
                                        <h4 class="title dz-title text-capitalized"><a href="{{ route('services.details', ['slug' => $service->slug]) }}">{{ $service->name }}</a></h4>
                                        <p class="m-b0">{{ str_limit(strip_tags($service->description),100,'...') }}</p>
                                    </div>
                                    <div class="dz-bottom">
                                        <a class="btn btn-primary d-block" href="{{ route('services.details', ['slug' => $service->slug]) }}">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-button">
                    <div class="btn-prev swiper-button-prev-service"><i class="las la-angle-left"></i></div>
                    <div class="btn-next swiper-button-next-service"><i class="las la-angle-right"></i></div>
                </div>
            </div>
        </div>
    </section>
</div>
