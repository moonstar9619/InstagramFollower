<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Void_;

class TransactionsController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::user()->user_id);
        $transactions = $user->payments()->get();
        return view('user.transaction.transactions',compact('transactions'))->with('page_title','لیست تراکنش ها');
    }
}
