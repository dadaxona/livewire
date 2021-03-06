<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Post;

class Search extends Component
{
  
    public $searchTerm;

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';     
        $usee=Post::where('name', 'like', $searchTerm)
            ->orWhere('email', 'like', $searchTerm)
            ->orWhere('password', 'like', $searchTerm)
            ->paginate(5);
        return view('livewire.search',['users'=>$usee]);
    }
}