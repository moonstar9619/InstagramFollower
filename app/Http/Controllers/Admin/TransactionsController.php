<?php

namespace App\Http\Controllers\Admin;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionsController extends Controller
{
    public function index()
    {
        $transactions = Payment::all();
        return view('admin.transaction.list',compact('transactions'))->with('page_title','لیست تراکنش ها');
    }

    public function remove($payment_id)
    {
        if($payment_id && ctype_digit($payment_id)){
            $transactionItem = Payment::find($payment_id);
            if(is_a($transactionItem, Payment::class)){
                $transactionItem->delete();
                return redirect()->route('admin.transactions.list')->with('success','تراکنش مورد نظر با موفقیت حذف شد.');
            }
        }
    }
}
