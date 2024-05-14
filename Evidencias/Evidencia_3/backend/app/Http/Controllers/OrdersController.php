<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Photos;
use App\Models\Customers;

class OrdersController extends Controller
{
    public function index(){
        $orders = Orders::select('id','status','data_time','invoice_number','customer_number','customer_id','photo_id')->get();
        return view('orders.index', compact('orders'));
    }
}
