@extends('layouts.main', ['title' => 'View Subcategory'])

@section('content')

<div class="container">
<div class="table-responsive mt-3">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th></th>
                <td><h1>Subcategory Info</h1></td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{$subcategory->name}}</td>
            </tr>
            <tr>
                <th>Slug</th>
                <td>{{$subcategory->slug}}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{$subcategory->description}}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{$subcategory->status}}</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>{{$subcategory->created_at}}</td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td>{{$subcategory->updated_at}}</td>
            </tr>
        </tbody>
    </table>
</div>

<a href="{{ route('subcategories.edit', $subcategory->id) }}" class="btn btn-primary">Edit</a>
<a href="{{ route('subcategories.index', $subcategory->id) }}" class="btn btn-success">Back</a>

</div>
