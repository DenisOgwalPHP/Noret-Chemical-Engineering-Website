<div class="page-content bg-dark">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg') }});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>   Add Blog</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item">   Add Blog</li>
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
                            <div class="col-md-6"><h4 class="text-white">Add New Blog</h4></div>
                            <div class="col-md-3" style="float: right;"><a href="{{ route('admin.blogs') }}" class="btn btn-danger pull-right">All Blogs</a></div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addBlog">
                            <div class="form-group">
                                <label for="" class="col-md-8 control-lable">Blog Title</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Blog Title" class="form-control input-md" wire:model="name" wire:keyup="generateslug">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-8 control-lable">Blog Slug</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Product Slug" class="form-control input-md" wire:model="slug">
                                    @error('slug')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="" class="col-md-8 control-lable">Blog Image</label>
                                <div class="col-md-8">
                                    <input type="file"  class="input-file" wire:model="image">
                                    @if($image)
                                        <img src="{{ $image->temporaryUrl() }}" width="120" alt="">

                                    @endif
                                    @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-8 control-lable">Description</label>
                                <div class="col-md-8" wire:ignore>
                                    <textarea name="" id="description" rows="6" class="form-control" placeholder="Description" wire:model="description"></textarea>
                                    @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-8 control-lable"></label>
                                <div class="col-md-8">
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


@push('scripts')
    <script>
        $(function(){
            tinymce.init({
                selector:'#description',
                setup:function(editor){
                    editor.on('Change', function(e){
                        tinyMCE.triggerSave();
                        var data = $('#description').val();
                        @this.set('description',data );
                    });
                }
            });
        });
    </script>
@endpush
