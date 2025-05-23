<x-layout>
        <h2>Ajouter un film</h2>
        <form action="{{ route('movies.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="year">Année</label>
                <input type="date" name="year" id="year" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="note">Note</label>
                <input type="text" name="note" id="note" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="comment">Commentaire</label>
                <textarea name="comment" id="comment" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Ajouter</button>
        </form>
</x-layout>
