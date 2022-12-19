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
                        <li class="breadcrumb-item"> Edit Blog</li>
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
                        <div class="col-md-6">
                            Edit Blog
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('admin.blogs') }}" style="color: whitesmoke"  class="btn btn-success pull-right"> All Blogs</a>
                        </div>
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    <div class="card-body">
                        <form action="" class="form-horizontal"  wire:submit.prevent="updateBlog">
                            <div class="form-group">
                                <label for="" class="col-md-8 control-lable">Blog Name</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug">
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
                                    <input type="file"  class="input-file" wire:model="newImage">
                                    @if($newImage)
                                        <img src="{{ $newImage->temporaryUrl() }}" width="120" alt="">

                                    @else
                                        <img src="{{ asset('images/blogs') }}/{{ $image }}" width="120" alt="">

                                    @endif
                                    {{-- @error('newImage')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror --}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-8 control-lable">Description</label>
                                <div class="col-md-8" wire:ignore>
                                    <textarea name="" id="description" rows="12" class="form-control"
                                    cols="100" placeholder="Description" wire:model="description"></textarea>
                                    @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-8 control-lable"></label>
                                <div class="col-md-8">
                                    <Button type="submit" class="btn btn-primary">Update</Button>
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
