@include('inc.header')


    @include('inc.navbar')
    <hr>
    <h1>{{$title}}</h1>
    @foreach ($todos as $todo)
    <li>{{$todo->title}} - {{$todo->description}} - {{$todo->is_completed}}</li>
    @endforeach

    <a href="{{url('todo/add')}}" class="btn btn-primary">Create Todo Form</a>
 


  @include('inc.footer') 
<!-- </body>

</html> -->