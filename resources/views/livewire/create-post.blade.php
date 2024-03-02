<div>
    <form wire:submit="save">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" wire:model="title" class="form-control">
            @error('title')
                <span class="text-danger text-sm font-italic">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label for="content">Content</label>
            <textarea name="" id="" cols="30" rows="10" wire:model="content" class="form-control"></textarea> 
            @error('content')
                <span class="text-danger text-sm font-italic">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
