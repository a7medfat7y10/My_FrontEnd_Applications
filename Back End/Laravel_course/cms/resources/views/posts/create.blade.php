@extends('layout.app')

@section('content')

    <h1>Create Post</h1>


{{--    <form method="post" action="/cms/public/posts">--}}
    {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store', 'files'=>true]) !!}


{{--        <input type="text" name="title" placeholder="Enter title">--}}
    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>
        {{csrf_field()}}


    <div class="form-group">
        {!! Form::file('file', ['class'=>'form-control']) !!}
    </div>


    {{--        <input type="submit" name="submit">--}}
    {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}



    {!! Form::close() !!}
{{--    </form>--}}

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
    @endif



@endsection