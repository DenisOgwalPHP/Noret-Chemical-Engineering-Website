<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class ServicesComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $sectors = Category::paginate(9);
        $services = Service::inRandomOrder()->get();
        return view('livewire.services-component', ['services' => $services, 'sectors' => $sectors]);
    }
}