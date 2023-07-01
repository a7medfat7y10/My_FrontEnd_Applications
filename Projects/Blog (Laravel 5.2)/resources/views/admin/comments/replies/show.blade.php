@extends('layouts.admin')


@section('content')

    @if(count($replies) > 0)
        <h1>Replies</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Author</th>
                <th>Email</th>
                <th>Body</th>

            </tr>
            </thead>
            <tbody>
            @if($replies)
                @foreach($replies as $reply)
                    <tr>
                        <td>{{$reply->id}}</td>
                        <td>{{$reply->author}}</td>
                        <td>{{$reply->email}}</td>
                        <td>{{$reply->body}}</td>
                        <td><a href="{{route('home.post', $reply->comment->post_id)}}"> View Comment</a></td>
                        <td>
                            @if($reply->is_active ==  1)
                                <form method="POST" action="{{ action('CommentRepliesController@update', ['id' => $reply->id]) }}">
                                    <input type="hidden" name="_method" value="PUT">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="is_active" value="0">
                                    <div class="form-group">
                                        <input type="submit" value="un-approve" class="btn btn-info">
                                    </div>
                                </form>

                            @else
                                <form method="POST" action="{{ action('CommentRepliesController@update', ['id' => $reply->id]) }}">
                                    <input type="hidden" name="_method" value="PUT">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="is_active" value="1">
                                    <div class="form-group">
                                        <input type="submit" value="approve" class="btn btn-success">
                                    </div>
                                </form>
                            @endif
                        </td>

                        <td>
                            <form method="POST" action="{{ action('CommentRepliesController@destroy', ['id' => $reply->id]) }}">
                                <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="submit" value="delete" class="btn btn-danger">
                                </div>
                            </form>
                        </td>

                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>

    @else
        <h1 class="text-center">No Replies</h1>
    @endif

@endsection