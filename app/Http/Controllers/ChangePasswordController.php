<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password']
        ]);


        User::find(auth()->user()->id)->update(['password'=>Hash::make($request->new_password)]);
        return redirect()->route('profile.index')->with('success', "Password telah diperbarui!");
    }
}
