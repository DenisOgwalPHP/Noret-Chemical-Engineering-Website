<?php

namespace App\Http\Livewire;

use App\Models\Career;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCareerComponent extends Component
{
    use WithPagination;
    public function deleteSlide($id){
        $career = Career::find($id);
        $career->delete();
        session()->flash('message', 'Career has been deleted successfully');
    }
    public function render()
    {
        $careers = Career::paginate(12);
        return view('livewire.admin-career-component', ['careers' => $careers]);
    }
}