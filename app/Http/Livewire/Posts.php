<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Models\Post;
  
class Posts extends Component
{
    public $posts, $name, $email, $password, $post_id;
    public $updateMode = false;
   

    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.posts');
    }  

    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }
   
    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
  
        Post::create($validatedDate);
  
        session()->flash('message', 'Post Created Successfully.');
  
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $this->post_id = $id;
        $this->name = $post->name;
        $this->email = $post->email;
        $this->password = $post->password;
  
        $this->updateMode = true;
    }
  
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }
  
    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
  
        $post = Post::find($this->post_id);
        $post->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Post Updated Successfully.');
        $this->resetInputFields();
    }
 
    public function delete($id)
    {
        Post::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
}
