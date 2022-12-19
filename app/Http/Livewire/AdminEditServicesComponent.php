<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Service;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AdminEditServicesComponent extends Component
{

    use WithFileUploads;
    public $name;
    public $slug;
    public $image;
    public $description;
    public $category_id;
    public $newImage;
    public $service_id;

    public function mount($service_slug){
        $service = Service::where('slug', $service_slug)->first();
        $this->name = $service->name;
        $this->slug = $service->slug;
        $this->image = $service->image;
        $this->description = $service->description;
        $this->category_id = $service->category_id;
        $this->service_id = $service->id;
    }

    public function generateSlug(){
        $this->slug = Str::slug($this->name, '-');
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ]);
    }
    public function updateService(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required',
            'description' => 'required',
            'category_id' => 'required',

        ]);
        $service = Service::find($this->service_id);
        $service->name = $this->name;
        $service->slug = $this->slug;
        if ($this->newImage) {
            $imageName = Carbon::now()->timestamp. '.'. $this->newImage->extension();
            $this->newImage->storeAs('services',$imageName );
            $service->image = $imageName;
        }

        $service->description = $this->description;
        $service->save();
        session()->flash('message', 'Service has been updated successfully');
        // return redirect()->route('admin.services');
    }

    public function render()
    {
        $service = Service::where('slug',$this->slug)->first();
        $categories = Category::get();
        return view('livewire.admin-edit-services-component',['service' =>$service, 'categories' => $categories]);
    }
}