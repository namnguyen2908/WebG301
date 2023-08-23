<?php

namespace App\Http\Controllers;

use App\Models\National;
use Illuminate\Http\Request;

class NationalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!auth()->check()) {
            return redirect('/login');
        }
        $nationals = National::all();
        return view('nationals.index', ['nationals' => $nationals]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!auth()->check()) {
            return redirect('/login');
        }
        return view('nationals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $national = new National();
        $national->name= $request->get('name');
        $national->area= $request->get('area');
        $national->save();
        return redirect('nationals/create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $national = National::find($id);
        return view('nationals.show', ['national' => $national]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $national = National::find($id);
        return view('nationals.edit', ['national' => $national]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $national = National::find($id);
        $national->name= $request->get('name');
        $national->area= $request->get('area');
        $national->save();
        return redirect('/nationals');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $national = National::find($id);
        $national->delete();
        return redirect('/nationals');
    }
}
