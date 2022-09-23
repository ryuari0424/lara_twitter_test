<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    public function firstPage(){
        $user = Auth::user();
        
        return view('tweet.first_page', ['user' => $user]);
    }

    public function tweetCreate(){
        return  view('tweet.create');
    }

    public function tweetStore(){
        
    }
}
