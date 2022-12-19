<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;
use App\Models\Setting;

class AboutComponent extends Component
{
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
        $setting = Setting::find(1);
        return view('livewire.about-component',['setting' => $setting]);
    }
}