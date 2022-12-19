<div class="page-content bg-dark">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg') }});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Services</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"> Edit Services</li>
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
                      Edit Services
                  </div>
                  <div class="col-md-3">
                      <a href="{{ route('admin.services') }}" style="color: whitesmoke"  class="btn btn-success pull-right"> All Services</a>
                  </div>
          </div>
          @if (Session::has('message'))
              <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
          @endif
          <div class="card-body">
              <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateService">
                  <div class="p-2 form-group border">
                      <label for="" class="col-md-8 control-lable">Service Name</label>
                      <div class="col-md-8">
                          <input type="text" placeholder="Service Name" class="form-control input-md" wire:model="name" wire:keyup="generateSlug">
                          @error('name')
                          <p class="text-danger">{{ $message }}</p>
                      @enderror
                      </div>
                  </div>
                  <div class="p-2 form-group border">
                      <label for="" class="col-md-8 control-lable">Service Slug</label>
                      <div class="col-md-8">
                          <input type="text" placeholder="Service Slug" class="form-control input-md" wire:model="slug">

                      </div>
                  </div>



                  <div class="p-2 form-group border">
                      <label for="" class="col-md-8 control-lable">Sickness</label>
                      <div class="col-md-8">
                          <select name="" id="" class="form-control" wire:model="category_id">
                              <option value="">Select Sickness</option>
                              @foreach ($categories as $category)
                                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                              @endforeach
                          </select>
                          @error('category_id')
                          <p class="text-danger">{{ $message }}</p>
                      @enderror
                      </div>
                  </div>

                  <div class="p-2 form-group border">
                      <label for="" class="col-md-8 control-lable">Service Image</label>
                      <div class="col-md-8">
                          @if($image)
                              <img src="{{ asset('assets/images/services') }}/{{ $image }}" width="120" alt="">
                          @endif
                          <input type="file"  class="input-file" wire:model="newImage">
                          {{-- @error('image')
                          <p class="text-danger">{{ $message }}</p>
                      @enderror --}}
                      </div>
                  </div>

                  <div class="p-2 form-group ">
                    <label for="" class="col-md-8 control-label">Description</label>
                    <div class="col-md-8 col-8" wire:ignore>
                        <textarea name="" id="description"  rows="12" class="form-control"
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
              @if (Session::has('message'))
              <div class="alert alert-success mt-lg-2" role="alert">{{ Session::get('message') }}</div>
          @endif
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
