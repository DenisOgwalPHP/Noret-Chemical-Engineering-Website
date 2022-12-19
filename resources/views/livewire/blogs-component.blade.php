
        <div class="page-content ">

            <!-- Banner  -->
            <div class="dz-bnr-inr dz-bnr-inr-sm my-paroller overlay-black-middle text-center" id="my-element" data-paroller-factor="-0.5" data-paroller-direction="horizontal" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg') }});">
                <div class="container">
                    <div class="dz-bnr-inr-entry">
                        <h1>Blogs</h1>
                        <!-- Breadcrumb Row -->
                        <nav aria-label="breadcrumb" class="breadcrumb-row">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Blogs</li>
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
                            @foreach ($blogs as $blog)
                                <div class="dz-card style-1 blog-half shadow m-b30">
                                    <div class="dz-media">
                                        <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}"><img src="{{ asset('assets/images/blogs') }}/{{ $blog->image }}" alt="{{ $blog->name }}"></a>
                                    </div>
                                    <div class="dz-info">
                                        <div class="dz-meta">
                                            <ul>
                                                <li class="post-date text-uppercase">{{date('d F, Y', strtotime(   $blog->created_at )) }}</li>
                                                <li class="float-end text-uppercase">BY : {{ $blog->user->name }}</li>
                                            </ul>
                                        </div>
                                        <h3 class="dz-title text-capitalize"><a href="{{ route('blog.details', ['slug' => $blog->slug]) }}">{{ $blog->name }}</a></h3>
                                        <p>{{ str_limit(strip_tags($blog->description),170,'...')  }}</p>

                                    </div>
                                </div>
                            @endforeach

                            <nav aria-label="Blog Pagination">
                                {{ $blogs->links('pagination::bootstrap-4') }}
                            </nav>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <aside class="side-bar sticky-top right">
                                <div class="widget style-1">
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
                                </div>

                                {{-- <div class="widget style-1 widget_categories">
                                    <div class="widget-title">
                                        <h4 class="title">Category</h4>
                                    </div>
                                    <ul>
                                        <li class="cat-item"><a href="javascript:void(0);">Software</a></li>
                                        <li class="cat-item"><a href="javascript:void(0);">Analysis</a></li>
                                        <li class="cat-item"><a href="javascript:void(0);">Cryptocurrency</a></li>
                                        <li class="cat-item"><a href="javascript:void(0);">Technology</a></li>
                                        <li class="cat-item"><a href="javascript:void(0);">Mobile App</a></li>
                                        <li class="cat-item"><a href="javascript:void(0);">Development</a></li>
                                    </ul>
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
                                        <h4 class="title">Recent Post</h4>
                                    </div>
                                    <div class="widget-post-bx">
                                        @foreach ($l_blogs as $l_blog)
                                            <div class="widget-post clearfix">
                                                <div class="dz-media">
                                                    <img src="{{ asset('assets/images/blogs') }}/{{ $l_blog->image }}" alt="{{ $l_blog->name }}">
                                                </div>
                                                <div class="dz-info">
                                                    <div class="dz-meta">
                                                        <ul>
                                                            <li class="post-date"> {{date('d F, Y', strtotime(   $l_blog->created_at )) }}</li>
                                                        </ul>
                                                    </div>
                                                    <h6 class="title"><a href="{{ route('blog.details', ['slug' => $l_blog->slug]) }}">{{ $l_blog->name }}</a></h6>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                                {{-- <div class="widget style-1 widget_tag_cloud">
                                    <div class="widget-title">
                                        <h4 class="title">Popular Tags</h4>
                                    </div>
                                    <div class="tagcloud">
                                        <a href="javascript:void(0);">Mock-Ups</a>
                                        <a href="javascript:void(0);">UI</a>
                                        <a href="javascript:void(0);">Websites</a>
                                        <a href="javascript:void(0);">PSD Templates</a>
                                        <a href="javascript:void(0);">Branding</a>
                                        <a href="javascript:void(0);">WordPress</a>
                                        <a href="javascript:void(0);">Graphic Design</a>
                                        <a href="javascript:void(0);">UI Kit</a>
                                        <a href="javascript:void(0);">Development</a>
                                    </div>
                                </div> --}}

                            </aside>
                        </div>
                    </div>
                </div>
            </section>


        </div>
