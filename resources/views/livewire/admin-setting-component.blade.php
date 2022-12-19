<div class="page-content bg-dark">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg') }});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Settings</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item">Settings</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <div class="container m-t20">
        <div class="row">
            <div class="col-md-6  m-lg-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="col-md-4">
                            <h4 class="text-white">Settings</h4>
                        </div>
                    </div>

                    <div class="card-body">
                        <form class="dz-form dzForm" action=""  wire:submit.prevent="saveSettings">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable"> Email</label>
                                <input type="email" placeholder="Email" class="form-control input-md" wire:model="email">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable">Phone</label>
                                <input type="text" placeholder="Phone" class="form-control input-md" wire:model="phone">
                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable">Phone2</label>
                                <input type="text" placeholder="Phone2" class="form-control input-md" wire:model="phone2">

                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable">Address</label>
                                <input type="text" placeholder="Address" class="form-control input-md" wire:model="address">
                                    @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable">Twitter</label>
                                <input type="text" placeholder="Twitter" class="form-control input-md" wire:model="twitter">
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable">Facebook</label>
                                <input type="text" placeholder="Facebook" class="form-control input-md" wire:model="facebook">
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable">Instagram</label>
                                <input type="text" placeholder="Instagram" class="form-control input-md" wire:model="instagram">
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable">Youtube</label>
                                <input type="text" placeholder="Youtube" class="form-control input-md" wire:model="youtube">
                            </div>
                            <div class="form-group m-b30">
                                <label for="" class="col-md-4 control-lable">LinkedIn</label>
                                    <input type="text" placeholder="LinkedIn" class="form-control input-md" wire:model="linkedIn">
                            </div>

                            <div class="form-group col-md-3 m-lg-auto">
                                <Button type="submit" class="btn btn-primary">Save</Button>
                            </div>
                        </form>
                        @if (Session::has('message'))
                            <div class="alert alert-success m-t30" role="alert">{{ Session::get('message') }}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
