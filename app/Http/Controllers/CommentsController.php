<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Comment;
use Egulias\EmailValidator\Parser\Comment as ParserComment;

class CommentsController extends Controller
{
    public function comments(){
        return view('comments', [
            'posts' => CommentsController::with('users')->latest()->paginate()
        ]);
    }
    public function index()
    {
        $roles = Comment::paginate(5);
        return view('roles.index', compact('roles'));
    }

    public function comment(CommentsController $comment){
        return view('comment', ['post' => $comment]);
    }
}
