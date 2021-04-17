<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditPostForm extends Component
{
    public Post $post;
    public $title;
    public $body;
    public $photo;
    protected $rules = [
        'title' => 'required',
        'body' => 'required|min:5',
        'photo' => 'nullable|image|max:5000'
    ];
    use WithFileUploads;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->body = $post->body;
    }

    public function render()
    {
        return view('livewire.edit-post-form');
    }

    public function submit()
    {
        $this->validate();
        $this->post->update([
            'title' => $this->title,
            'body' => $this->body,
            'photo' => $this->photo ? //if request has come with photo
                        $this->photo->store('images', 'public') : //store it in images folder **store method first arg is store folder name ,sec argument is a disk u can check in filesystems.php**
                        $this->post->photo ?? null//if not , check post has photo if it has,override that path if not save null
        ]);
    }

    // realtime photo validation
    public function updatedPhoto()
    {
        $this->validateOnly('photo');
    }
}
