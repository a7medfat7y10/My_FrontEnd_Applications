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
                    <td><a href="{{url('/admin/users/'. $user->id . '/edit')}}"> {{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>
                        <?php $photo = $user->photo?>
                        <img height="50px" src="{{$photo ? '/images/' . $photo->name : 'https://placehold.it/50'}}" alt="">
                    </td>
                    <td>
                        <?php $role = $user->role;?>
                        {{ $role ? $role->name : 'User has no role'}}
                    </td>
                    <td>{{$user->is_approved == 1 ? 'Approved' : 'Not Approved'}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                </tr>

            @endforeach
            <div class="container">
                <a href = "{{url('/admin/users/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Add New Member</a>
            </div>
        @else
        <div class="container">
            <div class="alert alert-info">There is no records to show </div>
            <a href = "{{url('/admin/users/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Add New Member</a>
        </div>
        @endif
        </tbody>
    </table>

@endsection
