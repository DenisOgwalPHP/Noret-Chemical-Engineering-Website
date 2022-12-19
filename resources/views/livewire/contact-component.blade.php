<div class="page-content bg-white">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg') }});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Contact Us</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <section class="content-inner-2 pt-0">
        {{-- <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Kamuli%20Road,%20Kireka%20Kamuli,%20Kampala&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div> --}}
        <div class="map-iframe">
            <iframe src="https://maps.google.com/maps?q=Kamuli%20Road,%20Kireka%20Kamuli,%20Kampala&t=&z=13&ie=UTF8&iwloc=&output=embed"
                style="border:0; width:100%; min-height:100%; margin-bottom: -8px;" allowfullscreen></iframe>
        </div>
    </section>

    <section class="contact-wraper1" style="background-image: url({{ asset('assets/images/background/bg3.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-info">
                        <div class="section-head text-white style-1">
                            <h3 class="title text-white">Get In Touch</h3>
                            <p>If you are interested in working with us, please get in touch.</p>
                        </div>
                        <ul class="no-margin">
                            <li class="icon-bx-wraper text-white left m-b30">
                                <div class="icon-md">
                                    <span class="icon-cell">
                                    <i class="flaticon-placeholder-1"></i>
                                </span>
                                </div>
                                <div class="icon-content">
                                    <h4 class=" dz-tilte text-white">Our Address</h4>
                                    <p class="font-18">{{ $setting->address }}</p>
                                </div>
                            </li>
                            <li class="icon-bx-wraper text-white left m-b30">
                                <div class="icon-md">
                                    <span class="icon-cell">
                                    <i class="flaticon-call"></i>
                                </span>
                                </div>
                                <div class="icon-content">
                                    <h4 class=" dz-tilte text-white">Our Contacts</h4>
                                    <p class="font-18"><a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a><br />
                                        <a href="tel:{{ $setting->phone2 }}">{{ $setting->phone2 }}</a></p>
                                </div>
                            </li>
                            <li class="icon-bx-wraper text-white left m-b30">
                                <div class="icon-md">
                                    <span class="icon-cell">
                                    <i class="flaticon-message"></i>
                                </span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dz-tilte text-white">Our Email</h4>
                                    <p class="font-18">
                                        <a
                                        href="mail:{{ $setting->email }}"
                                        >{{ $setting->email }}</a
                                      >
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 m-b40">
                    <div class="contact-area1 m-r20 m-md-r0">
                        <div class="section-head style-1">
                            <h6 class="sub-title text-primary">CONTACT US</h6>
                            <h3 class="title m-b20">Get In Touch With Us</h3>
                        </div>
                        <form class="dz-form" wire:submit.prevent="sendMessage">
                            <div class="input-group">
                                <input required type="text" class="form-control" name="dzName" placeholder="Full Name"  wire:model="name">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="input-group">
                                <input required type="email" class="form-control" name="dzEmail" placeholder="Email Adress"  wire:model="email">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="input-group">
                                <input required type="text" class="form-control" name="dzPhoneNumber" placeholder="Phone No."  wire:model="phone">
                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="input-group">
                                <textarea required name="dzMessage" rows="5" class="form-control"  wire:model="message" placeholder="Message" ></textarea>
                                @error('message')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>

                            <div>
                                <button name="submit" type="submit" class="btn w-100 btn-primary btn-border">CONTACT US</button>
                            </div>
                        </form>
                        @if (Session::has('message'))
                            <div class="alert alert-success m-t20" role="alert">{{ Session::get('message') }}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
