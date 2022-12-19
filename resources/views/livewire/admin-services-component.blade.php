<div class="page-content bg-dark">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg') }});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>   Services</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item">   Services</li>
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
                        <div class="col-md-6"><h4 class="text-white">All Services</h4></div>
                        <div class="col-md-3" style="float: right;"><a href="{{ route('admin.addservice') }}" class="btn btn-danger pull-right"> Add New Service</a></div>
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
                                  <th>Name</th>
                                  <th>Sector</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($services as $service)
                                  <tr>
                                      <td>{{ $service->id }}</td>
                                      <td><img src="{{ asset('assets/images/services') }}/{{ $service->image }}" width="60" height="60" alt="{{ $service->name }}"></td>
                                      <td>{{ $service->name }}</td>
                                      <td>{{ $service->category->name }}</td>
                                      <td>
                                          <a href="{{ route('admin.editservice', ['service_slug'=> $service->slug]) }}" ><i class="fa fa-edit text-white"></i></a>
                                          <a href="#" onclick="confirm('Are you sure, You want to delete this service') || event.stopImmediatePropagation()" wire:click.prevent="deleteService({{ $service->id }})"><i class="fa fa-times text-danger"></i></a>
                                      </td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                          {{ $services->links() }}

                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
