<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();   
        return view('order' ,compact('orders','orders'));
    }

    public function store(Request $request)
    {
        $orders = new Order;

        $orders->name = $request->input('name');
        $orders->name = $request->input('phone');
        $orders->name = $request->input('address');

        $orders->save();

    }
}
