<div class="bg-gray-200 border border-blue-300 rounded-lg px-3 py-6">

    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @forelse(auth()->user()->follows as $user)
            <li class="{{($loop->last) ? '' : 'mb-4'}} ">
                <div class="flex items-center text-sm">
                    <a href="{{route('profile', $user->username)}}">
                        <img src='{{asset('storage/' . $user->avatar)}}' alt="" class="rounded-full mr-2" style="width: 40px">
                    </a>
                    <a href="{{route('profile', $user->username)}}">
                        {{$user->name}}
                    </a>
                </div>
            </li>

        @empty
            <li>No friends yet</li>
        @endforelse
    </ul>
</div>
