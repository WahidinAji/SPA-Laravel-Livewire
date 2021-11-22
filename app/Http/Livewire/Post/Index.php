<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';
    public $message = 'Hello World!';
    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['search' => ['except' => '']];
    public function render()
    {
        // $posts = Post::orderBy('id', 'desc')->where('title', 'like', '%' . $this->search . '%')->paginate(10);
        $posts = Post::orderBy('id', 'desc');
        if (empty(request()->has('search'))) {
            $posts = $posts->where('title', 'like', "%{$this->search}%");
            // $posts = $posts->where('title', 'like', '%' . $this->search . '%');
        } else {
            $posts = $posts;
        }
        $posts = $posts->paginate(10);
        return view('livewire.post.index', compact('posts'))->extends('layouts.app');
    }
}
