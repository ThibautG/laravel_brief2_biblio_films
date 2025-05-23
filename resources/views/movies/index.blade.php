<x-layout>
    <h2>Movies list</h2>

    @if ($movies->count())
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Titre</th>
                <th>Année</th>
                <th>Note</th>
                <th>Commentaire</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->year }}</td>
                    <td>{{ $movie->note }}</td>
                    <td>{{ $movie->comment }}</td>
                    <td>
                        <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
