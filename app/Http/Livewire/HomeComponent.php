<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Service;
use App\Models\Contact;
use App\Models\HomeSlider;
use App\Models\Setting;
use Livewire\Component;
use Livewire\WithPagination;

class HomeComponent extends Component
{
    use WithPagination;

    public $name;
    public $email;
    public $phone;
    public $message;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);
    }
    public function sendMessage(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);
        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->message = $this->message;
        $contact->save();
        session()->flash('message', 'Thanks, Your message has been sent successfully ');

        // $this->sendOrderConfirmationMail($contact);

    }

    public function render()
    {
        $services = Service::inRandomOrder()->paginate(9);
        $sectors = Category::get();
        $sliders = HomeSlider::get();
        $setting = Setting::find(1);
        return view('livewire.home-component',['services' => $services, 'sectors' => $sectors, 'setting' => $setting, 'sliders' => $sliders]);
    }
}