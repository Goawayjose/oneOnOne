<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Auth;

use Image;

class AccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        $user = User::find(Auth::user()->id);
        return view('account.edit', compact("user"));
    }

    public function update(Request $request)
    {
        $image = $request->file('image');
        $user = User::find(Auth::user()->id);
        // check to see if they want to change password
        if (trim($request->input('password')) == '') {
            $data = $request->except('password');
        } else {
            $data = $request->all();
        }
        $user->update($data);

        // do some save image code
        $img = Image::make($image->getRealPath());

        $path = 'img/'.Auth::user()->id.'png';
        /*$img->resize(200, 200, function ($constraint) {
            $constraint->aspectRatio();
        })->save($path);*/
        $img->save($path);
        $user->image = $path;
        $user->save();


        return redirect()->back()->with('message', 'Account Updated');
    }
}
