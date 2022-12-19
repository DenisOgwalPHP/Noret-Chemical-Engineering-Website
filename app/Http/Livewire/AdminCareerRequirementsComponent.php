<?php

namespace App\Http\Livewire;

use App\Models\Career;
use App\Models\Requirement;
use Livewire\Component;

class AdminCareerRequirementsComponent extends Component
{
    public $career_id;
    public function mount($career_id){
        $career = Career::where('id', $career_id)->first();
        $this->career_id = $career->id;
    }
    public function deleteAmenity($id){
        $requirement = Requirement::find($id);
        $requirement->delete();
        session()->flash('message', 'Job Requirement has been deleted successfully');
    }
    public function render()
    {
        $career = Career::where('id',$this->career_id)->first();
        $requirements = Requirement::where('career_id', $career->id)->get();
        return view('livewire.admin-career-requirements-component', ['career' => $career, 'requirements' => $requirements]);
    }
}