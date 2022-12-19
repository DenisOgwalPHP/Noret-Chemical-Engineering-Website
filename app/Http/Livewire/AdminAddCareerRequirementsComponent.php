<?php

namespace App\Http\Livewire;

use App\Models\Career;
use App\Models\Requirement;
use Livewire\Component;

class AdminAddCareerRequirementsComponent extends Component
{
    public $name;
    public $career_id;

    public function mount($career_id){
        $career = Career::where('id', $career_id)->first();
        $this->career_id = $career->id;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
        ]);
    }
    public function addRequirement(){
        $this->validate([
            'name' => 'required',
        ]);
        $requirement = new Requirement();
        $requirement->career_id = $this->career_id;
        $requirement->name = $this->name;
        $requirement->save();
        session()->flash('message', 'Job Requirement has been created successfully');
        return redirect()->route('admin.addrequirements',['career_id'=> $this->career_id]);
    }
    public function render()
    {
        return view('livewire.admin-add-career-requirements-component');
    }
}