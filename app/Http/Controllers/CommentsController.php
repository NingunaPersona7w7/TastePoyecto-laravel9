<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    public function comments(){
        return view('comments', [
            'posts' => CommentsController::with('users')->latest()->paginate()
        ]);
    }

    public function comment(CommentsController $comment){
        return view('comment', ['post' => $comment]);
    }
}
