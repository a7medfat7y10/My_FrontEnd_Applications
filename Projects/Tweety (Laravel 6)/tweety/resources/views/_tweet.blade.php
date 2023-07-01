<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-2 flex-shrink-0">
        <a href="{{route('profile', $tweet->user->username)}}">
            <img src='{{asset('storage/' . $tweet->user->avatar)}}' alt="" class="rounded-full mr-2" style="width: 50px">
        </a>
    </div>

    <div>
        <h5 class="font-bold mb-4">
            <a href="{{url('/profiles') . '/' . $tweet->user->username }}">
                {{$tweet->user->name}}
            </a>
        </h5>
        <p class="text-sm">
            {{$tweet->body}}
        </p>

        <div class="flex mt-2 {{$tweet->isLikedBy(auth()->user()) ? 'text-blue-500' : 'text-gray-500' }}">

            <form method="POST" action="{{url('/tweets' . '/' . $tweet->id . '/like' )}}">
                @csrf
                <div class="flex items-center mr-4">
                    <button type="submit">
                        <i class="fa fa-thumbs-up mr-1 w-3 "></i>
                        <span class="text-xs">
                            <!--Note that likesnum and dislikesnum here are
                                the name of the column resulting from the join method I did ScopeWithLikes() in Tweet.php
                                and they give me the numberof likes for eachtweet-->
                            {{$tweet->likesnum ?: 0}}
                        </span>
                    </button>
                </div>
            </form>

            <form method="POST" action="{{url('/tweets' . '/' . $tweet->id . '/like' )}}">
                @csrf
                @method('DELETE')
                <div class="flex items-center {{$tweet->isDislikedBy(auth()->user()) ? 'text-blue-500' : 'text-gray-500' }}">
                    <button type="submit">
                        <i class="fa fa-thumbs-down mr-1 w-3 "></i>
                        <span class="text-xs">
                            <!--Note that likesnum and dislikesnum here are
                                the name of the column resulting from the join method I did ScopeWithLikes() in Tweet.php
                                and they give me the numberof likes for eachtweet-->
                            {{$tweet->dislikesnum ?: 0}}
                        </span>
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>
