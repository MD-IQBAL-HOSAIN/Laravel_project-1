<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //    echo "Sub cat called";
    $subcategories = subcategory::with('category')->paginate(10);
       return view('subcategories.index')->with('subcategories',$subcategories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::pluck('name', 'id')->toArray();
        // dd($categories);
        return view('subcategories.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        subcategory::create($request->all());
        return redirect()->route('subcategories.index')->with('success', 'Subcategory created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(subcategory $subcategory)
    {
       echo "sub cat show function called";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(subcategory $subcategory)
    {
    //    echo "sub cat edit function called";
    $c = category::pluck('name', 'id');
    return view('subcategories.edit')
    ->with('categories',$c)
    ->with('subcategory',$subcategory);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, subcategory $subcategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id'
        ]);

        $subcategory->update($request->all());
        return redirect()->route('subcategories.index')->with('success', 'Subcategory updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(subcategory $subcategory)
    {
        echo "sub cat destroy function called";
    }
}
