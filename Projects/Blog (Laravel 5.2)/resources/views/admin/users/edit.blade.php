@extends('layouts.admin')

@section('content')

    <h1>Edit User</h1>
    <div class="row">
        <div class="col-sm-3">
            <?php $photo = $user->photo ?>
            <img src="{{$photo ? $photo->file : 'https://placehold.it/400/400'}}" alt="" class="img-responsive img-rounded">
            
        </div>

        <div class="col-sm-9">
            {!! Form::model($user, ['method'=>'PUT', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
                {{csrf_field()}}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'File') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('role_id', 'Role') !!}
                {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('is_active', 'Status') !!}
                {!! Form::select('is_active', [1 => 'Active', 0 => 'Not Active'] , null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update User', ['class'=>'btn btn-primary col-sm-2']) !!}
            </div>
            {!! Form::close() !!}


            {{--delete form--}}
            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
                <div class="form-group">
                    {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-2 pull-right']) !!}
                </div>
            {!! Form::close() !!}


        </div>
    </div>

    <div class="row">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@stop