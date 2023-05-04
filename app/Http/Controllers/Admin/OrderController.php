<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function odersDetail()
    {
        $orders = OrderDetail::orderBy('id', 'DESC')->get();
        return view('admin.orders', compact('orders'));
    }

    public function singleOrderDetails($id)
    {
        $order = OrderDetail::find($id);
        return view('admin.single-order', compact('order'));
    }
}
