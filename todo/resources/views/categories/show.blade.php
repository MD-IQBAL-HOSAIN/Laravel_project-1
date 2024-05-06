@extends('layouts.main', ['title' => 'Categories Management'])

@section('content')
<a href="{{url()->previous()}}" class="btn btn-outline-primary btn-sm mb-4"><i class="bi bi-arrow-left-square-fill"></i> Back</a>

<div class="table-responsive">
    <table class="table table-bordered">
        <tbody>
            <tr>   
                 <th></th>           
                <td><h1>Categories Info</h1></td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{$category->name}}</td>
            </tr>
            <tr>
                <th>Slug</th>
                <td>{{$category->slug}}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{$category->description}}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{$category->image}}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{$category->status}}</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>{{$category->created_at}}</td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td>{{$category->updated_at}}</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection