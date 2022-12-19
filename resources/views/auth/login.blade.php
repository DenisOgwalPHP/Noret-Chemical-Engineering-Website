

<x-guest-layout>
    <div class="page-content">
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url({{ asset('assets/images/background/bg1.jpg') }});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Login</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item">Login</li>
                        {{-- <li class="breadcrumb-item active" aria-current="page">Shop grid Sidebar</li> --}}
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>

    <section class="content-inner-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="login-wrapper">
                        <!-- Form -->
                        <x-jet-validation-errors class="mb-4" />
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600" style="color:red !important;">
                                    {{ session('status') }}
                                </div>
                            @endif
                        <form class="login-form" method="POST" action="{{ route('login') }}" >
                            @csrf
                            <div class="form-group">
                                <label>Your Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" placeholder="" :value="old('email')" autofocus required="required" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Your Password <span class="text-danger">*</span></label>
                                <input type="password" name="password" placeholder="" required="required" autocomplete="current-password" class="form-control">
                            </div>
                            <div class="form-group d-flex aligns-items-center justify-content-between">
                                <button class="btn btn-primary" type="submit">Login</button>
                                <a href="{{ route('register') }}" class="mx-xl-auto">Register</a>
                            </div>
                            <div class="checkbox">
                                <label class="checkbox-inline" for="2"><input name="remember" id="2" value="forever" type="checkbox">Remember me</label>
                            </div>
                            <a href="{{ route('password.request') }}" class="lost-pass">Lost your password?</a>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</x-guest-layout>

