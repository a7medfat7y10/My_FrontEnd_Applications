<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
<form action="{{url('/tweets')}}" method="POST">
    {{csrf_field()}}
        {{ method_field('POST') }}
        <textarea name="body" class="w-full" placeholder="What's up?" required style="outline: none;"></textarea>
        @csrf
        <hr class="my-4">

        <footer class="flex justify-between">
            <?php $user = auth()->user() ?>
            <img src='{{asset('storage/' . $user->avatar)}}' alt="" class="rounded-full mr-2" style="width: 40px">
            <input type="submit" value="Publish" class="bg-blue-500 rounded-lg shadow py-2 px-10 hover:bg-blue-600 text-white cursor-pointer h-10 text-sm">
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
    @enderror
</div>
