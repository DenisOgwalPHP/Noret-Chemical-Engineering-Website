<?php

namespace App\Http\Livewire;

use App\Models\Career;
use App\Models\Requirement;
use Livewire\Component;

class CareerDetailsComponent extends Component
{
    public $career_id;

    public function mount($id){
        $this->career_id = $id;
    }
    public function render()
    {
        $career = Career::where('id', $this->career_id)->first();
        $l_careers = Career::orderBy('created_at', 'DESC')->get()->take(6);
        $requirements = Requirement::where('career_id', $career->id)->get();
        return view('livewire.career-details-component',['career' => $career, 'l_careers' => $l_careers, 'requirements' => $requirements] );
    }
}