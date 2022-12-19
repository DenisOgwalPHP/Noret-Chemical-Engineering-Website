<div class="page-content bg-dark">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg') }});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>   Career Requirements</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item">   Career Requirements</li>
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
                            <div class="col-md-6"><h4 class="text-white">All Career Requirements</h4></div>
                            <div class="col-md-3"><a href="{{ route('admin.addrequirements', ['career_id'=> $career_id]) }}" class="btn btn-primary btn-icon m-l20"> Add New Requirement<i class="fas fa-arrow-right"></i></a></div>
                      </div>
                      <div class="card-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Requirement</th>
                                    <th>Career-Title</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($requirements as $requirement)
                                    <tr>
                                        <td>{{ $requirement->id }}</td>
                                        <td>{{ $requirement->name }}</td>
                                        <td>{{ $requirement->career->title }}</td>
                                        <td>{{date('d F, Y', strtotime(   $blog->created_at )) }}</td>
                                        @if (Auth::user()->utype === 'ADM')
                                        <td>
                                            @if (Auth::user()->utype === 'ADM')
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this property') || event.stopImmediatePropagation()"  wire:click.prevent="deleteAmenity({{ $requirement->id }})" ><i class="fa fa-times text-danger"></i></a>
                                            @endif
                                        </td>
                                        @endif

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
