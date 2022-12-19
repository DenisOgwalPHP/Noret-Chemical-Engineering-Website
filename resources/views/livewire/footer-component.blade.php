<footer class="site-footer style-3 bg-secondary" id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div
            class="col-xl-4 col-lg-4 col-sm-8 aos-item"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-delay="200"
          >
            <div class="widget widget_about">
              <div class="footer-logo logo-white">
                <a href="/"
                  ><img src="{{ asset('assets/images/noret.png') }}" alt=""
                /></a>
              </div>
              <div class="widget widget_getintuch">
                <ul>
                  <li>
                    <i class="flaticon-placeholder"></i>
                    <span
                      >{{ $setting->address }}</span
                    >
                  </li>
                  <li>
                    <i class="flaticon-call"></i>
                    <span
                      ><a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a><br />
                      <a href="tel:{{ $setting->phone2 }}">{{ $setting->phone2 }}</a></span
                    >
                  </li>
                  <li>
                    <i class="flaticon-chat-1"></i>
                    <span
                      ><a
                        href="mail:{{ $setting->email }}"
                        >{{ $setting->email }}</a
                      >
                      </span
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div
            class="col-xl-2 col-lg-2 col-sm-4 col-6 aos-item"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-delay="400"
          >
            <div class="widget widget_services">
              <h4 class="footer-title">Our Links</h4>
              <ul>
                <li>
                <a href="/"><span>Home</span></a>
                </li>
                <li>
                <a href="{{ route('about') }}"><span>About us</span></a>
                </li>
                <li>
                    <a href="{{ route('services') }}"><span>Services</span></a>
                </li>
                <li>
                <a href="{{ route('sectors') }}"><span>Sectors</span></a>
                </li>
                <li>
                <a href="{{ route('blogs') }}"><span>Blog</span></a>
                </li>
                <li>
                <a href="{{ route('contact') }}"><span>Contact us</span></a>
                </li>
              </ul>
            </div>
          </div>
          <div
            class="col-xl-2 col-lg-2 col-sm-4 col-6 aos-item"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-delay="600"
          >
            <div class="widget widget_services">
              <h4 class="footer-title">Other Links</h4>
              <ul>
                <li><a href="javascript:void(0);">FAQ</a></li>
                <li><a href="javascript:void(0);">Support</a></li>
                <li><a href="javascript:void(0);">Help</a></li>
                <li><a href="javascript:void(0);">Privacy Policy</a></li>
                <li><a href="javascript:void(0);">Terms Of Use</a></li>
              </ul>
            </div>
          </div>
          <div
            class="col-xl-4 col-lg-4 col-sm-8 aos-item"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-delay="800"
          >
            <div class="widget recent-posts-entry">
              <h4 class="footer-title">Latest Post</h4>
              <div class="widget-post-bx">
                @foreach ($l_blogs as $l_blog)
                <div class="widget-post clearfix">
                    <div class="dz-media">
                        <a href="{{ route('blog.details', ['slug' => $l_blog->slug]) }}">
                            <img src="{{ asset('assets/images/blogs') }}/{{ $l_blog->image }}" alt="" />
                        </a>
                    </div>
                    <div class="dz-info">
                      <h6 class="title">
                        <a href="{{ route('blog.details', ['slug' => $l_blog->slug]) }}"
                          >{{ $l_blog->name }}</a
                        >
                      </h6>
                      <div class="dz-meta">
                        <ul>
                          <li class="post-date">
                            <i class="las la-calendar"></i> {{date('d F, Y', strtotime(   $l_blog->created_at )) }}
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer bottom part -->
    <div class="container">
      <div class="footer-bottom">
        <div class="row align-items-center">
          <div
            class="col-lg-6 col-md-8 text-md-start text-center mb-md-0 mb-3"
          >
            <span class="copyright-text"
              >Developed By
              <a href="https://ditherug.tech/" target="_blank"
                >DITHER TECHNOLOGIES</a
              >. All rights reserved.</span
            >
          </div>
          <div class="col-lg-6 col-md-8 text-md-end text-center mb-md-0 mb-3">
            <div class="dz-social-icon float-md-end float-end">
              <ul class="justify-content-center">
                <li>
                  <a
                    class="fab fa-facebook-f"
                    target="_blank"
                    href="{{ $setting->facebook }}"
                  ></a>
                </li>
                <li>
                  <a
                    class="fab fa-instagram"
                    target="_blank"
                    href="{{ $setting->instagram }}"
                  ></a>
                </li>
                <li>
                  <a
                    class="fab fa-twitter"
                    target="_blank"
                    href="{{ $setting->twitter }}"
                  ></a>
                </li>
                <li>
                  <a
                    class="fab fa-linkedin"
                    target="_blank"
                    href="{{ $setting->linkedIn }}"
                  ></a>
                </li>
                <li>
                  <a
                    class="fab fa-youtube"
                    target="_blank"
                    href="{{ $setting->youtube }}"
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
