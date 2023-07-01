@extends('layout.app')

@section('content')
    <div class="content">
        <div class="title">Contact page</div>
    </div>

    @if (count($people))
        <ul>
            @foreach ($people as $person)
                <li>{{$person}}</li>
            @endforeach
        </ul>
    @endif
@stop

@section('footer')
    <script src=""></script>
@stop