<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Services\TweetService;

class IndexController extends Controller
{
    //
    public function a()
    {
        // $tweets=Tweet::all()->sortByDesc('created_at');
        $tweets= Tweet::orderBy('created_at','DESC')->get();
        $tweetService = new TweetService();
        $tweets=$tweetService->getTweets();
        return view('tweet.index')
            ->with('tweets',$tweets);
           
    }
    
}
