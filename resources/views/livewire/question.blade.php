<div>
    <h2>Questions</h2>


    <div>
        <form wire:submit="enregistreDb">
            <div>
                <label for="libelle">Libelle</label> <br>
                <input type="text" wire:model="libelle">
            </div>
            <br>
            <div>
                <button type="submit">Enregistrer</button>
            </div>
        </form>
    </div>

    <br> <br>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Libelle</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($questions as $question)
            <tr>
                <td> {{ $question->id }}</td>
                <td> {{ $question->libelle }}</td>
                <td>
                    <button type="button" class="btn btn-danger" wire:click="delete({{ $question->id }})">Supprimer</button>
                </td>
            </tr>            
            @endforeach
        </tbody>
    </table>
</div>