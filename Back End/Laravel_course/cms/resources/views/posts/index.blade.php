@extends('layout.app')

@section('content')
    <ul>
        {{--$posts is compacted from the method index in postcontroller--}}
        @foreach($posts as $post)
            <div class="image-container">
                <img height="100px" src="images/{{$post->path}}" alt="">
            </div>
            <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>
        @endforeach
    </ul>
@endsection