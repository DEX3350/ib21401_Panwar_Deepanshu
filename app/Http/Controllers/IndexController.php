<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class IndexController extends Controller
{
    //
    public function a()
    {
        $tweets=Tweet::all()->sortByDesc('created_at');
        //dd($tweets);
        return view('tweet.index')
            ->with('tweets',$tweets);
           
    }
    
}
