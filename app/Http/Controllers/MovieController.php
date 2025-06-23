<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|date',
            'note' => 'required|numeric|max:10',
            'comment' => 'required|string',
        ]);

        Movie::create($request->all());
        return redirect()->route('movies.index')->with('success', 'Movie created successfully.');
    }

    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|date',
            'note' => 'required|numeric|max:10',
            'comment' => 'required|string',
        ]);

        $movie->update($request->all());
        return redirect()->route('movies.index')->with('success', 'Movie updated successfully.');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index')->with('success', 'Movie deleted successfully.');
    }

    public function search()
    {
        $search = request('search');
        $movies = Movie::where('title', 'LIKE', '%' . $search . '%')->get();
        return view('movies.index', compact('movies'));
    }

    public function sortAscTitle()
    {
        $movies = Movie::query()->orderBy('title', 'ASC')->get();
        return view('movies.index', compact('movies'));
    }

    public function sortDescTitle()
    {
        $movies = Movie::query()->orderBy('title', 'DESC')->get();
        return view('movies.index', compact('movies'));
    }

    public function sortAscYear()
    {
        $movies = Movie::query()->orderBy('year', 'ASC')->get();
        return view('movies.index', compact('movies'));
    }

    public function sortDescYear()
    {
        $movies = Movie::query()->orderBy('year', 'DESC')->get();
        return view('movies.index', compact('movies'));
    }

    public function sortAscNote()
    {
        $movies = Movie::query()->orderBy('note', 'ASC')->get();
        return view('movies.index', compact('movies'));
    }

    public function sortDescNote()
    {
        $movies = Movie::query()->orderBy('note', 'DESC')->get();
        return view('movies.index', compact('movies'));
    }
}
