<?php

namespace App\Http\Livewire;

use App\Models\Career;
use Livewire\Component;

class AdminEditCareerComponent extends Component
{
    public $title;
    public $description;
    public $start_date;
    public $end_date;
    public $status;
    public $career_id;

    public function mount($career_id){
        $career = Career::find($career_id);
        $this->title = $career->title;
        $this->description = $career->description;
        $this->start_date = $career->start_date;
        $this->status = $career->status;
        $this->career_id = $career->id;
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
    }
    public function updateCareer(){
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        $career = Career::find($this->career_id);
        $career->title = $this->title;
        $career->description = $this->description;
        $career->start_date = $this->start_date;
        $career->end_date = $this->end_date;
        $career->status = $this->status;
        $career->save();
        return redirect()->route('admin.careers');
        session()->flash('message', 'Job has been updated Successfully');
    }
    public function render()
    {
        return view('livewire.admin-edit-career-component');
    }
}