<div class="page-content bg-dark">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg') }});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Sectors</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item">Sectors</li>
                        {{-- <li class="breadcrumb-item active" aria-current="page">Shop grid Sidebar</li> --}}
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark">
                    <div class="card-header">
                        <div class="col-md-6 "><h4 class="text-white">All Sectors</h4></div>
                        <div class="col-md-3" style="float: right;"><a href="{{ route('admin.addcategory') }}" class="btn btn-danger pull-right">Add New Sector</a></div>
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
                                    <th>Sector Name</th>
                                    <th>Discription</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td><img src="{{ asset('assets/images/sectors') }}/{{ $category->image }}" width="60" height="60" alt="{{ $category->name }}"></td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ str_limit(strip_tags($category->description),30,'...') }}</td>
                                        <td>
                                            <a href="{{ route('admin.editcategory', ['category_slug'=> $category->slug]) }}" ><i class="fa fa-edit text-white"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this category') || event.stopImmediatePropagation()"  wire:click.prevent="deleteCategory({{ $category->id }})" style="margin-left: 20px"><i class="fa fa-times text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {{ $categories->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
