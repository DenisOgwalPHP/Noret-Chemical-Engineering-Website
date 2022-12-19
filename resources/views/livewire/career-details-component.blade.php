<div class="page-content bg-white">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm my-paroller overlay-black-middle text-center" id="my-element" data-paroller-factor="-0.5" data-paroller-direction="horizontal" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg') }});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>{{ $career->title }}</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Job Details</li>
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
                <div class="col-xl-8 col-lg-8 m-b40">
                    <div class="dz-card style-1 blog-single">
                        <div class="dz-media">
                            <img src="{{ asset('assets/images/blog/large/pic1.jpg') }}" alt="">
                        </div>
                        <div class="dz-info">
                            <div class="dz-meta">
                                <ul>
                                    <li class="post-date"><i class="las la-calendar"></i> {{date('d F, Y', strtotime(   $career->created_at )) }}</li>
                                </ul>
                            </div>
                            <h2 class="dz-title">{{ $career->title }}</h2>
                            <p>{{ $career->description }}</p>
                            <blockquote class="block-quote style-1">
                                <h4>Application Period</h4>
                                <div class="dz-meta">
                                    <ul>

                                      <li class="post-author">
                                        <a href="javascript:void(0);"
                                          ><i class="las la-calendar"></i>From {{ $career->start_date }}</a
                                        >
                                      </li>
                                      <li class="post-author">
                                        <a href="javascript:void(0);"
                                          ><i class="las la-calendar"></i> To {{ $career->start_date }}</a
                                        >
                                      </li>
                                    </ul>
                                  </div>
                            </blockquote>
                            <div class="row m-b40">
                                <div class="col-md-12">
                                    <h3>Job Requirements</h3>
                                  <ul class="list-check-circle">
                                    @foreach ($requirements as $requirement)
                                        <li>{{ $requirement->name }}</li>
                                    @endforeach
                                  </ul>
                                </div>
                              </div>
                        </div>

                    </div>





                </div>
                <div class="col-xl-4 col-lg-4">
                    <aside class="side-bar sticky-top right">
                        {{-- <div class="widget style-1">
                            <div class="widget-title">
                                <h4 class="title">Search</h4>
                            </div>
                            <div class="search-bx">
                                <form role="search" method="post">
                                    <div class="input-group">
                                        <input name="text" class="form-control" placeholder="Search Here..." type="text">
                                        <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary sharp radius-no"><i class="la la-search scale3"></i></button>
                                    </span>
                                    </div>
                                </form>
                            </div>
                        </div> --}}



                        <div class="widget style-1 widget_gallery gallery-grid-3">
                            <div class="widget-title">
                                <h4 class="title">Gallery</h4>
                            </div>
                            <ul id="lightgallery" class="lightgallery">
                                <li>
                                    <div class="dlab-post-thum dlab-img-effect">
                                        <span data-exthumbimage="{{ asset('assets/images/gallery/small/pic1.jpg') }}" data-src="{{ asset('assets/images/gallery/small/pic1.jpg') }}" class="lightimg" title="Image 1 Title will come here">
                                        <img src="{{ asset('assets/images/gallery/small/pic1.jpg') }}" alt="">
                                    </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="dlab-post-thum dlab-img-effect">
                                        <span data-exthumbimage="{{ asset('assets/images/gallery/small/pic2.jpg') }}" data-src="{{ asset('assets/images/gallery/small/pic2.jpg') }}" class="lightimg" title="Image 2 Title will come here">
                                        <img src="{{ asset('assets/images/gallery/small/pic2.jpg') }}" alt="">
                                    </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="dlab-post-thum dlab-img-effect">
                                        <span data-exthumbimage="{{ asset('assets/images/gallery/small/pic3.jpg') }}" data-src="{{ asset('assets/images/gallery/small/pic3.jpg') }}" class="lightimg" title="Image 3 Title will come here">
                                        <img src="{{ asset('assets/images/gallery/small/pic3.jpg') }}" alt="">
                                    </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="dlab-post-thum dlab-img-effect">
                                        <span data-exthumbimage="{{ asset('assets/images/gallery/small/pic4.jpg') }}" data-src="{{ asset('assets/images/gallery/small/pic4.jpg') }}" class="lightimg" title="Image 4 Title will come here">
                                        <img src="{{ asset('assets/images/gallery/small/pic4.jpg') }}" alt="">
                                    </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="dlab-post-thum dlab-img-effect">
                                        <span data-exthumbimage="{{ asset('assets/images/gallery/small/pic5.jpg') }}" data-src="{{ asset('assets/images/gallery/small/pic5.jpg') }}" class="lightimg" title="Image 5 Title will come here">
                                        <img src="{{ asset('assets/images/gallery/small/pic5.jpg') }}" alt="">
                                    </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="dlab-post-thum dlab-img-effect">
                                        <span data-exthumbimage="{{ asset('assets/images/gallery/small/pic6.jpg') }}" data-src="{{ asset('assets/images/gallery/small/pic6.jpg') }}" class="lightimg" title="Image 6 Title will come here">
                                        <img src="{{ asset('assets/images/gallery/small/pic6.jpg') }}" alt="">
                                    </span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="widget style-1 recent-posts-entry">
                            <div class="widget-title">
                                <h4 class="title">Recent Jobs</h4>
                            </div>
                            <div class="widget-post-bx">
                                @foreach ($l_careers as $l_career)
                                    <div class="widget-post clearfix">

                                        <div class="dz-info">
                                            <div class="dz-meta">
                                                <ul>
                                                    <li class="post-date"> {{date('d F, Y', strtotime(   $l_career->created_at )) }}</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="{{ route('career.details', ['id' => $l_career->id]) }}">{{ $l_career->title }}</a></h6>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</div>
