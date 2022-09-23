<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserController extends Controller
{
    public function userEdit()
    {
        $user = Auth::user();

        return view('tweet.user_edit', ['user' => $user]);
    }

    public function userUpdate(Request $request, $user)
    {

        $user = User::find($user);
        $request->validate([
            'name' => 'required|max:255',
            'nickname' => 'required|max:255|min:2',
            'email' => 'required|email',
            'image' => 'file'
        ]);

        $img = $request->file('image');

        if ($img == null) {
            $user->update([
                'name' => $request->name,
                'nickname' => $request->nickname,
                'email' => $request->email,
            ]);
            return redirect()->route('first', ['user' => $user->id])->with('success', 'プロフィール編集が完了しました。');
        } else {

            $user->update([
                'name' => $request->name,
                'nickname' => $request->nickname,
                'email' => $request->email,
            ]);

            $path = $img->store('img', 'public');
            User::updateOrCreate(['image' => $user->image], ['image' => $path]);

            return redirect()->route('first', ['user' => $user->id])->with('success', 'プロフィール編集が完了しました。');
        }
    }
}
