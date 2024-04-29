<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title="todos testing";
        
        return view('todo.index',['title'=>$title,'todos'=>todo::all()]);
        // return view('todo.index',['title'=>$title]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "todo store function called";
    }

    /**
     * Display the specified resource.
     */
    public function show(todo $todo)
    {
        echo "todo show function called";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(todo $todo)
    {
        echo "todo edit function called";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, todo $todo)
    {
        echo "todo update function called";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(todo $todo)
    {
        echo "todo destroy function called";
    }
}
