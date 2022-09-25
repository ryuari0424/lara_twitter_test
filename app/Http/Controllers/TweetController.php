<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    public function firstPage(){
        $user = Auth::user();
        
        return view('tweet.first_page', ['user' => $user]);
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
        dd($user);
        
    }
}
