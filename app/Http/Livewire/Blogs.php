<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Livewire\Component;

class Blogs extends Component
{
    public $blog_title;
    public $slug;

    public function render()
    {
        $blogs = Blog::latest()->take(7)->get();
        return view('livewire.blogs', ['blogs' => $blogs]);
    }

    public function generateSlug()
    {
        $this->slug = SlugService::createSlug(Blog::class, 'slug', $this->blog_title);
    }

    public function store()
    {
        Blog::create([
            'blog_title' => $this->blog_title,
            'slug' => $this->slug
        ]);
    }
}
