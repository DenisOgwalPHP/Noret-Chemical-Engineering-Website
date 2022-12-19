<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $services = Service::inRandomOrder()->paginate(9);
        $sectors = Category::inRandomOrder()->get();
        return view('livewire.shop-component', ['services' => $services, 'sectors' => $sectors]);
    }
}