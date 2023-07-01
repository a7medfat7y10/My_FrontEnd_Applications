@extends('layouts.admin')


@section('content')

    @if(count($comments) > 0)
        <h1>Comments</h1>
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
            @if($comments)
                @foreach($comments as $comment)
                    <tr>
                        <td>{{$comment->id}}</td>
                        <td>{{$comment->author}}</td>
                        <td>{{$comment->email}}</td>
                        <td>{{$comment->body}}</td>
                        <td><a href="{{route('home.post', $comment->post_id)}}"> View Post</a></td>
                        <td>
                            @if($comment->is_active ==  1)
                                <form method="POST" action="{{ action('PostCommentsController@update', ['id' => $comment->id]) }}">
                                    <input type="hidden" name="_method" value="PUT">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="is_active" value="0">
                                    <div class="form-group">
                                        <input type="submit" value="un-approve" class="btn btn-info">
                                    </div>
                                </form>

                            @else
                                <form method="POST" action="{{ action('PostCommentsController@update', ['id' => $comment->id]) }}">
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
                            <form method="POST" action="{{ action('PostCommentsController@destroy', ['id' => $comment->id]) }}">
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
        <h1 class="text-center">No Comments</h1>
    @endif

@endsection