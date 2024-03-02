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
            <small>
                Characters: <span x-text="$wire.content.length"></span>
            </small> <br>
            <small>
                Words: <span x-text="$wire.content.split(' ').length - 1"></span>
            </small> <br>
            @error('content')
                <span class="text-danger text-sm font-italic">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
    <br>
    <button type="button" class="btn btn-secondary" x-on:click="$wire.save()">Submit</button>
</div>
