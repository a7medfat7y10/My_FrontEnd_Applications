<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tweet;

class TweetLikesController extends Controller
{
    public function store($id)
    {
        //
        $tweet = Tweet::find($id);
        $tweet->like(auth()->user());

        return back();
    }


    public function destroy($id)
    {
        //
        $tweet = Tweet::find($id);
        $tweet->dislike(auth()->user());

        return back();
    }
}
