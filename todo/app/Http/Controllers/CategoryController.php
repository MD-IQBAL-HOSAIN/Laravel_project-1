<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // echo "cat index called";
        $categories = category::with('subcategories')->paginate(config('global.paginate'));
        // return view('categories.index',compact('categories'));
        return view('categories.index',['categories'=>$categories]);
        // return view('categories.index')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');

        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255',
            'slug'=>'required|unique:categories|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
        ]);
         
        // dd($request->all());

        // $image = $request->file('image');
        // $image_name = time().'_'.$image->getClientOriginalName();
        // $file = $image->move(public_path('assets/images/category'), $image_name);
        $imagePath = $request->file('image')->store('category', 'public');
        // dd($image_name);
        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'image' => $imagePath,
            'status' => $request->status,
        ];
        // Category::create($request->all());
        Category::create($data);
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        return view('categories.show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
    //   return "destroy cat";
    category::destroy($category->id);
    return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
