<div class="page-content bg-dark">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg') }});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>   Add Requirments</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item">   Add Requirments</li>
                        {{-- <li class="breadcrumb-item active" aria-current="page">Shop grid Sidebar</li> --}}
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                            <div class="col-md-6"><h4 class="text-white">Add New Requirment</h4></div>
                            <div class="col-md-3" style="float: right;"><a href="{{ route('admin.requirements',['career_id'=> $career_id] )}}" class="btn btn-danger pull-right">All Requirments</a></div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                        <form action="" class="form-horizontal" wire:submit.prevent="addRequirement">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable">Requirement Name</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Requirement Name" class="form-control input-md" wire:model="name" >
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable"></label>
                                <div class="col-md-4">
                                    <Button type="submit" class="btn btn-primary">Submit</Button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
