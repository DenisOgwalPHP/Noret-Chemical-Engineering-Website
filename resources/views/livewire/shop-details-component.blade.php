<div class="page-content bg-white">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg') }});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Service Details</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Service Details</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->
    <section class="content-inner-3">
        <div class="container">
            <div class="row m-b30 m-sm-b30">
                <div class="col-xl-8 col-lg-6 m-b20">
                    <div class="row sticky-top">
                        <div class="col-3 position-relative">
                            <div class="swiper-container thumb-slider sync2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="dz-media height-md">
                                            <img src="{{ asset('assets/images/services') }}/{{ $service->image }}" alt="{{ $service->name }}" >
                                        </div>
                                    </div>

                                </div>
                                {{-- <div class="thumb-slider-navigation">
                                    <div class="swiper-button-next-thumb">

                                    </div>
                                    <div class="swiper-button-prev-thumb">

                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="swiper-container single-image-slider sync1 lightgallery">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="dz-thum-bx height-lg">
                                            <img src="{{ asset('assets/images/services') }}/{{ $service->image }}" alt="{{ $service->name }}" style="height: 500px">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <span data-exthumbimage="{{ asset('assets/images/services') }}/{{ $service->image }}" data-src="{{ asset('assets/images/services') }}/{{ $service->image }}" class="view-btn lightimg">
                                                    <svg width="75" height="74" viewBox="0 0 75 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M44.5334 27.7473V32.3718C44.5334 33.3257 43.7424 34.106 42.7755 34.106H34.572V42.199C34.572 43.1528 33.7809 43.9332 32.8141 43.9332H28.1264C27.1595 43.9332 26.3685 43.1528 26.3685 42.199V34.106H18.1649C17.1981 34.106 16.4071 33.3257 16.4071 32.3718V27.7473C16.4071 26.7935 17.1981 26.0131 18.1649 26.0131H26.3685V17.9201C26.3685 16.9663 27.1595 16.1859 28.1264 16.1859H32.8141C33.7809 16.1859 34.572 16.9663 34.572 17.9201V26.0131H42.7755C43.7424 26.0131 44.5334 26.7935 44.5334 27.7473ZM73.9782 68.8913L69.8325 72.9812C68.4555 74.3396 66.2288 74.3396 64.8664 72.9812L50.2466 58.5728C49.5874 57.9225 49.2212 57.0409 49.2212 56.116V53.7604C44.05 57.749 37.5458 60.1191 30.4702 60.1191C13.6384 60.1191 0 46.6646 0 30.0596C0 13.4545 13.6384 0 30.4702 0C47.3021 0 60.9405 13.4545 60.9405 30.0596C60.9405 37.0397 58.538 43.4563 54.4949 48.5578H56.8827C57.8202 48.5578 58.7138 48.9191 59.373 49.5694L73.9782 63.9777C75.3406 65.3362 75.3406 67.5329 73.9782 68.8913ZM50.3931 30.0596C50.3931 19.1919 41.4864 10.4052 30.4702 10.4052C19.4541 10.4052 10.5474 19.1919 10.5474 30.0596C10.5474 40.9273 19.4541 49.7139 30.4702 49.7139C41.4864 49.7139 50.3931 40.9273 50.3931 30.0596Z" fill="white" fill-opacity="0.66"/>
                                                    </svg>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 m-b20">
                    {{-- <form method="post" class="cart p-md-l0"> --}}
                        <div class="dlab-post-title ">
                            <h3 class="post-title">{{ $service->name }}</h3>
                            <p class="m-b30">{{ $service->description }}</p>
                        </div>

                        <div class="shop-item-tage m-b30">
                            <span>Sector :- </span>
                            <a href="">{{ $service->category->name }}</a>
                        </div>

                    {{-- </form> --}}
                </div>
            </div>
            <div class="row m-b80 m-sm-b30">
                <div class="col-xl-12">
                    <div class="product-description tabs-site-button">
                        <ul class="nav nav-tabs ">
                            <li><a data-bs-toggle="tab" href="#web-design-1" class="active">Description</a></li>
                            <li><a data-bs-toggle="tab" href="#developement-1">Service Review</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="web-design-1" class="tab-pane active">
                                <p class="m-b10">{{ $service->description }}</p>
                            </div>

                            <div id="developement-1" class="tab-pane" wire:ignore.self>
                                <div id="comments">
                                    <div class="comments-area style-1">
                                        <div class="widget-title">
                                            <h4 class="title">Comments</h4>
                                        </div>
                                        <div class="clearfix">
                                            <!-- comment list END -->
                                            <ol class="comment-list">
                                                @foreach ($reviews as $review)
                                                    <li class="comment">
                                                        <div class="comment-body">
                                                            <div class="comment-author vcard">
                                                                <img class="avatar photo" src="{{ asset('assets/images/profile.png') }}" alt="">
                                                            </div>
                                                            <div class="comment-info">
                                                                <div class="title">
                                                                    <cite class="fn">{{ $review->name }}</cite>

                                                                </div>
                                                                <p>{{ $review->comment }}</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ol>
                                            <!-- comment list END -->
                                        </div>
                                        <div class="widget-title">
                                            <h4 class="title">Leave Comment</h4>
                                        </div>
                                        <div class="clearfix">
                                            <!-- Form -->
                                            @if (Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                            @endif
                                            <div class="comment-respond style-1">
                                                <form class="comment-form"  wire:submit.prevent="addReview">
                                                    <p class="comment-form-author">
                                                        <label>Full Name <span class="required">*</span></label>
                                                        <input type="text" name="FullName"  placeholder="Full Name" wire:model="name">
                                                        @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </p>
                                                    <p class="comment-form-email">
                                                        <label>Email <span class="required">*</span></label>
                                                        <input type="email" placeholder="Email"  name="email" wire:model="email" >
                                                        @error('email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </p>

                                                    <p class="comment-form-comment">
                                                        <label>Comment <span class="required">*</span></label>
                                                        <textarea rows="8" name="comment" placeholder="comment" wire:model="comment" ></textarea>
                                                        @error('comment')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </p>

                                                    <p class="form-submit">
                                                        <button type="submit" class="btn effect btn-primary">Submit A Comment<i class="fas fa-long-arrow-alt-right m-l15"></i></button>
                                                    </p>
                                                </form>
                                            </div>
                                            <!-- Form -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" wire:ignore>
                <div class="col-xl-12">
                    <div class="swiper-container related-item-swiper">
                        <h3>Related Services</h3>
                        <div class="swiper-wrapper">
                            @foreach ($related_services as $service)

                            <div class="swiper-slide">
                                <div class="item-box">
                                    <div class="item-img">

                                        <img src="{{ asset('assets/images/services') }}/{{ $service->image }}" style="height: 200px;" alt="{{ $service->name }}">
                                        <span class="badge bg-success">{{ $service->category->name }}</span>

                                    </div>
                                    <div class="item-info text-center">
                                        <h4 class="item-title"><a href="{{ route('services.details', ['slug' => $service->slug]) }}">{{ $service->name }}</a></h4>

                                        <p>{{ str_limit(strip_tags($service->description),100,'...') }} </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="swiper-button-next-related"></div>
                        <div class="swiper-button-prev-related"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
