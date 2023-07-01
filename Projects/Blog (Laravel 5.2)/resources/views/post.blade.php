@extends('layouts.blog-post')

@section('content')


    <!-- Blog Post -->

    <!-- Title -->
    <h1>{{$post->title}}</h1>

    <!-- Author -->
    <p class="lead">
        by <a href="#">{{$post->user->name}}</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p><span class="glyphicon glyphicon-time"></span> Posted {{$post->created_at->diffForHumans()}}</p>

    <hr>

    <!-- Preview Image -->
    <img class="img-responsive" src="{{$post->photo ? $post->photo->file : 'http://www.placehold.it/700x200'}}" alt="">

    <hr>

    <!-- Post Content -->
    <p>{{$post->body}}</p>
    <hr>

    <!--flashing message for comment-->
    @if(Session::has('comment_message'))
        <div class="bg-success">{{session('comment_message')}}</div>
    @endif




    <!-- Blog Comments -->




    <!-- Comments Form -->
    @if (Auth::check())

        <div class="well">
            <h4>Leave a Comment:</h4>


            <form method="POST" action="{{ action('PostCommentsController@store') }}">
                {{ csrf_field() }}
                <input type="hidden" name="post_id" value="{{$post->id}}">
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea id="body" name="body" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Comment" class="btn btn-primary">
                </div>
            </form>


        </div>

        <hr>
    @endif






    <!-- Posted Comments -->
    @if(count($comments) > 0)
        <!-- Comment -->
        @foreach($comments as $comment)
            <div class="media" >
                <a class="pull-left" href="#">
                    <img height="64" class="media-object" src="{{$comment->photo}}" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">{{$comment->author}}
                        <small>{{$comment->created_at->diffForHumans()}}</small>
                    </h4>
                    <p>{{$comment->body}}</p>

                        @if (count($comment->replies) > 0)
                                @foreach($comment->replies as $reply)
                                    @if($reply->is_active == 1)
                                        <!-- Nested Comment -->
                                        <div class="media" style="margin-top:40px;">
                                            <a class="pull-left" href="#">
                                                <img height="64" class="media-object" src="{{$reply->photo}}" alt="">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">{{$reply->author}}
                                                    <small>{{$reply->created_at->diffForHumans()}}</small>
                                                </h4>
                                                <p>{{$reply->body}}</p>
                                            </div>
                                        </div>


                                    @endif
                                @endforeach
                        @endif
                        <div class="comment-reply-container">
                            <button class="toggle-reply btn btn-primary pull-right">Reply</button>
                            <div class="comment-reply" >
                                {{--reply--}}
                                <form method="POST" action="{{ action('CommentRepliesController@createReply') }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="comment_id" value="{{$comment->id}}">
                                    <div class="form-group">
                                        <label for="body">Body</label>
                                        <textarea id="body" name="body" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Submit Reply" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
            </div>
        @endforeach
    @endif

@endsection







{{--Categories//////--}}

@section('categories')
    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-6">
            <ul class="list-unstyled">
                @foreach($categories as $category)
                <li>
                    <a href="{{'/codehacking/public/admin/categories/'}}{{$category->id}}{{'/edit'}}">{{$category->name}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection




@section('scripts')
    <script>
        $('.comment-reply-container .toggle-reply').click(function() {
            $(this).next().toggle('slow');
        });
    </script>
@endsection
