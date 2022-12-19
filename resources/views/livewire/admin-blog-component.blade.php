<div class="page-content bg-dark">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg') }});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Blogs</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item">Blogs</li>
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
                        <div class="col-md-6"><h4 class="text-white">All Blogs</h4></div>
                        <div class="col-md-3" style="float: right;"><a href="{{ route('admin.addblog') }}"class="btn btn-success pull-right"> Add New Blog</a></div>
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
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td><img src="{{ asset('assets/images/blogs') }}/{{ $blog->image }}" width="60" height="60" alt="{{ $blog->name }}"></td>
                                        <td>{{ $blog->name }}</td>
                                        <td>{{date('d F, Y', strtotime(   $blog->created_at )) }}</td>
                                        <td>
                                            <a href="{{ route('admin.editblog', ['blog_slug'=> $blog->slug]) }}" ><i class="fa fa-edit text-white"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this Blog') || event.stopImmediatePropagation()" wire:click.prevent="deleteBlog({{ $blog->id }})" ><i class="fa fa-times text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {{ $blogs->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
