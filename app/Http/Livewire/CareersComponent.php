<?php

namespace App\Http\Livewire;

use App\Models\Career;
use App\Models\Requirement;
use Livewire\Component;

class CareersComponent extends Component
{
    public function render()
    {
        $careers = Career::paginate(12);

        return view('livewire.careers-component',['careers' => $careers]);
    }
}