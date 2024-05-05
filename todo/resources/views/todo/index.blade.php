@extends('layouts.main', ['title' => 'Todo List'])
@section('content')
{{-- logged in user er jonno @auth  directive --}}
@auth 
<marquee @style('color:red') behavior="" direction="ltr">Only logged in users will see this</marquee>   
@endauth

{{-- logged out user er jonno @guest  directive --}}
@guest
<marquee @style('color:red') behavior="" direction="ltr">Only logged out users will see this</marquee> 

@endguest

{{time()}}
{{-- forelse is better than foreach --}}
@forelse ($todos as $todo)
<li>{{$todo->title}} - {{$todo->description}} - {{$todo->is_completed}}</li>

@empty
<hr>
   <h1>No Todo list Found</h1>
@endforelse


<a href="{{url('todo/add')}}" class="btn btn-primary">Create Todo Form</a>

@endsection

@section('sidebar')
{{-- '@parent' default value index.blade.php theke neyar jonno er use kora --}}
@parent
<ul>
  <h3>Categories</h3>
  <li>A</li>
  <li>B</li>
  <li>C</li>
  <li>D</li>
  <li>E</li>
</ul>
    
@endsection




    