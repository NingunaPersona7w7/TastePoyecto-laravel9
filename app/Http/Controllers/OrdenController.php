<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Model\Comment;
use Egulias\EmailValidator\Parser\Comment as ParserComment;

class OrdenController extends Controller
{
<<<<<<< HEAD
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
=======
    public function index()
    {
        $orders = Order::paginate(5);
        return view('seller.home', compact('orders '));
    }
    public function store(Request $request) {
        request()->validate([
            'seller_id' => 'required',
            'buyer_id' => 'required',
            'post_id' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);
        Order::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $idOrder) {
        $order = Order::find($idOrder);
        $order->status = $request->input('status');
        $order->save();
        return redirect()->back();
    }
    public function orders(){

        return view('seller.orders', ['orders' => Order::all()]);

    }

    public function show($id){
        $order = Order::find($id);
        return view('buyer.orders', ['order' => $order]);

>>>>>>> 62505aa93e1eae2d2e1ae00acf9793cc3b13646f
    }
}
