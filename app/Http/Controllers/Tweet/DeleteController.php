<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    //
    public function e(Request $request){
        $tweetId = (int) $request->route('tweetId');
        $tweets = Tweet::where('id', $tweetId)->firstOrFair();
        $tweets->delete();
        return redirect()
            ->route('tweet.index')
            ->with('feedback.success',"つぶやきを削除しました。");
    }
}
