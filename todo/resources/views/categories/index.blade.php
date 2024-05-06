@extends('layouts.main', ['title' => 'Categories Management'])

@section('content')
<h1>Categories Table</h1>
<div class="table-responsive">
    <a href="{{ route('categories.create') }}" class="btn btn-outline-primary btn-sm mb-4"><i class="bi bi-plus-square-fill"></i> Create New Category</a>
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Image</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    {{-- <td>{{ $category->id }}</td> --}}
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->description }}</td>
                    <td><img src="{{ asset('storage/'.$category->image) }}" width="60" height="60" class="img-fluid" alt="{{ $category->name }}"></td>
                    <td>{{ $category->status==1 ? 'Active' : 'Inactive' }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->updated_at}}</td>

                    <td class="text-center">
                        <div>
                            <a href="{{route('categories.edit', $category->id)}}"> <i class="bi bi-pencil-square text-primary" style="font-size: 1.5rem;"> </i>
                            </a>
    
                            <form action="{{route('categories.destroy', $category->id)}}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="Delete" onclick="return confirm('Are you sure?')" style="border: none; background-color:transparent;">
                                    <i class="bi bi-trash fs-4 text-danger"></i>
                                </button>
                            </form>
                        </div>
                        <a href="{{route('categories.show', $category->id)}}"> <i class="bi bi-eye fs-4 text-info"></i>
                        </a>                                         
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    {{ $categories->links() }}
</div>
@endsection