@extends('layouts.admin')

@section('content')
<div class="home-stats">
    <div class="container  text-center">
        <h1>Dashboard</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="stat st-members">
                    <i class="fa fa-users"></i>
                    <div class="info">
                        Total Users
                        <span><a href="{{url('/admin/users')}}">{{$users->count()}}</a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat st-pending">
                    <i class="fa fa-user-plus"></i>
                    <div class="info">
                        Pending Members
                        <span><a href="{{url('/admin/users/pending')}}">{{$pendingUsers->count()}}</a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat st-items">
                    <i class="fa fa-tag"></i>
                    <div class="info">
                        Total Items
                        <span><a href="{{url('/admin/items')}}">{{$items->count()}}</a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat st-comments">
                    <i class="fa fa-comments"></i>
                    <div class="info">
                        Total Comments
                        <span><a href="{{url('/admin/comments')}}">{{$comments->count()}}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="latest">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-users"></i> Latest 4 Registred Users
                        <span class="toggle-info pull-right">
                                    <i class="fa fa-plus fa-lg"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled latest-users">
                            @if(! empty($latestUsers))
                                @foreach ($latestUsers as $user)
                                <li>
                                    {{$user->name}}
                                    <a href="{{url('/admin/users/' . $user->id . '/edit' ) }}">
                                        <span class="btn btn-success pull-right">
                                        <i class="fa fa-edit"></i>Edit
                                        @if ($user['is_approved'] == 0)
                                            <a href="{{url('/admin/users/' . $user->id . '/activateUser')}}" class='btn btn-info activate pull-right'><i class='fa fa-check'></i> Activate</a>
                                        @endif
                                        </span>
                                    </a>
                                </li>
                                @endforeach
                            @else
                                {{'There is no users to show'}}
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-tag"></i> Latest Items
                        <span class="toggle-info pull-right">
                            <i class="fa fa-plus fa-lg"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled latest-users">

                            @if(! empty($latestItems))
                                @foreach ($latestItems as $item)
                                    <li>
                                    {{$item['name']}}
                                    <a href="{{url('/admin/items/' . $item->id . '/edit') }}">
                                        <span class="btn btn-success pull-right">
                                        <i class="fa fa-edit"></i>Edit
                                        @if ($item['is_approved'] == 0)
                                            <a href='{{url('/admin/items/' . $item->id . '/activateItem')}}' class='btn btn-info activate pull-right'><i class='fa fa-check'></i> Approve</a>
                                        @endif
                                        </span>
                                    </a>
                                    </li>
                                @endforeach
                            @else {
                                echo 'There is No Record To show ';
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-users"></i> Latest Comments
                        <span class="toggle-info pull-right">
                            <i class="fa fa-plus fa-lg"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        @if(! empty($comments))
                            @foreach ($comments as $comment)
                                <div class="comment-box">
                                    <span class="member-name">
                                        <a style="text-decoration:none;color:#555" href="{{url('/admin/users/'. $comment->user_id)}}"> {{$comment->user->name }} </a>
                                    </span>
                                    <p class="member-comment">{{$comment['body']}} </p>
                                    <a href='{{url('/admin/comments/' . $comment->id . '/edit')}}' class='btn btn-success'><i class='fa fa-edit'></i> Edit</a>
                                    @if ($comment['is_approved'] == 0)
                                        <a href="" class='btn btn-info activate'><i class='fa fa-check'></i> Approve</a>
                                    @endif
                                </div>
                                <hr>
                            @endforeach
                        @else
                            {{'There is no comments to show'}}
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

