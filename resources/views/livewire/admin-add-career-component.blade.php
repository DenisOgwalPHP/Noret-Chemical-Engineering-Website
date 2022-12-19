<div class="page-content bg-dark">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg') }});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>   Careers</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item">   Careers</li>
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
                            <div class="col-md-6"><h4 class="text-white">Add New Career</h4></div>
                            <div class="col-md-3" style="float: right;"><a href="{{ route('admin.careers') }}" class="btn btn-danger pull-right">All Careers</a></div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                        <form action="" class="form-horizontal" wire:submit.prevent="addCareer">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable">Title</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Title" class="form-control input-md" wire:model="title" >
                                    @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable">Start Date</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Insert Date To Start Applying" class="form-control input-md" wire:model="start_date" >
                                    @error('start_date')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable">End Date</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Insert Date To Stop Applying" class="form-control input-md" wire:model="end_date" >
                                    @error('end_date')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable">Status</label>
                                <div class="col-md-8">
                                    <select name="" id="" class="form-control" wire:model="status">
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable">Job Description</label>
                                <div class="col-md-8">
                                    <textarea name="" id="description" rows="6" class="form-control" placeholder="Job Description" wire:model="description"></textarea>
                                    @error('description')
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
