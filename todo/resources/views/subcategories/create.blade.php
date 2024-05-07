@extends('layouts.main', ['title' => 'Subcategory Create'])

@section('content')

<div class="container">

<h1 class="text-center">Create Subcategory</h1>

{{ html()->form()->route('subcategories.store')->open() }}

@include('subcategories.form')

<div  class="form-group">
    {{html()->submit('Submit')->class('btn btn-primary') }}
</div>
</div>



{{html()->form()->close()}}

@endSection
