<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class CommentBox extends Component
{
    public Post $post;
    public $body;

    public function render()
    {
        return view('livewire.comment-box');
    }

    public function submit()
    {
        $this->validate([
            'body' => 'required|min:5'
        ]);
        sleep(1);
        $this->post->comments()->create([
            'user_id' => 1,
            'body' => $this->body
        ]);
        $this->body = '';
        $this->post = Post::find($this->post->id);
    }
}
