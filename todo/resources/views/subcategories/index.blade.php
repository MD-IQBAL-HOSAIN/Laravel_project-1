@extends('layouts.main', ['title' => 'Subcategories Management'])

@section('content')
    <h1 class="text-center">Subcategory Page Here.</h1>
    <hr>
    <a href="{{ route('subcategories.create') }}" class="btn btn-primary">Create Suubcategory</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($subcategories as $subcategory)
                <tr>
                    <td>{{$subcategory->id}}</td>
                    <td>{{$subcategory->name}}</td>
                    <td>{{$subcategory->category->name}}</td>
                    <td>{{$subcategory->created_at}}</td>
                    <td>{{$subcategory->updated_at}}</td>
                </tr>
                @empty
                <h3 class="text-center">No Subcategory Found</h3>
            
                @endforelse 
        </tbody>
    </table>
    
@endsection