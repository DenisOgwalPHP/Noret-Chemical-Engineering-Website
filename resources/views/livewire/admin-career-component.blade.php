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
                            <div class="col-md-6"><h4 class="text-white">All Careers</h4></div>
                            <div class="col-md-3" style="float: right;"><a href="{{ route('admin.addcareer') }}" class="btn btn-success pull-right"> Add New Career</a></div>
                      </div>
                      <div class="card-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Start-Date</th>
                                    <th>End-Date</th>
                                    <th>Status</th>
                                    <th>Description</th>
                                    @if (Auth::user()->utype === 'ADM')
                                    <th>Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($careers as $career)
                                    <tr>
                                        <td>{{ $career->id }}</td>
                                        <td>{{ $career->title }}</td>
                                        <td>{{ $career->start_date }}</td>
                                        <td>{{ $career->end_date }}</td>
                                        <td>{{ $career->status == 1 ? 'Active': 'Inactive' }}</td>
                                        <td>{{ $career->description }}</td>
                                        @if (Auth::user()->utype === 'ADM')
                                        <td>
                                            <a href="{{ route('admin.editcareer', ['career_id'=> $career->id]) }}" ><i class="fa fa-edit"></i></a>
                                            @if (Auth::user()->utype === 'ADM')
                                            <a href="#"  wire:click.prevent="deleteSlide({{ $career->id }})" ><i class="fa fa-times text-danger"></i></a>
                                            @endif
                                        </td>
                                        @endif

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {{ $careers->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
