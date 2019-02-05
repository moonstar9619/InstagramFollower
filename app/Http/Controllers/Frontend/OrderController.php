<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Package;
use App\Models\Service;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function create()
    {
        $packages = Package::all();
        $phoneNumber = Auth::user()->phone;
//        $serviceLinkWay = Service::pluck('link_way')->toArray();
        return view('frontend.order.modal-service', compact('packages', 'phoneNumber'))->with('page_title', 'ثبت سفارش');
    }

    public function getServices($packageList)
    {
        $services = DB::table('services')->where('package_id', $packageList)->get()->toArray();
        return $services;
    }

    public function getLinkWayService($serviceId)
    {
        $linkWayService = DB::table('services')->where('service_id', $serviceId)->pluck('link_way')->toArray();
        return $linkWayService;
    }

    public function store(OrderRequest $orderRequest)
    {
        if ($orderRequest->has('usernameLinkOrder')) {
            $newOrder['link'] = $orderRequest->input('usernameLinkOrder');
        } elseif ($orderRequest->has('videoLinkOrder')) {
            $newOrder['link'] = $orderRequest->input('videoLinkOrder');
        } elseif ($orderRequest->has('pictureLinkOrder')) {
            $newOrder['link'] = $orderRequest->input('pictureLinkOrder');
        }

        $userID = User::find(Auth::user()->user_id);
        $newOrderObject = Order::create($newOrder);
        $userID->oreders()->attach([$newOrderObject->order_id =>['service_id'=>$orderRequest->input('serviceList')]]);
//        dd($syncuser);
        if(is_a($newOrderObject, Order::class)){
            return redirect()->route('frontend.order.create')->with('success','سفارش شما با موفقیت ثبت شد. ');
        }

    }
}
