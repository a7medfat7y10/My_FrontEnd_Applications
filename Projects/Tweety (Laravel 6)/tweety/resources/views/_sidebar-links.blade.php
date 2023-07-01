<ul>
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{url('/tweets')}}" >
            Home
        </a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{url('/explore')}}" >
            Explore
        </a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{url('/profiles') . '/' . auth()->user()->username }}" >
            Profile
        </a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="#" >
            Notifications
        </a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="#" >
            Messages
        </a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="#" >
            Lists
        </a>
    </li>
    <li>
        <form action="{{url('/logout')}}" method="POST">
            @csrf
            <button class="font-bold text-lg">Logout</button>
        </form>
    </li>
</ul>
