<?php

namespace App\Http\Livewire\Components;
use App\Models\Post;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;


class CreatePost extends Component
{
    public $content;
    public $images;
    public $video;
    public function render()
    {
        return view('livewire.components.create-post');
    }

    public function createpost()
    {
        $this->validate([
                'content' =>"required|string"
            ]);

            // creating post

            Post::create([
                "uuid"=>Str::uuid(),
                "user_id"=>auth()->id(),
                "content"=>$this->content,
            ]);

            // if post his media

            $images= [];
            if($this->images)
            {
                foreach ($this->images as $images)
                {
                    $images[]=$images->store("post/images", "public");
                }
            }



            unset($this->content);
            $this->dispatchBrowserEvent('alert', [
                "type" => "sucess", "message", "Your Post have been Published"
            ]);
    }


}
