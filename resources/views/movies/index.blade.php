<x-layout>
    <h2>Liste de films</h2>

    @if ($movies->count())
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>
                    <p>Titres</p>
                    <div class="d-flex">
                        <a>⬆️</a>
                        <a>⬇️</a>
                    </div>
                </th>
                <th>
                    <p>Années</p>
                    <div class="d-flex">
                        <a>⬆️</a>
                        <a>⬇️</a>
                    </div>
                </th>
                <th>
                    <p>Notes</p>
                    <div class="d-flex">
                        <a>⬆️</a>
                        <a>⬇️</a>
                    </div>
                </th>
                <th><p>Commentaires</p></th>
                <th><p>Actions</p></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->title }}</td>
                    <td>{{ \Carbon\Carbon::parse($movie->year)->format('Y') }}</td>
                    <td>{{ $movie->note }}</td>
                    <td>{{ $movie->comment }}</td>
                    <td>
                        <a href="{{ route('movies.edit', $movie->id) }}"
                           class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('movies.destroy', $movie->id) }}"
                              method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>No movies available.</p>
    @endif
</x-layout>
