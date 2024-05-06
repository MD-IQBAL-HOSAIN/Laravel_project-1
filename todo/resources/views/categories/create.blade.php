@extends('layouts.main', ['title' => 'Add New Category'])

@section('content')
<div class="container">
<h1>Add New Category</h1>
<a href="{{ url()->previous() }}" class="btn btn-outline-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 0-.5-.5H5.707l2-2.707L11.146 1.854a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H12.5a.5.5 0 0 0 0-1z"/>
    </svg>Back
</a>

<form action="{{route('categories.store')}}" method="POST"> 
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
    </div>
    <div class="mb-3">
        <label for="Slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="Slug" name="slug" value="{{old('slug')}}" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description"  value="{{old('description')}}" required>
    </div>

    <div class="mb-3 ">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*; capture=camera">
    </div>

    <div class="mb-3 form-check">
        {{-- <label class="form-check-label" for="status">Status</label> --}}
        <select class="form-select" name="status" id="">
            <option value="1">Active</option>
            <option value="0">Deactive</option>
        </select>
    </div>  

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

    
@endsection