@extends('layouts.admin')

@section('content')

    <h1>Users</h1>
    @if(Session::has('created_user'))
        <div class="bg-primary">{{session('created_user')}}</div>
    @endif
    @if(Session::has('updated_user'))
        <div class="bg-info">{{session('updated_user')}}</div>
    @endif
    @if(Session::has('deleted_user'))
        <div class="bg-danger">{{session('deleted_user')}}</div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Photo</th>
            <th>Role</th>
            <th>Status</th>
            <th>created</th>
            <th>updated</th>

        </tr>
        </thead>
        <tbody>
            @if($users)
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td><a href="{{url('admin/users/edit/' . $user->id)}}"> {{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>
                            <?php $photo = $user->photo?>
                            <img height="50px" src="{{$photo ? $photo->file : 'https://placehold.it/50'}}" alt="">
                        </td>
                        <td>
                            <?php $role = $user->role;?>
                            {{ $role ? $role->name : 'User has no role'}}
                        </td>
                        <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>{{$user->updated_at->diffForHumans()}}</td>
                    </tr>

                @endforeach
            @endif
        </tbody>
    </table>
@stop
