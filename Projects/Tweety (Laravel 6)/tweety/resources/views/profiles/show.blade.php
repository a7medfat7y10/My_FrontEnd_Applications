@extends('layouts.app')

@section('content')

    <header class="mb-6 relative">
        <img src="https://placehold.it/700X200/0000FF/808080 ?Text=Cover" class="mb-2" style="border-radius:20px; max-width:700px; max-height:200px;width:100%; height: auto">

        <div class="flex justify-between items-center mb-2">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}} </p>
            </div>
            <div class="flex">

                <!-- we can use this condition instead of using can => if(auth()->user()->id == $user->id)-->
                @if(auth()->user()->id == $user->id)
                    <a href="{{url('/profiles' . '/' . $user->username . '/edit')}} " class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
                @endif


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

        <div class="relative">
                <img
                src='{{asset('storage/' . $user->avatar)}}'
                alt=""
                class="rounded-full mr-2 absolute"
                style="width: 80px ; left: calc(50% - 40px); top:-120px" >
        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
             Commodi unde et sequi laborum,
              doloribus sapiente quia id porro earum tenetur ea,
               deserunt autem ratione quisquam molestias officia maxime soluta natus.
        </p>

    </header>


    @include('_timeline', ['tweets' => $tweets])

@endsection
