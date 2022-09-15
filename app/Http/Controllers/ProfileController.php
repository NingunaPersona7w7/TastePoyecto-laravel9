<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Post;
use App\Models\Order;
use  App\Models\Stories;
use App\Models\Comment;

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
        $role = '';
        if(!empty($user->getRoleNames()) ) {
            $role = $user->getRoleNames()[0];
        }
        if($role == 'Seller') {
            $role = 'Vendedor';
            $qualification = 1;
            $qualifications = Comment::where('user_id', $user->id)->get();
            if(count($qualifications)==0){
                $qualification=0;
            }else{
                foreach ($qualifications as $qua) {
                    $qualification += $qua->calification;
                }
                $qualification = round($qualification/count($qualifications));
            }
            $products = Post::where('user_id', $user->id)->get();
            $history = "soy pobre.";
            return view('seller/profile/profile', compact('user', 'role', 'qualification', 'qualifications', 'products'));
        } else if($role=='Buyer'){
            $role = 'Comprador';
            $orders = Order::where('buyer_id', $user->id)->get();
            return view('buyer/profile/profile', compact('user', 'role', 'orders'));
        }
        else {
            $users = User::paginate(5);
            return view('users.index', compact('users'));
        }
    }

    public function show($id) {
        $user = User::find($id);
        $qualification = 1;
        $qualifications = Comment::where('user_id', $id)->get();
        if(count($qualifications)==0){
            $qualification = 1;
        }else{
            foreach ($qualifications as $qua) {
                $qualification += $qua->calification;
            }
            $qualification = round($qualification/count($qualifications));
        }
        $products = Post::where('user_id', $user->id)->get();
        return view('profile/profileById', compact('user', 'qualification', 'qualifications', 'products'));
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
