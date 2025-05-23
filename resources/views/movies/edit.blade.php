<x-layout>
    <h2>Edit Movie</h2>
    <form action="{{ route('movies.update', $movie->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $movie->title }}" required>
        </div>
        <div class="form-group">
            <label for="year">Année</label>
            <input type="date" name="year" id="year" class="form-control" value="{{ $movie->year }}" required>
        </div>
        <div class="form-group">
            <label for="note">Note</label>
            <input type="text" name="note" id="note" class="form-control" value="{{ $movie->note }}" required>
        </div>
        <div class="form-group">
            <label for="comment">Commentaire</label>
            <textarea name="comment" id="comment" class="form-control" required>{{ $movie->comment }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</x-layout>
