<?php

namespace App\Http\Livewire;

use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddHomeSliderComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $subtitle;
    public $image;
    public $status;

    public function mount(){
        $this->status = 1;
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'title' => 'required',
            'subtitle' => 'required',
            'image' => 'required',
        ]);
    }
    public function addSlide(){
        $this->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'image' => 'required',
        ]);
        $slider = new HomeSlider();
        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->status = $this->status;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('main-slider', $imageName);
        $slider->image = $imageName;
        $slider->save();
        return redirect()->route('admin.homeslider');
        session()->flash('message', 'Slider has been created Successfully');
    }
    public function render()
    {
        return view('livewire.admin-add-home-slider-component');
    }
}