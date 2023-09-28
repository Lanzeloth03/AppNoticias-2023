<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostLivewire extends Component{

    public function render(){
        $posts=Post::paginate(4);
        return view('livewire.post-livewire', compact('posts'));
    }
}
