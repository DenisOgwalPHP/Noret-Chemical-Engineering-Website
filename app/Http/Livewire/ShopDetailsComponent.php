<?php

namespace App\Http\Livewire;

use App\Models\Review;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class ShopDetailsComponent extends Component
{
    use WithPagination;
    public $slug;
    public $name;
    public $email;
    public $comment;
    public $service_id;

    public function mount($slug){
        $this->slug = $slug;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',
        ]);
    }

    public function addReview(){
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',
        ]);
        $service = Service::where('slug', $this->slug)->first();
        $review = new Review();
        $review->name = $this->name;
        $review->email = $this->email;
        $review->comment = $this->comment;
        $review->service_id = $service->id;
        $review->save();
        session()->flash('message', 'Your review has been submitted successfully');
        return redirect()->route('services.details', ['slug' => $service->slug]);
    }

    public function render()
    {
        $service = Service::where('slug', $this->slug)->first();
        $reviews = Review::where('service_id', $service->id)->orderBy('created_at', 'DESC')->get();
        $related_services = Service::where('category_id', $service->category_id)->inRandomOrder()->limit(8)->get();
        $popular_services = Service::inRandomOrder()->limit(8)->get();
        return view('livewire.shop-details-component',['service' => $service, 'related_services' => $related_services,'reviews' => $reviews, 'popular_services' => $popular_services]);
    }
}