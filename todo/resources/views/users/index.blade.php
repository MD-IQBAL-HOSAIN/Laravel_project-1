@extends('layouts.main', ['title' => 'Users Management'])

@section('content')    
<div>
    <h1 @style('text-align: center')>Users Page Here.</h1>
    <table class="table table-striped table-hover table-bordered table-sm table-responsive text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Roles</th>
                <th scope="col">Profile</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>    
            @forelse ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td >
                <td>{{ $user->roles }}</td>
                <td>
                    @if ($user->profile)
                        <li>{{ $user->profile->first_name }}</li>
                        <li>{{ $user->profile->last_name }}</li>
                        <li>{{ $user->profile->phone }}</li>
                            
                        @else
                            <li class='bg-danger'>No Profile Found</li>
                    @endif
                    
                </td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
            </tr>
            @empty
                <h2>No Data Found</h2>
            @endforelse
        </tbody>
    </table>
    {{ $users->onEachSide(2)->links() }}
</div>
@endsection

@section('sidebar')
<div>
    <h2>Sidebar</h2>
</div>    
@endsection
