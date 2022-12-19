<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class AdminServicesComponent extends Component
{
    public function deleteService($id){
        $service = Service::find($id);
        $service->delete();
        session()->flash('message', 'Service has been deleted successfully');
    }
    public function render()
    {
        $services = Service::paginate(12);
        return view('livewire.admin-services-component', ['services' => $services]);
    }
}