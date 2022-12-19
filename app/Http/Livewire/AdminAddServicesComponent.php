<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Service;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AdminAddServicesComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $image;
    public $description;
    public $category_id;

    public function generateslug(){
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:services',
            'image' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ]);
    }

    public function addService(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:services',
            'image' => 'required',
            'description' => 'required',
            'category_id' => 'required',

        ]);
        $service = new Service();
        $service->name = $this->name;
        $service->slug = $this->slug;
        $service->category_id = $this->category_id;
        $imageName = Carbon::now()->timestamp. '.'. $this->image->extension();
        $this->image->storeAs('services',$imageName );
        $service->image = $imageName;
        $service->description = $this->description;
        $service->save();
        session()->flash('message', 'Service has been created successfully');
        return redirect()->route('admin.services');
    }

    public function render()
    {
        $categories = Category::get();
        return view('livewire.admin-add-services-component',['categories' => $categories]);
    }
}