@extends('layouts.admin')

@section('content')
    <h1>Posts</h1>

    @if(Session::has('created_[post]'))
        <div class="bg-primary">{{session('created_post')}}</div>
    @endif
    @if(Session::has('updated_post'))
        <div class="bg-info">{{session('updated_post')}}</div>
    @endif
    @if(Session::has('deleted_post'))
        <div class="bg-danger">{{session('deleted_post')}}</div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>User</th>
            <th>Category</th>
            <th>Photo</th>
            <th>Title</th>
            <th>body</th>
            <th>Post</th>
            <th>Comments</th>
            <th>created</th>
            <th>updated</th>

        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>
                        @if($post->id)
                            <?php echo $post->user->name ; ?>
                        @else
                            <?php
                                $post->delete();
                                return redirect('/admin/posts');
                            ?>
                        @endif
                    </td>
                    <td>{{$post->category ? $post->category->name : 'uncategorized'}}</td>
                    <td><img height="50" src="{{$post->photo ? $post->photo->file : 'https://placehold.it/50'}}" alt=""></td>
                    <td><a href="{{url('admin/posts/edit/' . $post->id)}}">{{$post->title}}</a></td>
                    <td>{{str_limit($post->body , 40)}}</td>
                    <td><a href="{{url('home/post/'. $post->id)}}">View Post</a></td>
                    <td><a href="{{url('admin/comments/show/'. $post->id)}}">View Comments</a></td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>

            @endforeach
        @endif
        </tbody>
    </table>
    <!--Pagination-->
    <div class="row">
        <div class="col-sm-6 col-sm-offset-5">
            {{$posts->render()}}
        </div>
    </div>

@endsection
