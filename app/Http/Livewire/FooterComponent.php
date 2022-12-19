<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Setting;
use Livewire\Component;

class FooterComponent extends Component
{
    public function render()
    {
        $setting = Setting::find(1);
        $l_blogs = Blog::orderBy('created_at', 'DESC')->get()->take(2);
        return view('livewire.footer-component',['setting' => $setting, 'l_blogs' => $l_blogs]);
    }
}