@extends('layouts.main', ['title' => 'Subcategory Create'])

@section('content')

<h1 class="text-center">Create Subcategory</h1>

{{ html()->form()->route('subcategories.store')->open() }}

<div class="form-group">
    {{html()->label('Category')->for('category_id')}}
    {{html()->select('category_id', $categories)->class('form-select') }}
</div>
<div class="form-group">
    {{html()->label('Name')->for('name')}}
    {{html()->text('name')->class('form-control') }}
</div>

<div class="form-group">
    {{html()->label('slug')->for('slug')}}
    {{html()->text('slug')->class('form-control') }}
</div>

<div class="form-group">
    {{html()->label('Description')->for('Description')}}
    {{html()->text('description')->class('form-control') }}
</div>

<div class="form-group">
    {{html()->label('Status')->for('Status')}}
    {{html()->select('status', [1 => 'Active', 0 => 'Deactive'])->class('form-control') }}
</div>

<div  class="form-group">
    {{html()->submit('Submit')->class('btn btn-primary') }}
</div>



{{html()->form()->close()}}

@endSection
