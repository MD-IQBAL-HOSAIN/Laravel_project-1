<?php

namespace App\Http\Controllers;

use App\Models\todo;
use App\Models\topic;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Termwind\Components\Dd;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title="todos testing";
        
        return view('todo.index',['title'=>$title,'todos'=>todo::with('topics')->get()]);
        // return view('todo.index',['title'=>$title]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $topics = topic::pluck('title','id');        
        return view('todo.create',compact('topics'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // echo "todo store function called";
        // dd($request->all()); 

        $todo = new todo();
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->completed = $request->completed ?? 0;
        $todo->save();
        
        // $todo->topics()->attach($request->topics); 
        //attach save er moto kaj kore
        //sync attach and detach er kaj kore
        $todo->topics()->sync($request->topics);

        return redirect()->route('todo.index')->with('success', 'Todo created successfully.');
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
