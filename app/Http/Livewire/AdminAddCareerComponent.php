<?php

namespace App\Http\Livewire;

use App\Models\Career;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddCareerComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $start_date;
    public $end_date;
    public $status;

    public function mount(){
        $this->status = 1;
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
    }
    public function addCareer(){
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        $career = new Career();
        $career->title = $this->title;
        $career->description = $this->description;
        $career->start_date = $this->start_date;
        $career->end_date = $this->end_date;
        $career->status = $this->status;
        $career->save();
        return redirect()->route('admin.careers');
        session()->flash('message', 'Job has been created Successfully');
    }
    public function render()
    {
        return view('livewire.admin-add-career-component');
    }
}