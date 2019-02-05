<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::user()->user_id);
        $userPhone = Auth::user()->phone;
        $userOrders = $user->oreders()->get();
        $userPaymentInfo = $user->payments()->get();

        return view('admin.order.list', compact('userOrders', 'userPhone', 'userPaymentInfo'))->with('page_title','لیست سفارشات');
    }
}
