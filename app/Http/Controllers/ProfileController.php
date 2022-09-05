<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Post;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('profile.edit');
    }

    public function profile()
    {
        $user = Auth::user();
        if($user->role != 'buyer') {
            $role = 'Vendedor';
            $qualification = 2;
            $qualifications = array(
                [
                    "reviews" => 3,
                    "comment" => "hola soy papa"
                ],
                [
                    "reviews" => 2,
                    "comment" => "hola soy mama"
                ],
                [
                    "reviews" => 4,
                    "comment" => "hola soy hermano"
                ],
                [
                    "reviews" => 5,
                    "comment" => "hola soy hijo"
                ],
                [
                    "reviews" => 1,
                    "comment" => "hola soy bobo"
                ],
                [
                    "reviews" => 3,
                    "comment" => "hola soy aaaa"
                ],
                [
                    "reviews" => 2,
                    "comment" => "hola soy ddddd"
                ],
                [
                    "reviews" => 5,
                    "comment" => "chao soy ddddd"
                ],
                [
                    "reviews" => 5,
                    "comment" => "chao soy ddddd"
                ],
                [
                    "reviews" => 5,
                    "comment" => "chao soy ddddd"
                ],
                [
                    "reviews" => 5,
                    "comment" => "chao soy ddddd"
                ],
                [
                    "reviews" => 5,
                    "comment" => "chao soy ddddd"
                ],
                [
                    "reviews" => 5,
                    "comment" => "chao soy ddddd"
                ],
                [
                    "reviews" => 5,
                    "comment" => "chao soy ddddd"
                ]

            );
            $products = Post::where('user_id', $user->id)->get();
            $history = "soy pobre.";
            return view('seller/profile/profile', compact('user', 'role', 'qualification', 'qualifications', 'products'));
        } else {
            $role = 'Comprador';
    
            return view('buyer/profile/profile', compact('user', 'role', 'qualification', 'qualifications'));
        }
    }

    public function profileById($id) {
        $user = User::find($id);
        $qualification= 3;
        $qualifications= [];
        return view('profile/profileById', compact('user', 'qualification', 'qualifications'));
    }
    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        if (auth()->user()->id == 1) {
            return back()->withErrors(['not_allow_profile' => __('You are not allowed to change data for a default user.')]);
        }

        auth()->user()->update($request->all());

        return back()->withStatus(__('Profile successfully updated.'));
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        if (auth()->user()->id == 1) {
            return back()->withErrors(['not_allow_password' => __('You are not allowed to change the password for a default user.')]);
        }

        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }
}
