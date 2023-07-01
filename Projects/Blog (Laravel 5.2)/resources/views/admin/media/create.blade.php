@extends('layouts.admin')

@section('styles')
    <linl rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.css"></linl>

@endsection

@section('content')
    <h1>Upload Media</h1>
    {!! Form::open(['method'=>'POST', 'action'=>'AdminMediasController@store', 'class' =>'dropzone','id'=>'my-awesome-dropzone']) !!}
    {!! Form::close() !!}
@endsection

@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js"></script>

@endsection