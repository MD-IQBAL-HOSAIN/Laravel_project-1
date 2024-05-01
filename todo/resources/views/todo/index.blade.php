@include('inc.header')


    @include('inc.navbar')
    <hr>
    <h1>{{$title}}</h1>
    {{-- @foreach ($todos as $todo)
    <li>{{$todo->title}} - {{$todo->description}} - {{$todo->is_completed}}</li>
    @endforeach --}}

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
 


  @include('inc.footer') 
<!-- </body>

</html> -->