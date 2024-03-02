<div>
    <h2>Posts</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr wire:key="{{ $post->id }}">
                <td>{{ str($post->title)->limit(20) }}</td>
                <td>{{ str($post->content)->words(15) }}</td>
                <td>
                    <button 
                        type="button" 
                        class="btn btn-outline-danger" 
                        wire:click="delete({{ $post->id }})"
                        wire:confirm="Are you sure you want to delete?"
                        >Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
