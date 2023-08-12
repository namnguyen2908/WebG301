<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Music;
class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $musics = Music::all();
        return view('musics.index' , ['musics' => $musics]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();
        return view('musics.create', ['authors' => $authors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $music =new Music();
        $music->name = $request->get('name');
        $music->kindofmusic = $request->get('kindofmusic');
        $music->singer = $request->get('singer');
        $music->save();
        $music->authors()->attach($request->authors);
        return redirect('musics');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $music = Music::find($id);
        return view('musics.show', ['music' => $music]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $music = Music::find($id);
        $authors = Author::all();
        return view('musics.edit', ['music' => $music, 'authors' => $authors]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $music = Music::find($id);
        $music->name = $request->get('name');
        $music->kindofmusic = $request->get('kindofmusic');
        $music->singer = $request->get('singer');
        $music->authors()->sync($request->authors);
        $music->save();
        return redirect('musics');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $music = Music::find($id);
        $music->delete();
        return redirect('musics');
    }
}
