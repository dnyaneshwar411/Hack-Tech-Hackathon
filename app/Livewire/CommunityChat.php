<?php

namespace App\Livewire;

use App\Models\Community;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CommunityChat extends Component
{
    use WithFileUploads;

    public $text;
    public $file; 
    public function render()
    {
        return view('livewire.community-chat');
    }
    public function submit(){
        $content = new Community();
        $content->user_id = Auth::user()->id;
        $content->user_name = Auth::user()->name;
        if($this->text){
            $content->content = $this->text;
        }
        else {
            $content->content_type = 'image';
            $filename = time() . Auth::user()->id. '.'.$this->file->getClientOriginalExtension();
            $content->content = $filename;
            $this->file->storePubliclyAs('photos', $filename,'public');
        }
        $content->save();
        $message = 'content uploaded successfully';
        return $message;
    }
}
