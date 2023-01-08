<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        // $from = date('2018-01-01');
        // $to = date('2018-05-02');
        // Messages::whereBetween('created_at', [$from, $to])->count('id');

        // $today_messages = Messages::where('created_at', 'LIKE', '%'.date('Y-m-d').'%')->get();
        $today_messages = Product::where('created_at', 'LIKE', '%'.date('Y-m-d').'%')->count();
        // $today_messages = Product::where('status',1)->count();
        $total_messages = Product::where('status',1)->count();


        return view('dashboard', ['messages' => $today_messages, 'total_message' => $total_messages]);
    }
}
