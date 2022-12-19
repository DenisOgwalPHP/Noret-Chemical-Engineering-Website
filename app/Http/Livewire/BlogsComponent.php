<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogsComponent extends Component
{
    public function render()
    {
        $blogs = Blog::paginate(6);
        $l_blogs = Blog::orderBy('created_at', 'DESC')->get()->take(5);
        return view('livewire.blogs-component', ['blogs' => $blogs, 'l_blogs' => $l_blogs]);
    }
}