@extends('layouts.admin')

@section('content')
    <h1>Edit Posts</h1>

    <div class="row">

        <div class="col-sm-3">
            <?php $photo = $post->photo ?>
            <img src="{{$photo ? $photo->file : 'https://placehold.it/400/400'}}" alt="" class="img-responsive img-rounded">

        </div>

        <div class="col-sm-9">
            {!! Form::model($post, ['method'=>'PUT', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
                {{csrf_field()}}
            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Category') !!}
                {!! Form::select('category_id', $categories ,null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body', 'Description') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update Post', ['class'=>'btn btn-primary col-sm-2']) !!}
            </div>
            {!! Form::close() !!}


            {{--delete form--}}
            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]]) !!}
            <div class="form-group">
                {!! Form::submit('Delete Post', ['class'=>'btn btn-danger col-sm-2 pull-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection