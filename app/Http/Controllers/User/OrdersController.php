<?php

namespace App\Http\Controllers\User;

use App\Models\Payment;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use function PhpParser\filesInDir;

class OrdersController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::user()->user_id);
        $userPhone = Auth::user()->phone;
        $userOrders = $user->oreders()->get();
        $userPaymentInfo = $user->payments()->get();
//        dd($status);
        /// ta in ja :
        /// mikham service id ro bgiram ta b table e service va dar nahayat b price service dastresi dashte basham.
        /// rah e dige ii k hast ine k price ro toye table e pivot e user va order biyaram k baz baraye sabt dar paygah dade
        /// 2bare kari daram...
        /*$servicePrice = $user->oreders()->pivot->service_id;
        dd($servicePrice);*/
        return view('user.order.orders', compact('userOrders', 'userPhone', 'userPaymentInfo'))->with('page_title', 'لیست سفارشات');
    }
}
