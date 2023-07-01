@extends('layouts.admin')


@section('content')
    <h1>Edit Categories</h1>

    <div class="row">

        {!! Form::model($category , ['method'=>'PUT', 'action'=>['AdminCategoriesController@update', $category->id]]) !!}
        {{ method_field('PUT') }}
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update Category', ['class'=>'btn btn-primary col-sm-2']) !!}
        </div>
        {!! Form::close() !!}


        {{--delete form--}}
        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete Category', ['class'=>'btn btn-danger col-sm-2 pull-right']) !!}
        </div>
        {!! Form::close() !!}

    </div>


@endsection
