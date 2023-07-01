@extends('layouts.app')

@section('content')
    @foreach($users as $user)
        <div class="flex mb-4 px-4 py-2 rounded" style="justify-content: space-between;align-items:center ; border:1px solid #EEE">
            <div width="70%" class="mt-3">
                <a href="{{url('/profiles' . '/' . $user->username)}}" class="flex items-center mb-5">
                    <img src="{{asset('storage/' . $user->avatar)}}"
                        alt="{{$user->username}}'s avatar'"
                        width="60"
                        class="mr-4 rounded-full">
                    <div>
                        <h4 class="font-bold">{{"@" . $user->username }} </h4>
                    </div>
                </a>
            </div>
            <div width="30%">
                @if(auth()->user()->id != $user->id )
                        <form method="POST" action="{{url('/profiles' . '/' . $user->username .'/follow')}}">
                            {{ csrf_field() }}
                            <button type="submit" class="rounded-full bg-blue-500 shadow py-2 px-4 text-white text-xs">
                                {{auth()->user()->following($user) ? 'Unfollow' : 'Follow' }}
                            </button>
                        </form>
                @endif
            </div>
        </div>
    @endforeach
 {{ $users->render()}}


 <style>
     ul.pagination {
         display: flex;
         justify-content: center
     }
     ul.pagination li.page-item {
        background-color: #4299e1;
        padding: 10px;
        color: white;
        border-radius: 3px;
        margin: 2px;
        margin-bottom: 10px
     }
     ul.pagination li.page-item.active {
         background-color: blue
     }
 </style>

@endsection
