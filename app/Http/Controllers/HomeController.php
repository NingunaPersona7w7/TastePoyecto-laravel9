<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Order;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = Auth::user();
        $products = Post::all();
        $role = '';
        if(!empty($user->getRoleNames()) ) {
            $role = $user->getRoleNames();
        }
        if($role == 'seller') {
            $orders = Order::where('seller_id', $user->id)->where('status', 'pending')->get();
            return view('seller.home', compact('orders'));
        } else {
            return view('buyer.home', compact('products'));
        }
    }

    public function storeOrder(Request $request) {
        request()->validate([
            'seller_id' => 'required',
            'buyer_id' => 'required',
            'post_id' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);
        $order = Order::create($request->all());
        return redirect()->route('order.show', ['id' => $order->id]);
    }

    public function updateOrder(Request $request, $idOrder) {
        $order = Order::find($idOrder);
        $order->status = $request->input('status');
        $order->save();
        return redirect()->back();
    }
    public function orders(){

        return view('seller.orders', [
            'orders' => Order::with('user')->lates()->paginate()]);

    }
}
