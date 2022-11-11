<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $from = date('2018-01-01');
        $to = date('2018-05-02');
        Messages::whereBetween('created_at', [$from, $to])->count('id');

        $today_messages = Messages::where('created_at', 'LIKE', '%'.date('Y-m-d').'%')->get();
        $total_messages = Messages::count('id');

        return view('dashboard',['messages'=>$today_messages,'total_message'=>$total_messages]);
    }
}
