<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Create extends Component
{
    public $title;
    public $author;
    public $description;
    public $price;
    protected $rules = [
        'title' => 'required|min:6',
        'author' => 'required|min:5',
        'description' => 'required|min:1',
        'price' => 'required|min:1',
    ];
    public function submit()
    {
        $this->validate();
        $post = new Post();
        $post->title = $this->title;
        $post->author = $this->author;
        $post->description = $this->description;
        $post->price = $this->price;
        $post->save();
        \session()->flash('msg', 'Post successfully created');
        return \redirect()->route('post.index');
    }
    public function render()
    {
        return view('livewire.post.create')->extends('layouts.app');
    }
}
