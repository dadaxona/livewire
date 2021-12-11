<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Name:</label>
        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name" wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email:</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" wire:model="email">
        @error('email') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Password:</label>
        <input type="text" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password" wire:model="password">
        @error('password') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
  
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>