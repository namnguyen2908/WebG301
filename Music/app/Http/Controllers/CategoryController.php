<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorys = Category::all();
        return view('categorys.index' , ['categorys' => $categorys]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorys.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->name= $request->get('name');
        $category->save();
        return redirect('categorys/create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
