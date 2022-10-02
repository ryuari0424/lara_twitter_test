<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\User;
use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    public function firstPage(){
        
        $user = Auth::user();
        $tweets = Tweet::latest()->paginate(5);

        
        return view('tweet.first_page', ['user' => $user, "tweets" => $tweets]);
    }

    public function tweetCreate(){

        $user = Auth::user();
        return  view('tweet.tweet_create', ["user" => $user]);

    }

    public function tweetStore(Request $request, $user){
        $user = User::find($user);
        $request->validate([
            'text' => 'required|min:8|max:255'
        ]);

        $tweet = Tweet::create([
            "text" => $request->text,
            'user_id' => $user->id,
        ]);

        return redirect()->route('first', ["user" => $user->id])->with('success', 'ツイートしました');
    }

    public function tweetDestroy(Request $request, $user, $tweet){

        $tweet = Tweet::find($tweet);
        
        $tweet->delete();

        return redirect()->route('first', ["user" => $user])->with('success', 'ツイート削除しました');
    }
}
