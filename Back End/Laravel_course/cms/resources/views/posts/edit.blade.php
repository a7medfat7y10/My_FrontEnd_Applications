@extends('layout.app')

@section('content')
    <h1>Edit Post</h1>
{{--    <form method="post" action="/cms/public/posts/{{$post->id}}">--}}
    {!! Form::model($post, ['method'=>'PUT', 'action'=>['PostsController@update', $post->id]]) !!}

        {{--This is bacause update needs PUT/Patch--}}
{{--        <input type="hidden" name="_method" value="PUT">--}}

{{--        <input type="text" name="title" placeholder="Enter title" value="{{$post->title}}">--}}
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
    {{csrf_field()}}
{{--        <input type="submit" value="Update">--}}
    {!! Form::submit('Update Post', ['class'=>'btn btn-info']) !!}

{{--    </form>--}}
    {!! Form::close() !!}


{{--    <form method="post" action="/cms/public/posts/{{$post->id}}">--}}
    {!! Form::open(['method'=>'DELETE', 'action'=>['PostsController@destroy', $post->id]]) !!}

        {{--This is bacause update needs DELETE--}}
{{--        <input type="hidden" name="_method" value="DELETE">--}}

{{--        <input type="submit" value="Delete">--}}
    {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}

{{--    </form>--}}
    {!! Form::close() !!}
@endsection