<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class ServiceDetailsComponent extends Component
{
    use WithPagination;
    public $slug;

    public function mount($slug){
        $this->slug = $slug;
    }
    public function render()
    {
        $sector = Category::where('slug', $this->slug)->first();
        $sector_id = $sector->id;
        $sector_name = $sector->name;

        $services = Service::get();
        $r_services = Service::where('category_id', $sector_id)->paginate(9);
        $sectors = Category::get();

        return view('livewire.service-details-component', ['sector' => $sector, 'services' => $services, 'sectors' => $sectors, 'r_services' => $r_services]);
    }
}