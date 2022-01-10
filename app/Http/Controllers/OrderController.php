<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //public function __construct(){
    //    $this->middleware('auth');
    //}

    public function create() {
        return view('orders.create');
    }

    public function store() {
        $order = new Order();

        $order->name = request('name');
        $order->type = request('type');
        $order->teeth = request('teeth');
        $order->body = request('body');
        $order->skin = request('skin');
        $order->eyes = request('eyes');
        $order->limbs = request('limbs');

        $order->save();

        return redirect('/')->with('mssg', 'Thanks for your order!');
    }

    public function index() {
        $orders = Order::orderBy('id')->get();
        return view('orders.index', ['orders' => $orders]);
    }
    public function show($id) {
        $order = Order::findOrFail($id);
        return view('orders.show', ['order' => $order]);
    }

    public function destroy($id) {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect('/orders');
    }
}
