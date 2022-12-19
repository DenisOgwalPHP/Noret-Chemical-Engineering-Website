<div class="page-content bg-dark">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg') }});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>   HomeSliders</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item">   HomeSliders</li>
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
                            <div class="col-md-6"><h4 class="text-white">All Sliders</h4></div>
                            <div class="col-md-3" style="float: right;"><a href="{{ route('admin.addhomeslider') }}" class="btn btn-success pull-right"> Add New Service</a></div>
                      </div>
                      <div class="card-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    @if (Auth::user()->utype === 'ADM' || Auth::user()->utype === 'EDT')
                                    <th>Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                    <tr>
                                        <td>{{ $slider->id }}</td>
                                        <td><img src="{{ asset('assets/images/main-slider') }}/{{ $slider->image }}" alt="{{  $slider->title }}" width="60"></td>
                                        <td>{{ $slider->title }}</td>
                                        <td>{{ $slider->subtitle }}</td>
                                        <td>{{ $slider->status == 1 ? 'Active': 'Inactive' }}</td>
                                        <td>{{ date('d F, Y', strtotime( $slider->created_at))  }}</td>
                                        @if (Auth::user()->utype === 'ADM' || Auth::user()->utype === 'EDT')
                                        <td>
                                            <a href="{{ route('admin.edithomeslider', ['slide_id'=> $slider->id]) }}" ><i class="fa fa-edit"></i></a>
                                            @if (Auth::user()->utype === 'ADM')
                                            <a href="#"  wire:click.prevent="deleteSlide({{ $slider->id }})" ><i class="fa fa-times text-danger"></i></a>
                                            @endif
                                        </td>
                                        @endif

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {{ $sliders->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
