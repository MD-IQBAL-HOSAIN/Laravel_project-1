@extends('layouts.main', ['title' => 'Subcategories Management'])

@section('content')
<div class="container">
    <h1 class="text-center">Subcategory Page Here.</h1>
    <hr>
    <a href="{{ route('subcategories.create') }}" class="btn btn-primary">Create Suubcategory</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>S. ID</th>
                <th>Sub Category</th>
                <th>Category</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
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
                    <td>
                        <div>
                        <a href="{{route('subcategories.edit', $subcategory->id)}}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>

                        <form action="{{ route('subcategories.destroy', $subcategory->id) }}" class="d-inline" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete?')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>

                         <a href="{{route('subcategories.show', $subcategory->id)}}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                        </div>
                         {{-- <a href="{{route('subcategories.destroy', $subcategory->id)}}" class="btn btn-info btn-sm"><i class="bi bi-trash"></i></a>
                        </div> --}}
                    </td>
                </tr>
                @empty
                <h3 class="text-center">No Subcategory Found</h3>
            
                @endforelse 
        </tbody>
    </table>
</div>
    
@endsection