<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Pro extends Component
{
   
    public $searchTerm;


    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        $usee=Post::where('name', 'like', $searchTerm)
            ->orWhere('email', 'like', $searchTerm)
            ->orWhere('password', 'like', $searchTerm)
            ->paginate(5);
        return view('livewire.pro',['users'=>$usee]);
    }
}
