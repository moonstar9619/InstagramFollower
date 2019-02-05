<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ServiceRequest;
use App\Models\Package;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.service.list', compact('services'))->with('page_title', 'لیست سرویس ها');
    }

    public function create()
    {
        $packages = Package::all();
        $linkWays = Service::getLinkWay();
        return view('admin.service.create', compact('packages', 'linkWays'))->with('page_title', 'افزودن سرویس جدید');
    }

    public function store(ServiceRequest $serviceRequest)
    {

        $newService = [
            'name' => $serviceRequest->input('name'),
            'service_price' => $serviceRequest->input('price'),
            'link_way' => $serviceRequest->input('service_link_way'),
            'package_id' => $serviceRequest->input('service_package')
        ];
        $newServiceObject = Service::create($newService);
        if (is_a($newServiceObject, Service::class)) {
            return redirect()->route('admin.services.list')->with('success', 'سرویس با موفقیت انجام شد.');
        }
    }

    public function edit($service_id)
    {
        if ($service_id && ctype_digit($service_id)) {
            $serviceItem = Service::find($service_id);
            $packages = Package::all();
            $linkWays = Service::getLinkWay();
            if (is_a($serviceItem, Service::class)) {
                return view('admin.service.edit', compact('serviceItem', 'packages', 'linkWays'))->with('page_title', 'ویرایش سرویس');
            }
        }
    }

    public function update(ServiceRequest $serviceRequest, $service_id)
    {
        $inputs = [
            'name' => $serviceRequest->input('name'),
            'service_price' => $serviceRequest->input('price'),
            'link_way' => $serviceRequest->input('service_link_way'),
            'package_id' => $serviceRequest->input('service_package')
        ];
        $serviceItem = Service::find($service_id);
        $serviceItem->update($inputs);
        return redirect()->route('admin.services.list')->with('success', 'عملیات بروزرسانی با موفقیت انجام شد.');
    }

    public function remove($service_id)
    {
        if ($service_id && ctype_digit($service_id)) {
            $serviceItem = Service::find($service_id);
            if (is_a($serviceItem, Service::class)) {
                $serviceItem->delete();
                return redirect()->route('admin.services.list')->with('success', 'عملیات حذف با موفقیت انجام شد. ');
            }
        }
    }

}
